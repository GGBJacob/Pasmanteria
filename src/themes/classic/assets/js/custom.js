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

/*
  ///////////////////dd
  function updateQuantity(productId, action) {
    // Znajdź odpowiedni input dla danego produktu
    const quantityInput = document.querySelector(`#product-quantity-${productId}`);
    if (!quantityInput) return;

    const minQuantity = parseInt(quantityInput.getAttribute('min')) || 1; // Domyślnie minimalna ilość to 1
    const maxQuantity = parseInt(quantityInput.getAttribute('max')) || Infinity; // Domyślnie brak maksymalnego limitu
    let currentQuantity = parseInt(quantityInput.value) || 0;

    // Aktualizacja ilości na podstawie akcji
    if (action === 'increase') {
        currentQuantity++;
    } else if (action === 'decrease') {
        currentQuantity--;
    }

    // Walidacja ilości
    if (currentQuantity < minQuantity) {
        alert(`Minimalna ilość tego produktu to ${minQuantity}.`);
        return; // Nie pozwól na zmniejszenie poniżej minimalnej ilości
    }

    if (currentQuantity > maxQuantity) {
        alert(`Nie możesz dodać więcej niż ${maxQuantity} sztuk tego produktu.`);
        return; // Nie pozwól na zwiększenie powyżej maksymalnej ilości
    }

    // Aktualizacja wartości w polu input
    quantityInput.value = currentQuantity;

    // Dodatkowe akcje, np. wysyłanie żądania AJAX
    console.log(`Product ID: ${productId}, New Quantity: ${currentQuantity}`);

    // Zaktualizuj stan przycisków (jeśli stosujesz funkcję updateButtonState)
    updateButtonState($(quantityInput));
}
*/