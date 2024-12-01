import org.example.MailGenerator;
import org.junit.jupiter.api.*;
import org.junit.jupiter.params.aggregator.AggregateWith;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;
import io.github.bonigarcia.wdm.WebDriverManager;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.time.Duration;
import java.util.*;
import java.util.NoSuchElementException;

import static org.example.OrderManager.changeOrderStatus;
import static org.junit.jupiter.api.Assertions.*;

import io.github.cdimascio.dotenv.Dotenv;


@TestMethodOrder(MethodOrderer.OrderAnnotation.class)
public class SeleniumTester {

    private static WebDriver driver;
    private static WebDriverWait wait;
    private static String userMail;
    private static String shopURL;


    public static final String YELLOW = "\u001B[33m"; // Used for warnings
    public static final String BLUE = "\u001B[34m"; // Used for info
    private static final String RESET = "\033[0m";

    private static void printWarning(String message)
    {
        System.out.println(YELLOW + message + RESET);
    }

    private static void printInfo(String message)
    {
        System.out.println(BLUE + message + RESET);
    }

    public SeleniumTester()
    {
    }


    @BeforeAll
    public static void setUp() {
        // Initialize WebDriver only once before all tests
        ChromeOptions options = new ChromeOptions();
        options.addArguments("--ignore-certificate-errors");
        WebDriverManager.chromedriver().setup();
        driver = new ChromeDriver(options);
        wait = new WebDriverWait(driver, Duration.ofSeconds(5));
        Dotenv dotenv = Dotenv.load();
        shopURL = dotenv.get("SHOP_URL");
        driver.get(shopURL);
        MailGenerator mailGenerator = new MailGenerator();
        userMail = mailGenerator.generateEmail();
    }

    @AfterAll
    public static void tearDown() {
        // Close the browser after all tests
        if (driver != null) {
            driver.quit();
        }
    }

    private boolean addProduct()// function called from a product page
    {
        // Wait for add to cart button to load
        WebElement addToCartButton = wait.until(ExpectedConditions.presenceOfElementLocated(By.className("add-to-cart")));

        // Check if the button is clickable

       if (addToCartButton.getAttribute("disabled") != null)
       {
           printWarning("Product unavailable!");
           return false;
       }

        // Add random count
        WebElement quantityField = driver.findElement(By.id("quantity_wanted"));
        int quantity = new Random().nextInt(3) + 1;
//        quantityField.sendKeys(Keys.CONTROL + "a");
//        quantityField.sendKeys(String.valueOf(quantity));

        for (int i =0; i<quantity; i++) {
            try {
                // Find the button again and click it
                addToCartButton = wait.until(ExpectedConditions.elementToBeClickable(By.className("add-to-cart")));
                assertNotNull(addToCartButton, "Add to cart button not found!");
                addToCartButton.click();

                // Wait for continue button to load
                WebElement continueButton = wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector(".cart-content-btn .btn-secondary")));
                assertNotNull(continueButton, "Continue button not found!");
                continueButton.click();
            }
            catch (TimeoutException e) {
                printWarning("Product unavailable in such quantity! ("+quantity+")");
            }
        }

        return true;
    }

    @Test
    @Order(4)
    public void testSignUp()
    {
        try{
            driver.get(shopURL + "/logowanie?create_account");
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("authentication")));

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
            emailField.sendKeys(this.userMail);  // Enter user email

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

            assertNotNull(loggedInElement, "Sign up failed! Account element is NULL!");
            assertTrue(loggedInElement.isDisplayed(), "Sign up failed! Account element is not displayed!");
        }
        catch(Exception e){
            fail("Exception occured: " + e.getMessage());
            // e.printStackTrace();
        }
    }

    @Test
    @Order(1)
    public void testProductAdding()
    {
        try{
        driver.get(shopURL);
        wait.until(ExpectedConditions.presenceOfElementLocated(By.id("index")));

        List<WebElement> categories = driver.findElements(By.cssSelector("ul#top-menu > li.category a.dropdown-submenu"));

        List<String> categoryUrls = new ArrayList<>();

        for (WebElement category : categories)
        {
            categoryUrls.add(category.getAttribute("href"));
        }

        int addedProducts = 0;
        int maxProductsToAdd = 10;
        for (int i =0; i<categoryUrls.size() && addedProducts < 10; i++) {

            driver.get(categoryUrls.get(i));

            List<WebElement> productList = driver.findElements(By.cssSelector("a.product-thumbnail"));


            for (int j =0; j<productList.size() && addedProducts <maxProductsToAdd; j++) {

                // Open product page
                wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("a.product-thumbnail")));
                productList = driver.findElements(By.cssSelector("a.product-thumbnail"));
                WebElement product = productList.get(j);
                product.click();

                if(addProduct()) {
                    printInfo("Added product #" + (addedProducts + 1));

                    // Increment added product count
                    addedProducts++;
                }

                // Return to category page
                driver.get(categoryUrls.get(i));
            }
        }

        assertEquals(maxProductsToAdd, addedProducts, "The number of added products does not match the expected value!");

        }
        catch(Exception e) {
            fail("Exception occured: " + e.getMessage());
            //e.printStackTrace();
        }
    }

    @Test
    @Order(2)
    public void testProductSearch()
    {
        try {
            driver.get(shopURL);
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("index"))); // Waiting for the page to load
            List<WebElement> products = driver.findElements(By.className("product-title"));
            List<String> productNames = new ArrayList<>();
            // Add all product words (e.g. T-Shirt) to array
            for (WebElement product : products) {
                productNames.addAll(Arrays.asList(product.getText().strip().split(" ")));
            }

            assertFalse(productNames.isEmpty(), "Product names list is empty!");

            boolean productAdded = false;
            while (!productAdded) {
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
                }
                else {
                    printWarning("No products found for: " + selectedWord);
                    continue;
                }
                // Select random one and enter its page
                WebElement product = products.get(new Random().nextInt(products.size()));
                assertNotNull(product, "Product is null!");
                product.click();
                productAdded = addProduct();
            }

        }
        catch(Exception e){
            fail("Exception occured: " + e.getMessage());
            //e.printStackTrace();
        }
    }

    @Test
    @Order(3)
    public void testProductRemoval()
    {
        try {
            driver.get(shopURL + "/koszyk");
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("cart"))); // Waiting for the page to load
            List<WebElement> buttons = driver.findElements(By.className("remove-from-cart"));
            int productsToRemove = 3, productsRemoved = 0;
            for (int i = 0; i < productsToRemove; i++) {
                WebElement removeButton = buttons.get(i);
                removeButton.click();
                productsRemoved++;
                printInfo("Removed product #" + (i+1));
            }
            assertEquals(productsRemoved, productsToRemove, "The number of products to remove does not match the expected value!");
        }
        catch (Exception e)
        {
            fail("Exception occured: " + e.getMessage());
        }
    }

    public void logIn()
    {
        try {
            driver.get(shopURL);
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("index"))); // Waiting for the page to load
        }
        catch (Exception e)
        {
            System.out.println("Failed to get website!");
            return;
        }
        WebElement loginButton;
        try {
             loginButton = driver.findElement(By.cssSelector("a[title='Zaloguj się do swojego konta klienta']"));
        }
        catch(Exception e)
        {
            System.out.println("Log in element not found! User already logged in?");
            return;
        }

        loginButton.click();

        // Enter email
        WebElement emailField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-email")));
        emailField.sendKeys(this.userMail);

        // Enter password
        WebElement passwordField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-password")));
        passwordField.sendKeys("secretPassword123");

        wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("submit-login"))).click();
    }


    @Test
    @Order(5)
    public void testOrder()
    {
        logIn();
        try{
            driver.get(shopURL + "/koszyk?action=show");
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("cart"))); // Waiting for the page to load
            List<WebElement> disabledButton = driver.findElements(By.cssSelector("button.btn.btn-primary.disabled"));
            if (!disabledButton.isEmpty()) {
                testProductSearch();
                testOrder();
            }
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.xpath("//a[@class='btn btn-primary' and contains(text(),'Przejdź do realizacji zamówienia')]"))).click();

            // Enter address
            WebElement addressField = wait.until(ExpectedConditions.presenceOfElementLocated(By.id("field-address1")));
            addressField.sendKeys("AAAAAAAAAAA");

            // Enter zip code
            WebElement zipCodeField = wait.until(ExpectedConditions.presenceOfElementLocated(By.id("field-postcode")));
            zipCodeField.sendKeys("00-000");

            // Enter city
            WebElement cityField = wait.until(ExpectedConditions.presenceOfElementLocated(By.id("field-city")));
            cityField.sendKeys("Gdańsk");

            wait.until(ExpectedConditions.visibilityOfElementLocated(By.name("confirm-addresses"))).click();
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.name("confirmDeliveryOption"))).click();
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("label[for=payment-option-2]"))).click();
            // Find the terms and conditions checkbox (there was no other pleasant way)
            List<WebElement> checkboxes = driver.findElements(By.tagName("input"));
            for (WebElement checkbox : checkboxes) {
                if ("checkbox".equals(checkbox.getAttribute("type"))) {
                    checkbox.click();
                    break;
                }
            }
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.xpath("//button[@class='btn btn-primary center-block' and contains(text(),'Złóż zamówienie')]"))).click();
        }
        catch(Exception e){
            fail("Exception occured: " + e.getMessage());
        }
    }

    @Test
    @Order(6)
    public void testOrderStatus()
    {
        try{
            driver.get(shopURL + "/");
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("index"))); // Waiting for the page to load
            logIn();
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.className("account"))).click();
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("history-link"))).click();
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.partialLinkText("Szczegóły"))).click();
            WebElement detailsPage = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("order-detail")));
            assertNotNull(detailsPage, "Order details page is null!");
        }catch (Exception e)
        {
            fail("Exception occured: " + e.getMessage());
        }
    }

    @Test
    @Order(7)
    public void testInvoice()
    {
        try {
            driver.get(shopURL);
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("index"))); // Waiting for the page to load
            logIn();

            wait.until(ExpectedConditions.visibilityOfElementLocated(By.className("account")))
                    .click(); // Navigate to the account page

            wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("history-link")))
                    .click(); // Open order history

            WebElement table = wait.until(ExpectedConditions.presenceOfElementLocated(By.cssSelector("table.table-labeled")));
            if (table == null) {
                fail("Order history table not found. Ensure the user has orders and the table is visible.");
            }

            WebElement referenceCell = table.findElement(By.cssSelector("tbody tr th[scope='row']"));
            if (referenceCell == null) {
                fail("Order reference cell not found. Ensure that orders are listed correctly in the table.");
            }

            String orderReference = referenceCell.getText();
            if (orderReference == null || orderReference.isEmpty()) {
                fail("Order reference could not be retrieved. Ensure the table structure and content are correct.");
            }

            changeOrderStatus(orderReference, "2"); // Change the order status to the desired value

            wait.until(ExpectedConditions.visibilityOfElementLocated(By.partialLinkText("Szczegóły")))
                    .click(); // Navigate to the order details page

            wait.until(ExpectedConditions.visibilityOfElementLocated(By.partialLinkText("Pobierz fakturę proforma w pliku PDF")))
                    .click(); // Download the invoice
        } catch (TimeoutException te) {
            fail("A timeout occurred while waiting for an element. Check if the page loaded correctly and all expected elements are present: " + te.getMessage());
        } catch (NoSuchElementException nse) {
            fail("An expected element was not found. Verify the locator strategy and ensure the page structure hasn't changed: " + nse.getMessage());
        } catch (IllegalStateException ise) {
            fail("The application state is inconsistent. This could be due to navigation issues or missing data: " + ise.getMessage());
        } catch (Exception e) {
            fail("An unexpected exception occurred: " + e.getMessage());
        }
    }
}