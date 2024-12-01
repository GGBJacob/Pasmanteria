package org.example;

import io.github.cdimascio.dotenv.Dotenv;

import javax.net.ssl.*;
import java.io.*;
import java.net.*;
import java.security.cert.X509Certificate;
import java.util.Base64;

public class OrderManager {

    static {
        disableSslVerification();
    }

    public static void changeOrderStatus(String reference, String newStatus) throws Exception {
        Dotenv dotenv = Dotenv.load();
        String shopURL = dotenv.get("SHOP_URL");
        String apiKey = dotenv.get("API_KEY");
        if (apiKey == null || apiKey.isEmpty()) {
            throw new IllegalArgumentException("API_KEY not found in environment variables.");
        }

        String authHeader = "Basic " + Base64.getEncoder().encodeToString((apiKey + ":").getBytes());

        String getOrderByReferenceUrl = shopURL + "/api/orders?filter%5Breference%5D=" + reference;
        String response = sendHttpRequest(getOrderByReferenceUrl, "GET", authHeader, null);

        String orderId = extractValueFromXml(response, "<order id=\"", "\"");
        if (orderId == null || orderId.isEmpty()) {
            throw new IllegalArgumentException("Order not found with reference: " + reference);
        }

        String getOrderByIdUrl = shopURL + "/api/orders/" + orderId;
        String orderDetails = sendHttpRequest(getOrderByIdUrl, "GET", authHeader, null);

        String updatedOrderDetails = orderDetails.replaceFirst(
                "<current_state xlink:href=\"" + shopURL + "/api/order_states/[0-9]+\">.*?</current_state>",
                "<current_state xlink:href=\"" + shopURL+ "/api/order_states/" + newStatus + "\"><![CDATA[" + newStatus + "]]></current_state>"
        );

        String updateOrderUrl = shopURL + "/api/orders/" + orderId;
        String updateResponse = sendHttpRequest(updateOrderUrl, "PUT", authHeader, updatedOrderDetails);

        System.out.println("Update response:");
        System.out.println(updateResponse);
    }

    private static String sendHttpRequest(String urlString, String method, String authHeader, String body) throws IOException {
        URL url = new URL(urlString);
        HttpURLConnection connection = (HttpURLConnection) url.openConnection();
        if (connection instanceof HttpsURLConnection) {
            ((HttpsURLConnection) connection).setSSLSocketFactory(createTrustAllSslSocketFactory());
            ((HttpsURLConnection) connection).setHostnameVerifier((hostname, session) -> true);
        }
        connection.setRequestMethod(method);
        connection.setRequestProperty("Authorization", authHeader);
        connection.setRequestProperty("Accept", "application/xml");

        if (method.equals("PUT") && body != null) {
            connection.setDoOutput(true);
            connection.setRequestProperty("Content-Type", "application/xml");
            try (OutputStream os = connection.getOutputStream()) {
                os.write(body.getBytes());
            }
        }

        int responseCode = connection.getResponseCode();
        InputStream is = (responseCode < HttpURLConnection.HTTP_BAD_REQUEST)
                ? connection.getInputStream()
                : connection.getErrorStream();
        try (BufferedReader br = new BufferedReader(new InputStreamReader(is))) {
            StringBuilder response = new StringBuilder();
            String line;
            while ((line = br.readLine()) != null) {
                response.append(line);
            }
            return response.toString();
        }
    }

    private static String extractValueFromXml(String xml, String startTag, String endTag) {
        int startIndex = xml.indexOf(startTag);
        if (startIndex == -1) return null;
        startIndex += startTag.length();
        int endIndex = xml.indexOf(endTag, startIndex);
        if (endIndex == -1) return null;
        return xml.substring(startIndex, endIndex);
    }

    private static void disableSslVerification() {
        try {
            SSLContext sc = SSLContext.getInstance("TLS");
            sc.init(null, new TrustManager[]{new X509TrustManager() {
                @Override
                public void checkClientTrusted(X509Certificate[] chain, String authType) {}
                @Override
                public void checkServerTrusted(X509Certificate[] chain, String authType) {}
                @Override
                public X509Certificate[] getAcceptedIssuers() {
                    return null;
                }
            }}, new java.security.SecureRandom());
            HttpsURLConnection.setDefaultSSLSocketFactory(sc.getSocketFactory());
            HttpsURLConnection.setDefaultHostnameVerifier((hostname, session) -> true);
        } catch (Exception e) {
            throw new RuntimeException("Failed to disable SSL verification", e);
        }
    }

    private static SSLSocketFactory createTrustAllSslSocketFactory() {
        try {
            SSLContext sc = SSLContext.getInstance("TLS");
            sc.init(null, new TrustManager[]{new X509TrustManager() {
                @Override
                public void checkClientTrusted(X509Certificate[] chain, String authType) {}
                @Override
                public void checkServerTrusted(X509Certificate[] chain, String authType) {}
                @Override
                public X509Certificate[] getAcceptedIssuers() {
                    return null;
                }
            }}, new java.security.SecureRandom());
            return sc.getSocketFactory();
        } catch (Exception e) {
            throw new RuntimeException("Failed to create SSL socket factory", e);
        }
    }
}
