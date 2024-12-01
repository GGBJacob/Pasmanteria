<div id="_desktop_cart">
  <div class="blockcart cart-preview" data-refresh-url="{$refresh_url}">
    <div class="cart-dropdown">
      <a  href="#"
          title="{l s='Shopping cart details' d='Shop.Theme.Checkout'}"
          onclick="toggleDropdown(event, '#cartDropdown')"
      >
        <div class="shopping-cart-nav">
          <i class="fas fa-shopping-cart fa-fw"></i>
          <span class="cart-products-count">{$cart.products_count} szt.</span>
          <i class="material-icons icons-navigation-bar">&#xe5c5</i>
        </div>
      </a>

      <!-- Dropdown content -->
      <div class="cart-dropdown-content hidden" id="cartDropdown">
        <b>
          <div class="cart-summary">
            <a href="{$urls.pages.cart}?action=show" class="cart-summary-link">
              W TWOIM KOSZYKU: {$cart.products_count} szt., {$cart.total_price} zł
            </a>
          </div>
          <div class="cart-products">
            <ul>
              {if $cart.products_count > 0}
                <div class="dropdown-divider"></div>
                {foreach $cart.products as $product}
                  <li>
                    <a href="{$product.link}" class="cart-product-link">
                      {$product.quantity} x {$product.name}
                    </a>
                  </li>
                {/foreach}
              {/if}
            </ul>
          </div>
          {if $cart.products_count > 0}
          <div class="dropdown-divider"></div>
          <a href="{$urls.pages.cart}?action=show" class="cart-summary-link">
            <div class="cart-summary">
              <i class="fas fa-angle-right fa-fw"></i>
              Zamów
            </div>
          </a>
          {/if}
        </b>
      </div>
    </div>
  </div>
</div>