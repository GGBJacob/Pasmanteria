package org.example;

import java.io.*;

public class ClusterConnector {

    private String COMMAND = "ssh -L 19318:student-swarm01.maas:19318 rsww@172.20.83.101";
    private String PASSWORD = "qwe123";

    public ClusterConnector(){}

    public void connect() {
        try {
            ProcessBuilder processBuilder = new ProcessBuilder();

            // Ustawienie polecenia do wykonania
            processBuilder.command("cmd.exe", "/c", COMMAND);

            Process process = processBuilder.start();

            // Przechwycenie wejścia i wyjścia procesu
            BufferedReader stdoutReader = new BufferedReader(new InputStreamReader(process.getInputStream()));
            BufferedReader stderrReader = new BufferedReader(new InputStreamReader(process.getErrorStream()));
            BufferedWriter stdinWriter = new BufferedWriter(new OutputStreamWriter(process.getOutputStream()));

            String line;
            boolean passwordPrompted = false;

            // Odczytywanie wyjścia w tle (standardowe i błędne wyjście)
            while ((line = stdoutReader.readLine()) != null || (line = stderrReader.readLine()) != null) {
                System.out.println(line); // Wyświetlanie danych w konsoli

                // Sprawdzenie, czy proces pyta o hasło
                if (line != null && line.contains("password")) {
                    passwordPrompted = true;
                }

                // Jeśli proces poprosił o hasło, wysyłamy je
                if (passwordPrompted) {
                    stdinWriter.write(PASSWORD + "\n");
                    stdinWriter.flush();
                    passwordPrompted = false; // Zapobiegamy ponownemu wysyłaniu hasła
                }

                // Oczekiwanie na zakończenie procesu
                int exitCode = process.waitFor();
                System.out.println("Proces zakończył działanie z kodem: " + exitCode);
            }
        } catch (IOException | InterruptedException e) {
            e.printStackTrace();
        }
    }

    public static void main(String[] args) {
        ClusterConnector connector = new ClusterConnector();
        connector.connect();
    }
}
