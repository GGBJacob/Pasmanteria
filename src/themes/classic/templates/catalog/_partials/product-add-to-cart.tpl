{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)

 *}

<div class="product-add-to-cart js-product-add-to-cart">
  {if !$configuration.is_catalog}
    
    {block name='product_quantity'}

      {if $product.quantity > 0}
        <p>Dostępne na magazynie: {$product.quantity}</p>
      {/if}
      <div class="input-group bootstrap-touchspin">
            
            <!-- Przycisk - -->
            <span class="input-group-btn-vertical">
                <button 
                    class="btn btn-touchspin js-touchspin js-decrease-product-quantity bootstrap-touchspin-down" 
                    type="button" 
                    onclick="updateQuantity({$product.id}, 'decrease')" data-button-action="remove-from-cart" type="submit">
                    <span class="plus-minus fas fa-minus"></span>
                </button>
            </span>

            <!-- Pole ilości produktu -->
            <input 
                class="js-cart-line-product-quantity form-control" 
                type="number" 
                inputmode="numeric" 
                pattern="[0-9]*" 
                value="0"
                name="product-quantity-spin" 
                aria-label="Ilość produktu" 
                min="0" 
                max="{$product.quantity}" 
                id="product-quantity-1" 
                style="display: block;"
            />

            <!-- Przycisk + -->
            <span class="input-group-btn-vertical">
                 <button 
                  class="btn btn-touchspin js-touchspin js-increase-product-quantity bootstrap-touchspin-up" 
                  type="button" 
                  onclick="updateQuantity({$product.id}, 'increase')" data-button-action="add-to-cart"
            type="submit"
            {if !$product.add_to_cart_url}
              disabled
            {/if}
            {if $product.quantity<=0} 
              disabled
            {/if}>
                  <span class="fas fa-plus plus-minus"></span>
              </button>
            </span>
        </div>
  {/block}




    {block name='product_availability'}
      <span id="product-availability" class="js-product-availability">
        {if $product.show_availability && $product.availability_message}
          {if $product.availability == 'available'}
            <i class="material-icons rtl-no-flip product-available">&#xE5CA;</i>
          {elseif $product.availability == 'last_remaining_items'}
            <i class="material-icons product-last-items">&#xE002;</i>
          {else}
            <i class="material-icons product-unavailable">&#xE14B;</i>
          {/if}
          {$product.availability_message}
        {/if}
      </span>
    {/block}

    {block name='product_minimal_quantity'}
      <p class="product-minimal-quantity js-product-minimal-quantity">
        {if $product.minimal_quantity > 1}
          {l
          s='The minimum purchase order quantity for the product is %quantity%.'
          d='Shop.Theme.Checkout'
          sprintf=['%quantity%' => $product.minimal_quantity]
          }
        {/if}
      </p>
    {/block}
  {/if}
</div>
