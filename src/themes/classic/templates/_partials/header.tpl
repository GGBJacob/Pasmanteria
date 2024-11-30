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
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <!--<div class="col-md-5 col-xs-12">
            {hook h='displayNav1'}
          </div>-->
          <div class="col-md-7 right-nav">
              {hook h='displayNav2'}
          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
{/block}

{block name='header_logo_search'}
  <nav class="header_logo_search">
    <div class="container">
      <div class="row">
        <!-- PUSTY DIV LEWY -->
        <div class="col-sm-4 cm-header-logo"> &nbsp;</div>
        <!-- LOGO DIV ŚRODEK -->
        <div class="col-sm-4 hidden-sm-down" id="_desktop_logo">
          {if $shop.logo_details}
            {if $page.page_name == 'index'}
              <h1>
                {renderLogo}
              </h1>
            {else}
              {renderLogo}
            {/if}
          {/if}
        </div>
        <!-- SEARCH BAR DIV PRAWY -->
        <div class="col-sm-4 cm-header-search">
          <div class="cm-header-search-input">
            <form name="quick_find" action="//localhost/szukaj" method="get">
              <div class="input-group">
                <input type="search" name="s" required aria-required="true" aria-label="Szukaj" placeholder="Szukaj" class="form-control">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-info">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="header-top-right col-md-10 col-sm-12 position-static">
          {hook h='displayTop'}
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-8 cm-header-breadcrumb">
      <div class="row-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="a-breadcrumb" href="//localhost/">
                <i class="home">
                  <i class="material-icons violet-nav-icon">&#xe88a;</i>
                </i>
                <span class="sr-only">Home</span>
              </a>
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-sm-4 cm-header-phone text-right">
      <div class="row-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item-right">
              <a class="a-breadcrumb-right">
                <i class="home">
                  <i class="material-icons violet-nav-icon">&#xe0b0;</i>
                  <i class="violet-nav-icon phone-text">Zamówienia telefoniczne i pomoc: 739-963-582</i>
                </i>
                <span class="sr-only">Phone</span>
              </a>
            </li>
          </ol>
        </nav>
      </div>
    </div>
   </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}
