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


  //cdc
  $(document).on("input change", ".js-cart-line-product-quantity", function () {
		updateButtonState($(this));
	});

	$(window).on("resize", function () {
		updateButtonState($(".js-cart-line-product-quantity"));
         location.reload();
	});

	function updateButtonState($quantityInput) {
		$quantityInput.each(function () {
			var maxStockQty = parseFloat($(this).attr("max"));
			var minStockQty = parseFloat($(this).attr("min"));
			var currentQty = parseFloat($(this).val());

			var $relatedButton = $(this).closest(".js-cart-line").find(".bootstrap-touchspin-up");
			var $touchspinContainer = $relatedButton.closest(".bootstrap-touchspin"); // Assuming .bootstrap-touchspin is the container element

			var $messageContainer = $(this).next(".message-container"); // Use next to select the element after the input

			$touchspinContainer.find(".custom-span").remove();

			if (currentQty >= maxStockQty) {
				$relatedButton.prop("disabled", true);
			
				$touchspinContainer.append("<span class='custom-span'>Quantity exceeds available stock.</span>");
			} else if (currentQty <= minStockQty) {
				$relatedButton.prop("disabled", true);
			
				$touchspinContainer.append("<span class='custom-span'>Quantity below minimum allowed.</span>");
			} else {
				$relatedButton.prop("disabled", false);
				$messageContainer.text(""); 
			}
		});
	}

	updateButtonState($(".js-cart-line-product-quantity"));