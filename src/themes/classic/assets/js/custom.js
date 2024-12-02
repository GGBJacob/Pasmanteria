// ps_customerlogin, ps_shopppingcart
function toggleDropdown(event, dropdown_name) {
    event.preventDefault();
    var dropdown = document.querySelector(dropdown_name);
    
    // Sprawdzamy, czy dropdown jest ukryty, jeśli tak, to go pokazujemy
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    } else {
      dropdown.style.display = "block";
    }
}

// ps_shoppingcart
function updateCart() {
    fetch('/themes/classic/modules/ps_shoppingcart') // Endpoint serwera
      .then((response) => response.json())
      .then((data) => {
        document.querySelector('.cart-products-count').textContent = `(${data.total_count} szt.)`;
        const cartDropdown = document.querySelector('#cartDropdown ul');
        cartDropdown.innerHTML = data.products
          .map((product) => `<li>${product.quantity} x ${product.name}</li>`)
          .join('');
      });
  }