package org.example;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.math.BigInteger;

public class MailGenerator {
    private static final String BASE_CHARS = "0123456789abcdefghijklmnopqrstuvwxyz";
    private static final int BASE = BASE_CHARS.length();
    private BigInteger counter;
    private final String CONFIG_FILE = "config.txt";

    public MailGenerator() {
        if (!readFromFile())
            counter = BigInteger.ZERO;
    }

    public BigInteger getCounter() {
        return counter;
    }

    private String toBase(BigInteger value) {
        StringBuilder result = new StringBuilder();
        while (value.compareTo(BigInteger.ZERO) > 0) {
            result.insert(0, BASE_CHARS.charAt(value.mod(BigInteger.valueOf(BASE)).intValue()));
            value = value.divide(BigInteger.valueOf(BASE));
        }
        return result.toString();
    }

    public String generateEmail() {
        String localPart = "user";
        String domainPart = "gmail.com";

        String uniqueSuffix = toBase(counter);
        counter = counter.add(BigInteger.ONE); // Zwiększ licznik

        saveToFile();

        return localPart + uniqueSuffix + "@" + domainPart;
    }

    public void saveToFile()
    {
        try (FileWriter writer = new FileWriter(this.CONFIG_FILE)) {
            writer.write(this.counter.toString());
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public boolean readFromFile()
    {
        try (BufferedReader reader = new BufferedReader(new FileReader(this.CONFIG_FILE))) {
            String value = reader.readLine();
            this.counter = new BigInteger(value);
            return true;
        } catch (IOException e) {
            e.printStackTrace();
            return false;
        }
    }

    public static void main(String[] args) {
        MailGenerator generator = new MailGenerator();

        for (int i = 0; i < 100; i++) {
            System.out.println(generator.generateEmail() + " " + generator.getCounter());
        }
    }
}
