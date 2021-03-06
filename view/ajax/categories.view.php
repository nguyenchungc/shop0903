<div id="new-<?=$data['alias']?>" >
<?php
 $products = $data['products'];
foreach ($products as $p) :?>
<li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 " style ="height:350px">
  <div class="product-item">
    <div class="item-inner">
      <div class="product-thumbnail">
      <?php if($p->promotion_price !=0) :?>
        <div class="icon-sale-label sale-left">Sale</div>
      <?php endif?>
        <div class="icon-new-label new-right">New</div>
        <div class="pr-img-area">
          <a title="Ipsums Dolors Untra" href="<?=$p->url?>-<?=$p->id?>">
            <figure>
              <img class="first-img" src="public/source/images/<?=$p->image?>" alt="">
              <img class="hover-img" src="public/source/images/<?=$p->image?>" alt="">
            </figure>
          </a>
          <button type="button" class="add-to-cart-mt">
            <i class="fa fa-shopping-cart"></i>
            <span> Add to Cart</span>
          </button>
        </div>

      </div>
      <div class="item-info">
        <div class="info-inner">
          <div class="item-title">
            <a title="<?=$p->name?>" href="<?=$p->url?>-<?=$p->id?>"><?=$p->name?> </a>
          </div>
          <div class="item-content">

            <div class="item-price">
              <div class="price-box">
              <?php if ($p->promotion_price !=0) :?>
                                <p class="special-price">
                                <span class="price-label">Special Price</span>
                                  <span class="price"> <?=number_format($p->promotion_price)?> </span>
                                </p>
                                <p class="old-price">
                                  <span class="price-label">Regular Price:</span>
                                  <span class="price"> <?=number_format($p->price)?> </span>
                                </p>
                              <?php else :?>
                              <p class="special-price">
                                  <span class="price-label">Special Price</span>
                                  <span class="price"> <?=number_format($p->price)?> </span>
                              </p>
                              <?php endif?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>
<?php endforeach ?>
</div>