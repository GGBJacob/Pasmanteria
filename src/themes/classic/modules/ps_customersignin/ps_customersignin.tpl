<div id="_desktop_user_info" class="user-info dropdown">
  <a
    href="#"
    title="{l s='Log in or Register' d='Shop.Theme.Customeraccount'}"
    onclick="toggleDropdown(event, '#loginDropdown')"
  >
  <div class="my-account-nav">
    {if $logged}
      <i class="material-icons icons-navigation-bar">&#xe9ba;</i>
      <span class="hidden-sm-down text-navigation-bar logout">{l s='Wyloguj się' d='Shop.Theme.Actions'}</span>
      <i class="material-icons icons-navigation-bar">arrow_drop_down</i>

    {else}
      <div class="my-account-nav">
        <i class="material-icons icons-navigation-bar">&#xE7FF;</i>
        <span class="hidden-sm-down text-navigation-bar" href="{$urls.actions.logout}" rel="nofollow">{l s='Moje konto' d='Shop.Theme.Actions'}</span>
        <a href="{$urls.pages.my_account}" class="account" rel="nofollow">{$customerName}</a>
        <i class="material-icons icons-navigation-bar">arrow_drop_down</i>

        <div class="dropdown-content" id="loginDropdown">
          <a href="{$urls.pages.my_account}">Logowanie</a>
          <a href="{$urls.pages.register}">Rejestracja</a>
          <a href="{$urls.pages.my_account}">Moje zamówienia</a>
        </div>
      </div>
    {/if}
    </a>
  </div>
</div>
