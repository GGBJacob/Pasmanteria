package org.example;

import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import io.github.bonigarcia.wdm.WebDriverManager;
import org.openqa.selenium.support.ui.ExpectedCondition;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.time.Duration;
import java.util.ArrayList;
import java.util.List;
import java.util.Random;

public class SeleniumTester {

    private final WebDriver driver;

    public SeleniumTester() {
        WebDriverManager.chromedriver().setup();
        this.driver = new ChromeDriver();
    }

    public void testSignUp()
    {
        try{
            driver.get("http://localhost:8080/en/login?create_account");

            // Register new user
            WebElement genderRadioButton = driver.findElement(By.id("field-id_gender-1"));
            WebElement firstNameField = driver.findElement(By.name("field-firstname"));
            WebElement lastNameField = driver.findElement(By.name("field-lastname"));
            WebElement emailField = driver.findElement(By.id("field-email"));
            WebElement passwordField = driver.findElement(By.id("field-password"));
            WebElement loginButton = driver.findElement(By.id("submit-login"));
            WebElement termsAndConditionsCheckbox = driver.findElement(By.name("psgdpr"));

            genderRadioButton.click();
            firstNameField.sendKeys("John");
            lastNameField.sendKeys("Smith");
            emailField.sendKeys("user@gmail.com");
            passwordField.sendKeys("secretPassword123");
            if(!termsAndConditionsCheckbox.isSelected())
                termsAndConditionsCheckbox.click();
            loginButton.click();

            // Set driver wait time for expected elements
            WebDriverWait wait = new WebDriverWait(driver, Duration.ofSeconds(5));
            WebElement loggedInElement = wait.until(
                    ExpectedConditions.presenceOfElementLocated(By.id("logged-in-element")  // TODO: Find apropriate ID
                    ));


            if (loggedInElement.isDisplayed()) {
                System.out.println("Successfully registered!");
            } else {
                System.out.println("Failed to register!");
            }
        }
        catch(Exception e){
            e.printStackTrace();
        }
    }

    public void testProductAdding()
    {
        boolean success = true;
        try{
        driver.get("http://localhost:8080/en/");

        List<WebElement> categories = driver.findElements(By.cssSelector("ul#top-menu > li.category a.dropdown-submenu"));

        List<String> categoryUrls = new ArrayList<>();

        for (WebElement category : categories)
        {
            categoryUrls.add(category.getAttribute("href"));
        }
        int addedProducts = 0;
        for (int i =0; i<categoryUrls.size() && addedProducts < 10; i++) {

            driver.get(categoryUrls.get(i));

            WebDriverWait wait = new WebDriverWait(driver, Duration.ofSeconds(5)); // Component waiting x seconds before returning an error

            List<WebElement> productList = driver.findElements(By.cssSelector("a.product-thumbnail"));

            for (int j =0; j<productList.size() && addedProducts < 10; j++) {

                // Open product page
                wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("a.product-thumbnail")));
                productList = driver.findElements(By.cssSelector("a.product-thumbnail")); // TODO: Ogarnac co tu
                WebElement product = productList.get(j);
                product.click();

                // Add random count
                WebElement quantityField = driver.findElement(By.id("quantity_wanted"));
                int quantity = new Random().nextInt(3) + 1;
                quantityField.sendKeys(Keys.CONTROL + "a");
                quantityField.sendKeys(String.valueOf(quantity));

                // Wait for add to cart button to load
                WebElement addToCartButton = wait.until(ExpectedConditions.presenceOfElementLocated(By.className("add-to-cart")));
                addToCartButton.click();

                // Wait for continue button to load
                WebElement continueButton = wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector(".cart-content-btn .btn-secondary")));
                continueButton.click();

                // Return to category page
                driver.get(categoryUrls.get(i));

                // Increment added product count
                addedProducts++;
            }
        }}
        catch(Exception e){
            success = false;
            //e.printStackTrace();
        }
        finally {
            if (success)
            {
                System.out.println("\033[32m" + "Successfully added 10 products!" + "\033[0m");
            }
            else
            {
                System.out.println("\033[31m" + "Failed to add 10 products!" + "\033[0m");
            }
        }
    }

    public void testProductSearch()
    {
        // TODO: Search for a product and add random from result
    }

    public void testProductRemoval()
    {
        driver.get("http://localhost:8080/en/cart");
        WebDriverWait wait = new WebDriverWait(driver, Duration.ofSeconds(5));
        boolean success = true;
        try {
            List<WebElement> buttons = driver.findElements(By.className("remove-from-cart"));
            for (int i = 0; i < 3; i++) {
                WebElement removeButton = buttons.get(i);
                removeButton.click();
            }
        }
        catch (Exception e)
        {
            success = false;
        }
        finally {
            if (success)
            {
                System.out.println("\033[32m" + "Successfully removed 3 products!" + "\033[0m");
            }
            else
            {
                System.out.println("\033[31m" + "Failed to remove 3 products!" + "\033[0m");
            }
        }
    }

    public void testOrder()
    {
        // TODO: Order, select payment method (on delivery), select one form of shipping @IVOBOT
    }

    public void testOrderStatus()
    {
        // TODO: Check order status @IVOBOT
    }

    public void testInvoice()
    {
        // TODO: Generate an invoice @IVOBOT
    }


}