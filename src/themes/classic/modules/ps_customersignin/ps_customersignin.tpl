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
 <div id="_desktop_user_info" class="user-info dropdown">
  <a
    href="#"
    title="{l s='Log in or Register' d='Shop.Theme.Customeraccount'}"
    onclick="toggleDropdown(event, '#loginDropdown')"
  >
  <div class="my-account-nav">
    {if $logged}
      <i class="fas fa-user fa-fw"></i>
      <span class="hidden-sm-down text-navigation-bar logout">{l s='Wyloguj się' d='Shop.Theme.Actions'}</span>
      <i class="material-icons icons-navigation-bar">arrow_drop_down</i>

      <div class="dropdown-content" id="loginDropdown">
        
        <a href="{$urls.pages.my_account}">
          <i class="fas fa-sign-out-alt fa-fw"></i>
          Wyloguj się
        </a>
        <a href="{$urls.pages.my_account}">Moje konto</a>
        <a href="{$urls.pages.my_account}">Zamówienia</a>
        <a href="{$urls.pages.my_account}">Książka adresowa</a>
        <a href="{$urls.pages.my_account}">Zmiana hasła</a>
      </div>
    {else}
      <div class="my-account-nav">
        <i class="fas fa-user fa-fw"></i>
        <span class="hidden-sm-down text-navigation-bar" href="{$urls.actions.logout}" rel="nofollow">{l s='Moje konto' d='Shop.Theme.Actions'}</span>
        <a href="{$urls.pages.my_account}" class="account" rel="nofollow">{$customerName}</a>
        <i class="material-icons icons-navigation-bar">arrow_drop_down</i>
        
        
        <div class="dropdown-content" id="loginDropdown">
          <a href="{$urls.pages.my_account}">
            <i class="fas fa-sign-in-alt fa-fw"></i>
            Zaloguj się
          </a>
          <a href="{$urls.pages.register}">
            <i class="fas fa-fw fa-pencil-alt"></i>
            Zarejestruj się
          </a>
          <a href="{$urls.pages.my_account}">Moje konto</a>
          <a href="{$urls.pages.my_account}">Zamówienia</a>
          <a href="{$urls.pages.register}">Książka adresowa</a>
          <a href="{$urls.pages.register}">Zmiana hasła</a>
        </div>
      </div>
    {/if}
    </a>
  </div>
</div>
