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
<div class="card-deck">
    <div class="card text-center border-1 orders-main-page">
        <div class="card-body position-relative">
            <a class="stretched-link" href="{url entity='cms' id=6}"></a>
            <!--src ma być losowe zdjęcie produktu-->
            <img src="/img/logo.jpg" alt="PROMOCJE" title="PROMOCJE" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background orders-main-page-text-1">PROMOCJE</h4>
            </div>
        </div>
    </div>

    <div class="card text-center border-1 orders-main-page">
        <div class="card-body position-relative">
            <!--href i src ma być koraliki - TOHO zdjęcie kategorii produktu-->
            <a class="stretched-link" href="#"></a>
            <img src="/img/logo.jpg" alt="koraliki - TOHO" title="koraliki - TOHO" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background orders-main-page-text-1">koraliki - TOHO</h4>
            </div>
        </div>
    </div>

    <div class="card text-center border-1 orders-main-page">
        <div class="card-body position-relative">
            <a class="stretched-link" href="{url entity='cms' id=7}" target="_blank" rel="noopener noreferrer"></a>
            <!--src ma być losowe zdjęcie produktu-->
            <img src="/img/logo.jpg" alt="NOWOŚCI" title="NOWOŚCI" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background orders-main-page-text-1">NOWOŚCI</h4>
            </div>
        </div>
    </div>
</div>

<!-- {capture assign="productClasses"}{if !empty($productClass)}{$productClass}{else}col-xs-12 col-sm-6 col-xl-4{/if}{/capture}
<div class="products{if !empty($cssClass)} {$cssClass}{/if}">
    <div class="product">
        {foreach from=$products|@array_slice:0:3 item="product" key="position"}
            {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position productClasses=$productClasses}
        {/foreach}
    </div>
</div> -->

<div class="col-sm-12 cm-i-customer-greeting">
    <div class="text-center">
      <h4 class="alert-heading">POLECAMY</h4>
    </div>
</div>

<!-- <div class="card-deck products{if !empty($cssClass)} {$cssClass}{/if}">
    <div class="product">
        {foreach from=$products|@array_slice:3:6 item="product" key="position"}
            {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position productClasses=$productClasses}
        {/foreach}
    </div>
</div> -->

<div class="row">
    <div class="card-deck recommended-products">
        <!-- Pierwszy rząd -->
        {foreach from=$products|@array_slice:0:3 item="product" key="position"}
        <div class="card text-center border-1 orders-main-page">
            <div class="card-body position-relative">
                <a class="stretched-link" href="{$product.link}"></a>
                <!-- src={$product.cover.bySize.large_default.url} -->
                <img src="/img/logo.jpg" alt="{$product.name}" title="{$product.name}" width="300" height="300" class="img-fluid">
                <div class="card-img-overlay d-flex">
                    <h4 class="align-self-center mx-auto box-background orders-main-page-text-1">{$product.name}</h4>
                </div>
            </div>
        </div>
        {/foreach}
    </div>

    <div class="card-deck recommended-products">
        <!-- Drugi rząd -->
        {foreach from=$products|@array_slice:3:3 item="product" key="position"}
        <div class="card text-center border-1 orders-main-page">
            <div class="card-body position-relative">
                <a class="stretched-link" href="{$product.link}"></a>
                <!-- src={$product.cover.bySize.large_default.url} -->
                <img src="/img/logo.jpg" alt="{$product.name}" title="{$product.name}" width="300" height="300" class="img-fluid">
                <div class="card-img-overlay d-flex">
                    <h4 class="align-self-center mx-auto box-background orders-main-page-text-1">{$product.name}</h4>
                </div>
            </div>
        </div>
        {/foreach}
    </div>
</div>



<div class="col-sm-12 cm-i-customer-greeting">
    <div class="text-center">
      <h4 class="alert-heading">Tu szukaj inspiracji...</h4>
    </div>
</div>

<div class="card-deck">
    <div class="card text-center border-1">
        <div class="card-body position-relative">
            <a class="stretched-link" href="{url entity='cms' id=8}"></a>
            <img src="/img/ren.jpg" alt="wzory do pobrania pdf" title="wzory do pobrania pdf" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background">wzory do pobrania pdf</h4>
            </div>
        </div>
    </div>
    <div class="card text-center border-1">
        <div class="card-body position-relative">
            <a class="stretched-link" href="{url entity='cms' id=9}" target="_blank" rel="noopener noreferrer"></a>
            <img src="/img/logo.jpg" alt="BLOG - nadodatek.pl" title="BLOG - nadodatek.pl" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background">BLOG - nadodatek.pl</h4>
            </div>
        </div>
    </div>
</div>

