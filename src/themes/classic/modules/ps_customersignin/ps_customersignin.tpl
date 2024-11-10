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

<div id="_desktop_user_info">
  <div class="user-info">
    {if $logged}
      <a
        class="logout hidden-sm-down"
        href="{$urls.actions.logout}"
        rel="nofollow"
      >
        <i class="material-icons">&#xE7FF;</i>
        {l s='Sign out' d='Shop.Theme.Actions'}
      </a>
      <a
        class="account"
        href="{$urls.pages.my_account}"
        title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}"
        rel="nofollow"
      >
        <i class="material-icons hidden-md-up logged">&#xE7FF;</i>
        <span class="hidden-sm-down">{$customerName}</span>
      </a>
    {else}
      <!-- Wrapper for dropdown -->
      <div class="dropdown">
        <a
          href="#"
          title="{l s='Log in or Register' d='Shop.Theme.Customeraccount'}"
          onclick="toggleDropdown(event)"
        >
          <div class="my-account-nav">
            <i class="material-icons icons-navigation-bar">&#xE7FF;</i>
            <span class="hidden-sm-down text-navigation-bar">{l s='Moje konto' d='Shop.Theme.Actions'}</span>
            <i class="material-icons icons-navigation-bar">arrow_drop_down</i>
          </div>
        </a>
        <!-- Dropdown content -->
        <div class="dropdown-content" id="loginDropdown">

          <a href="{$urls.pages.my_account}" title="{l s='Log in' d='Shop.Theme.Customeraccount'}">
            <i class="material-icons icons-dropdown">login</i> 
            Zaloguj się
          </a>

          <a href="{$urls.pages.register}" title="{l s='Register' d='Shop.Theme.Customeraccount'}">
            <i class="material-icons icons-dropdown">edit</i> 
            Zarejestruj się
          </a>

          <a href="{$urls.pages.my_account}" title="{l s='My account' d='Shop.Theme.Customeraccount'}">Moje konto</a>

          <a href="{$urls.pages.my_account}" title="{l s='My account' d='Shop.Theme.Customeraccount'}">Zamówienia</a>

          <a href="{$urls.pages.my_account}" title="{l s='My account' d='Shop.Theme.Customeraccount'}">Książka adresowa</a>

          <a href="{$urls.pages.my_account}" title="{l s='My account' d='Shop.Theme.Customeraccount'}">Zmiana hasła</a>
        </div>
      </div>
    {/if}
  </div>
</div>





