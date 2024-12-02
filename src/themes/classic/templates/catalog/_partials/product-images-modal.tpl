<div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body carousel slide pointer-event" data-ride="carousel" tabindex="-1" id="carousel">
        {assign var=imagesCount value=$product.images|count}
        <figure class="carousel-container">
        <ol class="carousel-indicators"><li data-target="#carousel" data-slide-to="0" class="pointer"></li><li data-target="#carousel" data-slide-to="1" class="pointer active"></li></ol>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
          {if $product.default_image}
            <img
              class="js-modal-product-cover product-cover-modal img-fluid"
              width="{$product.default_image.bySize.large_default.width}"
              src="{$product.default_image.bySize.large_default.url}"
              {if !empty($product.default_image.legend)}
                alt="{$product.default_image.legend}"
                title="{$product.default_image.legend}"
              {else}
                alt="{$product.name}"
              {/if}
              height="{$product.default_image.bySize.large_default.height}"
            >
          {else}
            <img src="{$urls.no_picture_image.bySize.large_default.url}" loading="lazy" width="{$urls.no_picture_image.bySize.large_default.width}" height="{$urls.no_picture_image.bySize.large_default.height}" />
          {/if}
          <figcaption class="image-caption">
            {block name='product_description_short'}
              <div id="gallery-description product-description-short" style="text-transform: uppercase; align-content: center;">
                GALERIA {$product.name nofilter}
                <a href="#" role="button" data-dismiss="modal" id="btn2" class="btn btn-info btn-primary btn-close">Zamknij</a>
              </div>
            {/block}
          </figcaption>
        </figure>
        <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">
          {block name='product_images'}
            <div class="js-modal-mask mask {if $imagesCount <= 5} nomargin {/if}">
              <ul class="product-images js-modal-product-images">
                {foreach from=$product.images item=image}
                  <li class="thumb-container js-thumb-container">
                  </li>
                {/foreach}
              </ul>
            </div>
          {/block}
          {if $imagesCount > 5}
            <div class="arrows js-modal-arrows">
              <i class="material-icons arrow-up js-modal-arrow-up">&#xE5C7;</i>
              <i class="material-icons arrow-down js-modal-arrow-down">&#xE5C5;</i>
            </div>
          {/if}
        </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
