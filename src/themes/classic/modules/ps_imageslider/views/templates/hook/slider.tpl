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
 
 {if $homeslider.slides}
   <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="{$homeslider.speed}" data-wrap="{(string)$homeslider.wrap}" data-pause="{$homeslider.pause}" data-touch="true">
     <ol class="carousel-indicators">
       {foreach from=$homeslider.slides item=slide key=idxSlide name='homeslider'}
       <li data-target="#carousel" data-slide-to="{$idxSlide}"{if $idxSlide == 0} class="active"{/if}></li>
       {/foreach}
     </ol>
     <ul class="carousel-inner" role="listbox" aria-label="{l s='Carousel container' d='Shop.Theme.Global'}">
       {foreach from=$homeslider.slides item=slide name='homeslider'}
         <li class="carousel-item {if $smarty.foreach.homeslider.first}active{/if}" role="option" aria-hidden="{if $smarty.foreach.homeslider.first}false{else}true{/if}">
           <a href="{$slide.url}">
             <figure>
               <img src="/img/baner.jpg" alt="{$slide.legend|escape}" loading="lazy" width="100%" height="855" class="animate-right">
               {if $slide.title || $slide.description}
                 <figcaption class="caption">
                   <h2 class="display-1 text-uppercase">{$slide.title}</h2>
                   <div class="caption-description">{$slide.description nofilter}</div>
                 </figcaption>
               {/if}
             </figure>
           </a>
         </li>
       {/foreach}
     </ul>
   </div>
 {/if}
 