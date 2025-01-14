/*
This mail generator uses environment variable MAIL_LENGTH, that defines the length of generated mails.
If no value is provided, the default is set to 10.
Mails generated contain only letters and numbers.
 */

package org.example;

import io.github.cdimascio.dotenv.Dotenv;
import java.util.Random;

public class MailGenerator {
    private static final String BASE_CHARS = "0123456789abcdefghijklmnopqrstuvwxyz";
    private static final int BASE = BASE_CHARS.length();
    private final String DOMAIN = "@gmail.com";

    public MailGenerator(){}

    public String generateEmail() {
        Dotenv dotenv = Dotenv.load();

        int mail_length;

        try {
            mail_length = Integer.parseInt(dotenv.get("MAIL_LENGTH"));
        }catch (NumberFormatException e){
            mail_length = 10;
        }

        Random random = new Random();
        StringBuilder email = new StringBuilder(mail_length);

        for (int i=0; i< mail_length; i++){
            email.append(BASE_CHARS.charAt(random.nextInt(BASE)));
        }

        return email + DOMAIN;
    }
}
