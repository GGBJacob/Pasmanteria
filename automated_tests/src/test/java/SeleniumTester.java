import org.example.MailGenerator;
import org.junit.jupiter.api.*;
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
        wait = new WebDriverWait(driver, Duration.ofSeconds(10));
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

    private boolean addProduct() throws Exception// function called from a product page
    {
        System.out.println("Entered product page.");
        int productStockCount;
        try {
            WebElement productCountText = wait.until(ExpectedConditions.visibilityOfElementLocated(By.xpath("//p[contains(text(), 'Dostępne na magazynie:')]")));
            productStockCount = Integer.parseInt(productCountText.getText().split(":")[1].strip());
            // Wait for add to cart button to load
        }
        catch (Exception e)
        {
            printWarning("Product unavailable!");
            return false;
        }
        WebElement addToCartButton = wait.until(ExpectedConditions.presenceOfElementLocated(By.className("js-increase-product-quantity")));
        // Check if the button is clickable

       if (addToCartButton.getAttribute("disabled") != null)
       {
           printWarning("Product unavailable!");
           return false;
       }

        // Generate random product quantity
        int quantity = Integer.min(new Random().nextInt(3) + 1, productStockCount);

        for (int i =0; i<quantity; i++) {
            try {

                // Find the button again and click it
                addToCartButton = wait.until(ExpectedConditions.presenceOfElementLocated(By.className("js-increase-product-quantity")));
                assertNotNull(addToCartButton, "Add to cart button not found!");

                // Wait for the button to be available (weird fix)
                //WebElement finalAddToCartButton = addToCartButton;
                wait.until(_ -> {
                    WebElement finalAddToCartButton = driver.findElement(By.className("js-increase-product-quantity"));
                    return finalAddToCartButton.isEnabled(); // Sprawdzenie, czy przycisk jest aktywny
                });
                //wait.until(!ExpectedConditions.attributeContains("disabled"));

                System.out.println("Adding product...");
                Thread.sleep(2000);

                WebElement buttonSpan = wait.until(ExpectedConditions.elementToBeClickable(By.xpath("//span[contains(@class, 'fas fa-plus plus-minus')]")));
                buttonSpan.click();
                System.out.println("Added product.");
            }
            catch (TimeoutException e) {
                printWarning("Product unavailable in such quantity! ("+quantity+")");
            } catch (InterruptedException e) {
                throw new RuntimeException(e);
            }
        }

        return true;
    }

    @Test
    @Order(4)
    public void testSignUp()
    {
        try{
            System.out.println("Entering sign up...");
            driver.get(shopURL + "/logowanie?create_account");

            System.out.println("Page loaded");
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("authentication")));

            // Select gender
            System.out.println("Selecting gender...");
            WebElement genderRadioButton = wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("label[for='field-id_gender-1']")));
            genderRadioButton.click();
            System.out.println("Gender set.");

            // Enter name
            System.out.println("Entering name...");
            WebElement firstNameField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-firstname")));
            firstNameField.sendKeys("John");
            System.out.println("Name entered.");

            // Enter surname
            System.out.println("Entering surname...");
            WebElement lastNameField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-lastname")));
            lastNameField.sendKeys("Smith");
            System.out.println("Surname entered.");

            // Enter email
            System.out.println("Entering email...");
            WebElement emailField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-email")));
            emailField.sendKeys(this.userMail);  // Enter user email
            System.out.println("Email entered.");

            // Enter password
            System.out.println("Entering password...");
            WebElement passwordField = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("field-password")));
            passwordField.sendKeys("secretPassword123");
            System.out.println("Password entered.");

            // Accept privacy terms
            System.out.println("Accepting terms...");
            WebElement privacyCheckbox = driver.findElement(By.name("customer_privacy"));
            privacyCheckbox.click();
            System.out.println("Terms accepted.");

            // Accept terms and conditions (only english PrestaShop version)
            //WebElement termsAndConditionsCheckbox = driver.findElement(By.name("psgdpr"));
            //if(!termsAndConditionsCheckbox.isSelected())
            //    termsAndConditionsCheckbox.click();

            // Submit login
            System.out.println("Submitting login...");
            WebElement registerButton = wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("footer.form-footer .btn.btn-primary.form-control-submit")));
            registerButton.click();
            System.out.println("Login submit.");

            // Set driver wait time for expected elements
            System.out.println("Checking for failures...");
            WebElement loggedInElement = wait.until(ExpectedConditions.presenceOfElementLocated(By.className("my-account-nav")));

            assertNotNull(loggedInElement, "Sign up failed! Account element is NULL!");
            loggedInElement = wait.until(ExpectedConditions.presenceOfElementLocated(By.className("my-account-nav")));
            assertTrue(loggedInElement.isDisplayed(), "Sign up failed! Account element is not displayed!");
            System.out.println("Successfully signed up!");
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


            for (int j =0; addedProducts <maxProductsToAdd; j++) {

                // Open product page
                wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("a.product-thumbnail")));
                productList = driver.findElements(By.cssSelector("a.product-thumbnail"));
                WebElement product = productList.get(new Random().nextInt(productList.size()));
                product.click();

                if(addProduct()) {
                    printInfo("Added product #" + (addedProducts + 1));

                    // Increment added product count
                    addedProducts++;
                }

                int urlNo = new Random().nextInt(categoryUrls.size());
                // Return to category page
                driver.get(categoryUrls.get(urlNo));
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
            List<WebElement> products = driver.findElements(By.tagName("img"));
            List<String> productNames = new ArrayList<>();
            // Add all product words (e.g. T-Shirt) to array
            for (WebElement product : products) {
                String title = product.getAttribute("title");
                if (title != null && !title.isEmpty()) {
                    productNames.addAll(List.of(title.strip().split(" ")));
                }
            }
            System.out.println("Added product names to array!");
            assertFalse(productNames.isEmpty(), "Product names list is empty!");

            boolean productAdded = false;
            while (!productAdded) {
                // Select a random word to search
                int randomIndex = (new Random()).nextInt(productNames.size());
                String selectedWord = productNames.get(randomIndex);
                System.out.println("Selected word: " + selectedWord);
                productNames.remove(randomIndex);

                // Enter the word into the search bar
                WebElement searchBar = wait.until(ExpectedConditions.elementToBeClickable(By.className("form-control")));
                System.out.println("Searching...");
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
                System.out.println("Getting product...");
                int productNo = new Random().nextInt(products.size());
                WebElement product = products.get(productNo);
                System.out.println("Selected random product.");
                assertNotNull(product, "Product is null!");
                System.out.println("Entering product page...");
                product = products.get(productNo);
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
            System.out.println("Entering cart...");
            driver.get(shopURL + "/koszyk");
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("cart"))); // Waiting for the page to load
            System.out.println("Entered cart.");
            List<WebElement> buttons;
            int productsToRemove = 3, productsRemoved = 0;
            for (int i = 0; i < productsToRemove; i++) {
                System.out.println("Removing from cart...");
                buttons = driver.findElements(By.className("remove-from-cart"));
                buttons.getFirst().click();
                printInfo("Removed product #" + (i+1));
                productsRemoved++;
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
             loginButton = driver.findElement(By.className("fa-sign-in-alt"));
        }
        catch(Exception e)
        {
            System.out.println("Log in element not found! User already logged in?");
            return;
        }

        wait.until(ExpectedConditions.visibilityOfElementLocated(By.className("my-account-nav"))).click();
        loginButton = driver.findElement(By.className("fa-sign-in-alt"));
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
            System.out.println("Testing ordering...");
            wait.until(ExpectedConditions.presenceOfElementLocated(By.id("cart"))); // Waiting for the page to load
            System.out.println("Page loaded!");
            List<WebElement> disabledButton = driver.findElements(By.cssSelector("button.btn.btn-primary.disabled"));
            if (!disabledButton.isEmpty()) {
                System.out.println("No elements in cart, re-running with new products!");
                testProductSearch();
                testOrder();
            }

            //System.out.println("Loading cart...");

            //wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("cart")));

            //System.out.println("Cart loaded.");

            WebElement orderButton = wait.until(ExpectedConditions.elementToBeClickable(By.xpath("//a[@class='btn btn-primary' and contains(text(),'Przejdź do realizacji zamówienia')]")));
            orderButton.click();

            wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("checkout")));

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
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("label[for=delivery_option_7]"))).click();
            wait.until(ExpectedConditions.visibilityOfElementLocated(By.name("confirmDeliveryOption"))).click();
            //wait.until(ExpectedConditions.visibilityOfElementLocated(By.cssSelector("label[for=payment-option-2]"))).click(); // TODO: UNCOMMENT AND SET CASH PAYMENT
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
            driver.get(shopURL + "/historia-zamowien");
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

            driver.get(shopURL + "/historia-zamowien");

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