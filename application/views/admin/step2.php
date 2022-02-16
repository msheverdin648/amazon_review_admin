<?
if (!empty($_SESSION['product_variations'])) {
  $u_prod = $_SESSION['product_variations'];
}
if (!empty($_SESSION['present_variations'])) {
  $u_pres = $_SESSION['present_variations'];
}
?>

<div class="page">
  <div class="page-step">
    <div class="page-step__step-list">
      <div class="step-list">
        <div class="step-list__item step-list__item--done">
          <div class="step step--done">
            <div class="step__number"><span>1</span>
              <svg class="icon icon--check ">
                <use xlink:href="/static/images/icons.svg#icon--check"></use>
              </svg>
            </div>
            <div class="step__body">
              <div class="step__title">Шаг 1</div>
              <div class="step__desc">Товары, подарки</div>
            </div>
          </div>
          <div class="step-list__divider"></div>
        </div>
        <div class="step-list__item step-list__item--active">
          <div class="step step--active">
            <div class="step__number"><span>2</span>
              <svg class="icon icon--check ">
                <use xlink:href="/static/images/icons.svg#icon--check"></use>
              </svg>
            </div>
            <div class="step__body">
              <div class="step__title">Шаг 2</div>
              <div class="step__desc">Вариации, если есть</div>
            </div>
          </div>
          <div class="step-list__divider"></div>
        </div>
        <div class="step-list__item">
          <div class="step">
            <div class="step__number"><span>3</span>
              <svg class="icon icon--check ">
                <use xlink:href="/static/images/icons.svg#icon--check"></use>
              </svg>
            </div>
            <div class="step__body">
              <div class="step__title">Шаг 3</div>
              <div class="step__desc">Вкладыш</div>
            </div>
          </div>
          <div class="step-list__divider"></div>
        </div>
        <div class="step-list__item">
          <div class="step">
            <div class="step__number"><span>4</span>
              <svg class="icon icon--check ">
                <use xlink:href="/static/images/icons.svg#icon--check"></use>
              </svg>
            </div>
            <div class="step__body">
              <div class="step__title">Шаг 4</div>
              <div class="step__desc">Дизайн сайта</div>
            </div>
          </div>
          <div class="step-list__divider"></div>
        </div>
      </div>
    </div>
    <h1 class="h1 margin--b-36">Вариации товаров</h1>
    <form class="form" action="/admin/step2" method="post">
      <? foreach ($products as $key => $product) : ?>
        <? $key = explode('.', $key)[1]; ?>
        <div class="form-item margin--b-20">
          <div class="form-item__title">Добавление вариации для товара </div>
          <div class="product-desc">
            <div class="product-desc__img"><img src="<?= $product['img'] ?>" alt="product img"></div>
            <div class="product-desc__body">
              <div class="product-desc__text"><?= $product['name'] ?> </div>
              <div class="product-desc__feature">
                <div class="product-desc__feature-name">ASIN: </div>
                <div class="product-desc__feature-value"><?= $product['ASIN'] ?> </div>
              </div>
            </div>
          </div>
        </div>
        <? if ($product['variate'] === '1') :  ?>
          <? if (isset($product_variations)) : $i = 0;
            $j = 0; ?>
            <? $k = 1; ?>
            <? foreach ($product_variations as $var) : ?>
              <? if ($product['ASIN'] == $var['parent_ASIN']) : $j = 1; ?>
                <div data-type="options" class="form-item margin--b-30">
                  <div class="form-item__title">Тип Вариации </div>
                  <div class="product-variations">
                    <div class="product-variations__item prod_color">
                      <div class="checkbox ">
                        <label>
                          <input type="checkbox" <? if (!empty(trim($var['color']))) : ?>checked<? endif; ?>><span></span>
                          <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="color">Цвет</div>
                        </label>
                      </div>
                    </div>
                    <div class="product-variations__item prod_weight">
                      <div class="checkbox ">
                        <label>
                          <input type="checkbox" <? if (!empty(trim($var['weight']))) : ?>checked<? endif; ?>><span></span>
                          <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="weight">Вес</div>
                        </label>
                      </div>
                    </div>
                    <div class="product-variations__item prod_varname">
                      <div class="checkbox ">
                        <label>
                          <input type="checkbox" <? if (!empty(trim($var['name']))) : ?>checked<? endif; ?>><span></span>
                          <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="name">Имя Вариации</div>
                        </label>
                      </div>
                    </div>
                    <div class="product-variations__item prod_size">
                      <div class="checkbox ">
                        <label>
                          <input type="checkbox" <? if (!empty(trim($var['size']))) : ?>checked<? endif; ?>><span></span>
                          <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="size">Размер</div>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <? break; ?>
              <? endif; ?>
            <? endforeach; ?>
            <? if ($j == 0) : ?>
              <div data-type="options" class="form-item margin--b-30">
                <div class="form-item__title">Тип Вариации </div>
                <div class="product-variations">
                  <div class="product-variations__item prod_color">
                    <div class="checkbox ">
                      <label>
                        <input type="checkbox" checked><span></span>
                        <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="color">Цвет</div>
                      </label>
                    </div>
                  </div>
                  <div class="product-variations__item prod_weight">
                    <div class="checkbox ">
                      <label>
                        <input type="checkbox"><span></span>
                        <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="weight">Вес</div>
                      </label>
                    </div>
                  </div>
                  <div class="product-variations__item prod_varname">
                    <div class="checkbox ">
                      <label>
                        <input type="checkbox" checked><span></span>
                        <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="name">Имя Вариации</div>
                      </label>
                    </div>
                  </div>
                  <div class="product-variations__item prod_size">
                    <div class="checkbox ">
                      <label>
                        <input type="checkbox"><span></span>
                        <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="size">Размер</div>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            <? endif; ?>
            <div class="margin--b-63">
              <div data-present="false" class="product-section-variations js-product-section">
                <div class="product-section-variations__list js-product-list">

                  <? foreach ($product_variations as $key => $var) : ?>

                    <? if ($var['parent_ASIN'] == $product['ASIN']) :  $i = 1 ?>
                      <div class="product-section-variations__item js-product-item">
                        <div class="form-product-variations">
                          <div class="form-product-variations__number js-product-number"><? echo $k; ?></div>
                          <div class="form-product-variations__body">
                            <div class="form-product-variations__row">
                              <div class="form-product-variations__col" style="margin-bottom: -20px">
                                <div class="form-item form-item_input form-item--active">
                                  <div class="form-item__title">ASIN</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input class="input__input" data-asin='true' type="text" data-required="true" name="ASIN[<?= $product['ASIN'] ?>][]" placeholder="ASIN" value="<?= $var['asin'] ?>">
                                      <input class="input__input" id="parent_asin" type="hidden" name="parent_ASIN[<?= $product['ASIN'] ?>][]" value="<?= $product['ASIN'] ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-item form-item_input form-item--active">
                                  <div class="form-item__title">URL картинки</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input class="input__input _img" type="text" data-required="true" name="img[<?= $product['ASIN'] ?>][]" value="<?= $var['img'] ?>" placeholder="http://">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-item">
                                  <div class="form-item__title">&nbsp;</div>
                                  <button class="btn btn--icon-only btn--outline-red" type="button">
                                    <svg class="icon icon--minus ">
                                      <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="form-product-variations__row">
                              <div class="form-product-variations__col">
                                <div style="margin-top: 10px" data-attr="Цвет" class="form-item">
                                  <div class="form-item__title">Цвет</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="color[<?= $product['ASIN'] ?>][]" value="<?= $var['color'] ?>" class="input__input" type="text" placeholder="#000000">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Вес" class="form-item">
                                  <div class="form-item__title">Вес</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="weight[<?= $product['ASIN'] ?>][]" value="<?= $var['weight'] ?>" class="input__input" type="text" placeholder="КГ">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Имя Вариации" class="form-item">
                                  <div class="form-item__title">Имя Вариации</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="name[<?= $product['ASIN'] ?>][]" value="<?= $var['name'] ?>" class="input__input" type="text" placeholder="имя товара">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Размер" class="form-item">
                                  <div class="form-item__title">Размер</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="size[<?= $product['ASIN'] ?>][]" value="<?= $var['size'] ?>" class="input__input" type="text" placeholder="см">
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="form-product-variations__img">
                            <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="<?= $var['img'] ?>" alt="product img">
                          </div>
                        </div>
                      </div>
                      <? $k = $k + 1; ?>
                    <? endif; ?>
                  <? endforeach; ?>
                  <? if ($i == 0) : ?>

                    <div class="product-section-variations__item js-product-item">
                      <div class="form-product-variations">
                        <div class="form-product-variations__number js-product-number">1</div>
                        <div class="form-product-variations__body">
                          <div class="form-product-variations__row">
                            <div class="form-product-variations__col" style="margin-bottom: -20px">
                              <div class="form-item">
                                <div class="form-item__title">ASIN</div>
                                <div class="input">
                                  <div class="input__body">
                                    <input class="input__input" data-asin='true' data-required="true" type="text" required name="ASIN[<?= $product['ASIN'] ?>][]" placeholder="ASIN">
                                    <input class="input__input" id="parent_asin" type="hidden" name="parent_ASIN[<?= $product['ASIN'] ?>][]" value="<?= $product['ASIN'] ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">URL картинки</div>
                                <div class="input">
                                  <div class="input__body">
                                    <input class="input__input _img" data-required="true" type="text" required name="img[<?= $product['ASIN'] ?>][]" placeholder="http://">
                                  </div>
                                </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">&nbsp;</div>
                                <button class="btn btn--icon-only btn--outline-red" type="button">
                                  <svg class="icon icon--minus ">
                                    <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="form-product-variations__row">
                            <div class="form-product-variations__col">
                            </div>
                          </div>
                        </div>
                        <div class="form-product-variations__img">
                          <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="/static/images/form-product__img.png" alt="product img">
                        </div>
                      </div>
                    </div>
                  <? endif; ?>
                </div>
                <div class="product-section-variations__footer">
                  <button class="btn btn--outline-grey js-product-add" type="button">
                    <svg class="icon icon--plus-2 ">
                      <use xlink:href="/static/images/icons.svg#icon--plus-2"></use>
                    </svg><span class="btn__text">Добавить товар</span>
                  </button>
                </div>
              </div>


            </div>
          <? elseif (isset($u_prod)) : $i = 0; ?>
            <? $k = 1; ?>
            <? foreach ($u_prod as $var) : ?>
              <? if ($product['ASIN'] == $var['parent_ASIN']) : $j = 1; ?>
              <div data-type="options" class="form-item margin--b-30">
                  <div class="form-item__title">Тип Вариации </div>
                  <div class="product-variations">
                    <div class="product-variations__item prod_color">
                      <div class="checkbox ">
                        <label>
                          <input type="checkbox" <? if (!empty(trim($var['color']))) : ?>checked<? endif; ?>><span></span>
                          <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="color">Цвет</div>
                        </label>
                      </div>
                    </div>
                    <div class="product-variations__item prod_weight">
                      <div class="checkbox ">
                        <label>
                          <input type="checkbox" <? if (!empty(trim($var['weight']))) : ?>checked<? endif; ?>><span></span>
                          <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="weight">Вес</div>
                        </label>
                      </div>
                    </div>
                    <div class="product-variations__item prod_varname">
                      <div class="checkbox ">
                        <label>
                          <input type="checkbox" <? if (!empty(trim($var['name']))) : ?>checked<? endif; ?>><span></span>
                          <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="name">Имя Вариации</div>
                        </label>
                      </div>
                    </div>
                    <div class="product-variations__item prod_size">
                      <div class="checkbox ">
                        <label>
                          <input type="checkbox" <? if (!empty(trim($var['size']))) : ?>checked<? endif; ?>><span></span>
                          <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name="size">Размер</div>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              <? break; ?>
              <? endif; ?>
            <? endforeach; ?>
            <div class="margin--b-63">
              <div data-present="false" class="product-section-variations js-product-section">
                <div class="product-section-variations__list js-product-list">
                  <? foreach ($_SESSION['product_variations'] as $key_num => $var) : ?>
                    <? $key = explode('.', $key_num)[1]; ?>
                    <? if ($var['parent_ASIN'] == $product['ASIN']) :  $i = 1 ?>
                      <div class="product-section-variations__item js-product-item">
                        <div class="form-product-variations">
                          <div class="form-product-variations__number js-product-number"><? echo $k;
                                                                                          $k++; ?></div>
                          <div class="form-product-variations__body">
                            <div class="form-product-variations__row">
                              <div class="form-product-variations__col" style="margin-bottom: -20px">
                                <div class="form-item form-item_input form-item--active">
                                  <div class="form-item__title">ASIN</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input class="input__input" data-asin='true' type="text" data-required="true" name="ASIN[<?= $product['ASIN'] ?>][]" placeholder="ASIN" value="<?= $var['ASIN'] ?>">
                                      <input class="input__input" type="hidden" id="parent_asin" name="parent_ASIN[<?= $product['ASIN'] ?>][]" value="<?= $product['ASIN'] ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-item form-item_input form-item--active">
                                  <div class="form-item__title">URL картинки</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input class="input__input _img" type="text" data-required="true" name="img[<?= $product['ASIN'] ?>][]" value="<?= $var['img'] ?>" placeholder="http://">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-item">
                                  <div class="form-item__title">&nbsp;</div>
                                  <button class="btn btn--icon-only btn--outline-red" type="button">
                                    <svg class="icon icon--minus ">
                                      <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="form-product-variations__row">
                              <div class="form-product-variations__col">
                                <div style="margin-top: 10px" data-attr="Цвет" class="form-item">
                                  <div class="form-item__title">Цвет</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="color[<?= $product['ASIN'] ?>][]" value="<?= $var['color'] ?>" class="input__input" type="text" placeholder="#000000">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Вес" class="form-item">
                                  <div class="form-item__title">Вес</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="weight[<?= $product['ASIN'] ?>][]" value="<?= $var['weight'] ?>" class="input__input" type="text" placeholder="КГ">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Имя Вариации" class="form-item">
                                  <div class="form-item__title">Имя Вариации</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="name[<?= $product['ASIN'] ?>][]" value="<?= $var['name'] ?>" class="input__input" type="text" placeholder="имя товара">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Размер" class="form-item">
                                  <div class="form-item__title">Размер</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="size[<?= $product['ASIN'] ?>][]" value="<?= $var['size'] ?>" class="input__input" type="text" placeholder="см">
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="form-product-variations__img">
                            <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="<?= $var['img'] ?>" alt="product img">
                          </div>
                        </div>
                      </div>
                    <? endif; ?>
                  <? endforeach; ?>
                </div>
                <div class="product-section-variations__footer">
                  <button class="btn btn--outline-grey js-product-add" type="button">
                    <svg class="icon icon--plus-2 ">
                      <use xlink:href="/static/images/icons.svg#icon--plus-2"></use>
                    </svg><span class="btn__text">Добавить товар</span>
                  </button>
                </div>
              </div>


            </div>
          <? else : ?>
            <div data-type="options" class="form-item margin--b-30">
              <div class="form-item__title">Тип Вариации</div>
              <div class="product-variations">
                <div class="product-variations__item">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span></span>
                      <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name='color'>Цвет</div>
                    </label>
                  </div>
                </div>
                <div class="product-variations__item">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span></span>
                      <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name='weight'>Вес</div>
                    </label>
                  </div>
                </div>
                <div class="product-variations__item">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span></span>
                      <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name='name'>Имя Вариации</div>
                    </label>
                  </div>
                </div>
                <div class="product-variations__item">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span></span>
                      <div class="checkbox__text" data-parent="[<?= $product['ASIN'] ?>]" data-name='size'>Размер</div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="margin--b-63">
              <div data-present="false" class="product-section-variations js-product-section">
                <div class="product-section-variations__list js-product-list">
                  <div class="product-section-variations__item js-product-item">
                    <div class="form-product-variations">
                      <div class="form-product-variations__number js-product-number">1</div>
                      <div class="form-product-variations__body">
                        <div class="form-product-variations__row">
                          <div class="form-product-variations__col" style="margin-bottom: -20px">
                            <div class="form-item">
                              <div class="form-item__title">ASIN</div>
                              <div class="input">
                                <div class="input__body">
                                  <input class="input__input" type="text" name="ASIN[<?= $product['ASIN'] ?>][]" placeholder="ASIN" data-required="true">
                                  <input class="input__input" id="parent_asin" type="hidden" name="parent_ASIN[<?= $product['ASIN'] ?>][]" value="<?= $product['ASIN'] ?>">
                                </div>
                              </div>
                            </div>
                            <div class="form-item">
                              <div class="form-item__title">URL картинки</div>
                              <div class="input">
                                <div class="input__body">
                                  <input class="input__input _img" type="text" data-required="true" name="img[<?= $product['ASIN'] ?>][]" placeholder="http://">
                                </div>
                              </div>
                            </div>
                            <div class="form-item">
                              <div class="form-item__title">&nbsp;</div>
                              <button class="btn btn--icon-only btn--outline-red" type="button">
                                <svg class="icon icon--minus ">
                                  <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                </svg>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-product-variations__row">
                          <div class="form-product-variations__col">
                          </div>
                        </div>
                      </div>
                      <div class="form-product-variations__img">
                        <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="/static/images/form-product__img.png" alt="product img">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-section-variations__footer">
                  <button class="btn btn--outline-grey js-product-add" type="button">
                    <svg class="icon icon--plus-2 ">
                      <use xlink:href="/static/images/icons.svg#icon--plus-2"></use>
                    </svg><span class="btn__text">Добавить товар</span>
                  </button>
                </div>
              </div>
            </div>
          <? endif; ?>
        <? endif; ?>
      <? endforeach; ?>
      <h2 class="h1 margin--b-36">Вариации подарков</h2>
      <? foreach ($presents as $key => $present) : ?>
        <? $key = explode('.', $key)[1]; ?>
        <div class="form-item margin--b-20">
          <div class="product-desc">
            <div class="product-desc__img"><img src="<?= $present['img'] ?>" alt="product img"></div>
            <div class="product-desc__body">
              <div class="product-desc__text"><?= $present['name'] ?> </div>
              <? if (explode('.', $present['ASIN'])[0] != 'empty') : ?>
                <div class="product-desc__feature">
                  <div class="product-desc__feature-name">ASIN: </div>
                  <div class="product-desc__feature-value"><?= $present['ASIN'] ?></div>
                </div>
              <? endif; ?>
            </div>
          </div>
        </div>
        <? if ($present['variate'] == 1) :  ?>
          <? if (isset($present_variations)) : $i = 0;
            $j = 0; ?>
            <? $k = 1; ?>
            <? foreach ($present_variations as $var) : ?>
              <? if ($present['ASIN'] == $var['parent_ASIN']) : $j = 1; ?>
                <div data-type="options" class="form-item margin--b-30">
                    <div class="form-item__title">Тип Вариации </div>
                    <div class="product-variations">
                      <div class="product-variations__item prod_color">
                        <div class="checkbox ">
                          <label>
                            <input type="checkbox" <? if (!empty(trim($var['color']))) : ?>checked<? endif; ?>><span></span>
                            <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_color">Цвет</div>
                          </label>
                        </div>
                      </div>
                      <div class="product-variations__item prod_weight">
                        <div class="checkbox ">
                          <label>
                            <input type="checkbox" <? if (!empty(trim($var['weight']))) : ?>checked<? endif; ?>><span></span>
                            <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_weight">Вес</div>
                          </label>
                        </div>
                      </div>
                      <div class="product-variations__item prod_varname">
                        <div class="checkbox ">
                          <label>
                            <input type="checkbox" <? if (!empty(trim($var['name']))) : ?>checked<? endif; ?>><span></span>
                            <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_name">Имя Вариации</div>
                          </label>
                        </div>
                      </div>
                      <div class="product-variations__item prod_size">
                        <div class="checkbox ">
                          <label>
                            <input type="checkbox" <? if (!empty(trim($var['size']))) : ?>checked<? endif; ?>><span></span>
                            <div class="checkbox__text"  data-parent="[<?=$present['ASIN']?>]" data-name="present_size">Размер</div>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                <? break; ?>
              <? endif; ?>
            <? endforeach; ?>
            <? if ($j == 0) : ?>
              <div data-type="options" class="form-item margin--b-30">
                <div class="form-item__title">Тип Вариации </div>
                <div class="product-variations">
                  <div class="product-variations__item prod_color">
                    <div class="checkbox ">
                      <label>
                        <input type="checkbox" checked><span></span>
                        <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_color">Цвет</div>
                      </label>
                    </div>
                  </div>
                  <div class="product-variations__item prod_weight">
                    <div class="checkbox ">
                      <label>
                        <input type="checkbox"><span></span>
                        <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_weight">Вес</div>
                      </label>
                    </div>
                  </div>
                  <div class="product-variations__item prod_varname">
                    <div class="checkbox ">
                      <label>
                        <input type="checkbox" checked><span></span>
                        <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_name">Имя Вариации</div>
                      </label>
                    </div>
                  </div>
                  <div class="product-variations__item prod_size">
                    <div class="checkbox ">
                      <label>
                        <input type="checkbox"><span></span>
                        <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_size">Размер</div>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            <? endif; ?>

            <div class="margin--b-63">
              <div data-present="true" class="product-section-variations js-product-section">
                <div class="product-section-variations__list js-product-list">
                  <? foreach ($present_variations as $key => $var) : ?>
                    <? if ($var['parent_ASIN'] == $present['ASIN']) :  $i = 1 ?>
                      <div class="product-section-variations__item js-product-item">
                        <div class="form-product-variations">
                          <div class="form-product-variations__number js-product-number"><? echo $k;
                                                                                          $k++; ?></div>
                          <div class="form-product-variations__body">
                            <div class="form-product-variations__row">
                              <div class="form-product-variations__col" style="margin-bottom: -20px">
                                <div class="form-item form-item_input form-item--active">
                                  <div class="form-item__title">ASIN</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input class="input__input" data-asin='true' type="text"  name="present_ASIN[<?=$present['ASIN']?>][]" placeholder="ASIN" value="<?= $var['asin'] ?>">
                                      <input class="input__input" id="present_parent_asin" type="hidden" name="present_parent_ASIN[<?=$present['ASIN']?>][]" value="<?= $present['ASIN'] ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-item form-item_input form-item--active">
                                  <div class="form-item__title">URL картинки</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input class="input__input _img" type="text" data-required="true" name="present_img[<?=$present['ASIN']?>][]" value="<?= $var['img'] ?>" placeholder="http://">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-item">
                                  <div class="form-item__title">&nbsp;</div>
                                  <button class="btn btn--icon-only btn--outline-red" type="button">
                                    <svg class="icon icon--minus ">
                                      <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="form-product-variations__row">
                              <div class="form-product-variations__col">
                                <div style="margin-top: 10px" data-attr="Цвет" class="form-item">
                                  <div class="form-item__title">Цвет</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="present_color[<?=$present['ASIN']?>][]" value="<?= $var['color'] ?>" class="input__input" type="text" placeholder="#000000">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Вес" class="form-item">
                                  <div class="form-item__title">Вес</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="present_weight[<?=$present['ASIN']?>][]" value="<?= $var['weight'] ?>" class="input__input" type="text" placeholder="КГ">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Имя Вариации" class="form-item">
                                  <div class="form-item__title">Имя Вариации</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="present_name[<?=$present['ASIN']?>][]" value="<?= $var['name'] ?>" class="input__input" type="text" placeholder="имя товара">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Размер" class="form-item">
                                  <div class="form-item__title">Размер</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="present_size[<?=$present['ASIN']?>][]" value="<?= $var['size'] ?>" class="input__input" type="text" placeholder="см">
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="form-product-variations__img">
                            <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="<?= $var['img'] ?>" alt="product img">
                          </div>
                        </div>
                      </div>
                    <? endif; ?>
                  <? endforeach; ?>
                  <? if ($i == 0) : ?>
                    <div class="product-section-variations__item js-product-item">
                      <div class="form-product-variations">
                        <div class="form-product-variations__number js-product-number"><? echo $k;
                                                                                        $k++; ?></div>
                        <div class="form-product-variations__body">
                          <div class="form-product-variations__row">
                            <div class="form-product-variations__col" style="margin-bottom: -20px">
                              <div class="form-item">
                                <div class="form-item__title">ASIN</div>
                                <div class="input">
                                  <div class="input__body">
                                    <input class="input__input" data-asin='true'  type="text" required name="present_ASIN[<?=$present['ASIN']?>][]" placeholder="ASIN">
                                    <input class="input__input" id="present_parent_asin" type="hidden" name="present_parent_ASIN[<?=$present['ASIN']?>][]" value="<?= $present['ASIN'] ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">URL картинки</div>
                                <div class="input">
                                  <div class="input__body">
                                    <input class="input__input _img" data-required="true" type="text" required name="present_img[<?=$present['ASIN']?>][]" placeholder="http://">
                                  </div>
                                </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">&nbsp;</div>
                                <button class="btn btn--icon-only btn--outline-red" type="button">
                                  <svg class="icon icon--minus ">
                                    <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="form-product-variations__row">
                            <div class="form-product-variations__col">

                            </div>
                          </div>
                        </div>
                        <div class="form-product-variations__img">
                          <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="/static/images/form-product__img.png" alt="product img">
                        </div>
                      </div>
                    </div>
                  <? endif; ?>
                </div>
                <div class="product-section-variations__footer">
                  <button class="btn btn--outline-grey js-product-add" type="button">
                    <svg class="icon icon--plus-2 ">
                      <use xlink:href="/static/images/icons.svg#icon--plus-2"></use>
                    </svg><span class="btn__text">Добавить товар</span>
                  </button>
                </div>
              </div>


            </div>
          <? elseif (isset($u_pres)) : $i = 0; ?>
            <? $k = 1; ?>
            <? foreach ($u_pres as $var) : ?>
              <? if ($present['ASIN'] == $var['parent_ASIN']) : $j = 1; ?>
                <div data-type="options" class="form-item margin--b-30">
                    <div class="form-item__title">Тип Вариации </div>
                    <div class="product-variations">
                      <div class="product-variations__item prod_color">
                        <div class="checkbox ">
                          <label>
                            <input type="checkbox" <? if (!empty(trim($var['color']))) : ?>checked<? endif; ?>><span></span>
                            <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_color">Цвет</div>
                          </label>
                        </div>
                      </div>
                      <div class="product-variations__item prod_weight">
                        <div class="checkbox ">
                          <label>
                            <input type="checkbox" <? if (!empty(trim($var['weight']))) : ?>checked<? endif; ?>><span></span>
                            <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_weight">Вес</div>
                          </label>
                        </div>
                      </div>
                      <div class="product-variations__item prod_varname">
                        <div class="checkbox ">
                          <label>
                            <input type="checkbox" <? if (!empty(trim($var['name']))) : ?>checked<? endif; ?>><span></span>
                            <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name="present_name">Имя Вариации</div>
                          </label>
                        </div>
                      </div>
                      <div class="product-variations__item prod_size">
                        <div class="checkbox ">
                          <label>
                            <input type="checkbox" <? if (!empty(trim($var['size']))) : ?>checked<? endif; ?>><span></span>
                            <div class="checkbox__text"  data-parent="[<?=$present['ASIN']?>]" data-name="present_size">Размер</div>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                <? break; ?>
              <? endif; ?>
            <? endforeach; ?>
            <div class="margin--b-63">
              <div data-present="true" class="product-section-variations js-product-section">
                <div class="product-section-variations__list js-product-list">
                  <? foreach ($_SESSION['present_variations'] as $key_num => $var) : ?>
                    <? $key = explode('.', $key_num)[1]; ?>
                    <? if ($var['parent_ASIN'] == $present['ASIN']) :  $i = 1 ?>
                      <div class="product-section-variations__item js-product-item">
                        <div class="form-product-variations">
                          <div class="form-product-variations__number js-product-number"><? echo $k;
                                                                                          $k++; ?></div>
                          <div class="form-product-variations__body">
                            <div class="form-product-variations__row">
                              <div class="form-product-variations__col" style="margin-bottom: -20px">
                                <div class="form-item form-item_input form-item--active">
                                  <div class="form-item__title">ASIN</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input class="input__input"  data-asin='true' type="text" name="present_ASIN[<?=$present['ASIN']?>][]" placeholder="ASIN" value="<?= $var['ASIN'] ?>">
                                      <input class="input__input" id="present_parent_asin" type="hidden" name="present_parent_ASIN[<?=$present['ASIN']?>][]" value="<?= $present['ASIN'] ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-item form-item_input form-item--active">
                                  <div class="form-item__title">URL картинки</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input class="input__input _img" type="text" data-required="true" name="present_img[<?=$present['ASIN']?>][]" value="<?= $var['img'] ?>" placeholder="http://">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-item">
                                  <div class="form-item__title">&nbsp;</div>
                                  <button class="btn btn--icon-only btn--outline-red" type="button">
                                    <svg class="icon icon--minus ">
                                      <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="form-product-variations__row">
                              <div class="form-product-variations__col">
                                <div style="margin-top: 10px" data-attr="Цвет" class="form-item">
                                  <div class="form-item__title">Цвет</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="present_color[<?=$present['ASIN']?>][]" value="<?= $var['color'] ?>" class="input__input" type="text" placeholder="#000000">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Вес" class="form-item">
                                  <div class="form-item__title">Вес</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="present_weight[<?=$present['ASIN']?>][]" value="<?= $var['weight'] ?>" class="input__input" type="text" placeholder="КГ">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Имя Вариации" class="form-item">
                                  <div class="form-item__title">Имя Вариации</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="present_name[<?=$present['ASIN']?>][]" value="<?= $var['name'] ?>" class="input__input" type="text" placeholder="имя товара">
                                    </div>
                                  </div>
                                </div>
                                <div style="margin-top: 10px" data-attr="Размер" class="form-item">
                                  <div class="form-item__title">Размер</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <input data-required="true" name="present_size[<?=$present['ASIN']?>][]" value="<?= $var['size'] ?>" class="input__input" type="text" placeholder="см">
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="form-product-variations__img">
                            <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="<?= $var['img'] ?>" alt="product img">
                          </div>
                        </div>
                      </div>
                    <? endif; ?>
                  <? endforeach; ?>
                </div>
                <div class="product-section-variations__footer">
                  <button class="btn btn--outline-grey js-product-add" type="button">
                    <svg class="icon icon--plus-2 ">
                      <use xlink:href="/static/images/icons.svg#icon--plus-2"></use>
                    </svg><span class="btn__text">Добавить товар</span>
                  </button>
                </div>
              </div>


            </div>
          <? else : ?>
            <div data-type="options" class="form-item margin--b-30">
              <div class="form-item__title">Тип Вариации</div>
              <div class="product-variations">
                <div class="product-variations__item">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked><span></span>
                      <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name='present_color'>Цвет</div>
                    </label>
                  </div>
                </div>
                <div class="product-variations__item">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span></span>
                      <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name='present_weight'>Вес</div>
                    </label>
                  </div>
                </div>
                <div class="product-variations__item">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked><span></span>
                      <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name='present_name'>Имя Вариации</div>
                    </label>
                  </div>
                </div>
                <div class="product-variations__item">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span></span>
                      <div class="checkbox__text" data-parent="[<?=$present['ASIN']?>]" data-name='present_size'>Размер</div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="margin--b-63">
              <div data-present="true" class="product-section-variations js-product-section">
                <div class="product-section-variations__list js-product-list">
                  <div class="product-section-variations__item js-product-item">
                    <div class="form-product-variations">
                      <div class="form-product-variations__number js-product-number">1</div>
                      <div class="form-product-variations__body">
                        <div class="form-product-variations__row">
                          <div class="form-product-variations__col" style="margin-bottom: -20px">
                            <div class="form-item">
                              <div class="form-item__title">ASIN</div>
                              <div class="input">
                                <div class="input__body">
                                  <input class="input__input"  data-asin='true' type="text" name="present_ASIN[<?=$present['ASIN']?>][]" placeholder="ASIN">
                                  <input class="input__input" id="present_parent_asin" type="hidden" name="present_parent_ASIN[<?=$present['ASIN']?>][]" value="<?= $present['ASIN'] ?>">
                                </div>
                              </div>
                            </div>
                            <div class="form-item">
                              <div class="form-item__title">URL картинки</div>
                              <div class="input">
                                <div class="input__body">
                                  <input class="input__input _img" type="text" data-required="true" name="present_img[<?=$present['ASIN']?>][]" placeholder="http://">
                                </div>
                              </div>
                            </div>
                            <div class="form-item">
                              <div class="form-item__title">&nbsp;</div>
                              <button class="btn btn--icon-only btn--outline-red" type="button">
                                <svg class="icon icon--minus ">
                                  <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                </svg>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="form-product-variations__row">
                          <div class="form-product-variations__col">
                          </div>
                        </div>
                      </div>
                      <div class="form-product-variations__img">
                        <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="/static/images/form-product__img.png" alt="product img">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-section-variations__footer">
                  <button class="btn btn--outline-grey js-product-add" type="button">
                    <svg class="icon icon--plus-2 ">
                      <use xlink:href="/static/images/icons.svg#icon--plus-2"></use>
                    </svg><span class="btn__text">Добавить товар</span>
                  </button>
                </div>
              </div>
            </div>
          <? endif; ?>
        <? endif; ?>
      <? endforeach; ?>
      <div class="form__block--sm"><button class="btn btn--block" role="button"><span class="btn__text">Следующий шаг</span></button>
      </div>
  </div>
  </form>
</div>
</div>
</div>
<script src="/static/js/addFormOption.js"></script>