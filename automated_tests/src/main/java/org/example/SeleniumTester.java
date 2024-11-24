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
import java.util.*;

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
        driver.get("https://localhost");
        System.out.println("Ready to start tests, press enter to continue...");
        Scanner scanner = new Scanner(System.in);
        scanner.nextLine();
        System.out.println("Tests are starting...");
        scanner.close();
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
            driver.get("https://localhost/logowanie?create_account");

            // Select gender
            WebElement genderRadioButton = wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("label[for='field-id_gender-1']")));
            genderRadioButton.click();

            // Enter name
            WebElement firstNameField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-firstname")));
            firstNameField.sendKeys("John");

            // Enter surname
            WebElement lastNameField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-lastname")));
            lastNameField.sendKeys("Smith");

            // Enter email
            WebElement emailField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-email")));
            emailField.sendKeys("user@gmail.com");

            // Enter password
            WebElement passwordField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-password")));
            passwordField.sendKeys("secretPassword123");

            // Accept privacy terms
            WebElement privacyCheckbox = driver.findElement(By.name("customer_privacy"));
            privacyCheckbox.click();

            // Accept terms and conditions (only english PrestaShop version)
            //WebElement termsAndConditionsCheckbox = driver.findElement(By.name("psgdpr"));
            //if(!termsAndConditionsCheckbox.isSelected())
            //    termsAndConditionsCheckbox.click();

            // Submit login
            WebElement registerButton = wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("footer.form-footer .btn.btn-primary.form-control-submit")));
            registerButton.click();

            // Set driver wait time for expected elements
            WebElement loggedInElement = wait.until(ExpectedConditions.presenceOfElementLocated(By.className("account")));


            if (loggedInElement.isDisplayed()) {
                printSuccess("Successfully registered!");
            } else {
                printError("Failed to register!");
            }
        }
        catch(Exception e){
            success = false;
            // e.printStackTrace();
        }
        finally {
            if(!success)
                printError("Failed to register!");
        }
    }

    public void testProductAdding()
    {
        boolean success = true;
        try{
        driver.get("https://localhost");
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
        driver.get("https://localhost");
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
        driver.get("https://localhost/koszyk");
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