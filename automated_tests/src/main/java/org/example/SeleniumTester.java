package org.example;

import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import io.github.bonigarcia.wdm.WebDriverManager;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.time.Duration;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Random;

public class SeleniumTester {

    private final WebDriver driver;
    private final WebDriverWait wait;

    private static final String RED = "\033[31m"; // Used for errors
    public static final String YELLOW = "\u001B[33m"; // Used for warnings
    private static final String GREEN = "\033[32m"; // Used for successful operations
    public static final String BLUE = "\u001B[34m"; // Used for info
    private static final String RESET = "\033[0m";

    private static void printError(String message)
    {
        System.out.println(RED + message + RESET);
    }

    private static void printWarning(String message)
    {
        System.out.println(YELLOW + message + RESET);
    }

    private static void printSuccess(String message)
    {
        System.out.println(GREEN + message + RESET);
    }

    private static void printInfo(String message)
    {
        System.out.println(BLUE + message + RESET);
    }

    public SeleniumTester() {
        WebDriverManager.chromedriver().setup();
        this.driver = new ChromeDriver();
        this.wait = new WebDriverWait(driver, Duration.ofSeconds(5));
    }

    private void addProduct() throws Exception // function called from a product page
    {
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
    }

    public void testSignUp()
    {
        boolean success = true;
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
                printSuccess("Successfully registered!");
            } else {
                printError("Failed to register!");
            }
        }
        catch(Exception e){
            success = false;
            e.printStackTrace();
        }
        finally {
            if (success)
            {
                printSuccess("Successfully registered!");
            }
            else
            {
                printError("Failed to register!");
            }
        }
    }

    public void testProductAdding()
    {
        boolean success = true;
        try{
        driver.get("http://localhost:8080/en/");
        wait.until(ExpectedConditions.presenceOfElementLocated(By.id("index")));

        List<WebElement> categories = driver.findElements(By.cssSelector("ul#top-menu > li.category a.dropdown-submenu"));

        List<String> categoryUrls = new ArrayList<>();

        for (WebElement category : categories)
        {
            categoryUrls.add(category.getAttribute("href"));
        }
        int addedProducts = 0;
        for (int i =0; i<categoryUrls.size() && addedProducts < 10; i++) {

            driver.get(categoryUrls.get(i));

            List<WebElement> productList = driver.findElements(By.cssSelector("a.product-thumbnail"));

            for (int j =0; j<productList.size() && addedProducts < 10; j++) {

                // Open product page
                wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("a.product-thumbnail")));
                productList = driver.findElements(By.cssSelector("a.product-thumbnail")); // TODO: Ogarnac co tu
                WebElement product = productList.get(j);
                product.click();

                addProduct();
                printInfo("Added product #" + (addedProducts + 1));

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
                printSuccess("Successfully added 10 products!");
            }
            else
            {
                printError("Failed to add 10 products!");
            }
        }
    }

    public void testProductSearch()
    {
        driver.get("http://localhost:8080/");
        boolean success = true;
        try {
            List<WebElement> products = driver.findElements(By.className("product-title"));
            List<String> productNames = new ArrayList<>();
            // Add all product words (e.g. T-Shirt) to array
            for (WebElement product : products) {
                productNames.addAll(Arrays.asList(product.getText().strip().split(" ")));
            }

            boolean foundProducts = false;
            while (!foundProducts) {
                // Select a random word to search
                int randomIndex = (new Random()).nextInt(productNames.size());
                String selectedWord = productNames.get(randomIndex);
                productNames.remove(randomIndex);

                // Enter the word into the search bar
                WebElement searchBar = wait.until(ExpectedConditions.elementToBeClickable(By.className("ui-autocomplete-input")));
                searchBar.click();
                searchBar.clear();
                searchBar.sendKeys(selectedWord);
                searchBar.sendKeys(Keys.ENTER);

                // Find all products on the search result page
                products = driver.findElements(By.className("product-title"));
                if (!products.isEmpty()){
                    printInfo("Found products for: " + selectedWord);
                    foundProducts = true;
                }
                else {
                    printWarning("No products found for: " + selectedWord);
                    if (productNames.isEmpty())
                    {
                        printError("Couldn't find any products! Product names list is empty!");
                        success = false;
                        break;
                    }
                    continue;
                }
                // Select random one and enter its page
                WebElement product = products.get(new Random().nextInt(products.size()));
                product.click();
            }
            if (productNames.isEmpty())
                success = false;
            else
                addProduct();

        }
        catch(Exception e){
            success = false;
            //e.printStackTrace();
        }
        finally {
            if (success)
            {
                printSuccess("Successfully added a searched product to cart!");
            }
            else
            {
                printError("Failed to search and add a product!");
            }
        }

    }

    public void testProductRemoval()
    {
        driver.get("http://localhost:8080/en/cart");
        boolean success = true;
        try {
            List<WebElement> buttons = driver.findElements(By.className("remove-from-cart"));
            for (int i = 0; i < 3; i++) {
                WebElement removeButton = buttons.get(i);
                removeButton.click();
                printInfo("Removed product #" + (i+1));
            }
        }
        catch (Exception e)
        {
            success = false;
        }
        finally {
            if (success)
            {
                printSuccess("Successfully removed 3 products!");
            }
            else
            {
                printError("Failed to remove 3 products!");
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