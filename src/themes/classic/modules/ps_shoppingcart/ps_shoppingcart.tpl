<div id="_desktop_cart">
  <div class="blockcart cart-preview" data-refresh-url="{$refresh_url}">
    <div class="cart-dropdown">
      <a  href="#"
          title="{l s='Shopping cart details' d='Shop.Theme.Checkout'}"
          onclick="toggleDropdown3(event, '#cartDropdown')"
      >
        <div class="shopping-cart-nav">
          <i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i>
          <span class="cart-products-count">{$cart.products_count} szt.</span>
          <i class="material-icons icons-navigation-bar">arrow_drop_down</i>
        </div>
      </a>

      <!-- Dropdown content -->
      <div class="cart-dropdown-content hidden" id="cartDropdown">
        <b>
          <div class="cart-summary">
            W TWOIM KOSZYKU: {$cart.products_count} szt., x zł
          </div>
          <div class="cart-products">
            <ul>
              {if $cart.products_count > 0}
                <div class="dropdown-divider"></div>
                {foreach $cart.products as $product}
                  <li>{$product.quantity} x {$product.name}</li>
                {/foreach}
              {/if}
            </ul>
          </div>
          {if $cart.products_count > 0}
            <div class="dropdown-divider"></div>
            <a class="cart-order" href="{$urls.pages.cart}?action=show">
              <i class="material-icons icons-navigation-bar">&#xe315;</i>
              Zamów
            </a>
          {/if}
        </b>
      </div>
    </div>
  </div>
</div>
