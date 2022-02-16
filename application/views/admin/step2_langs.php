<? if (isset($_GET['message'])) {
  $message = $_GET['message'];
} ?>
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
              <div class="step__desc">Языки</div>
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
              <div class="step__desc">Товары, подарки</div>
            </div>
          </div>
          <div class="step-list__divider"></div>
        </div>
      </div>
    </div>
    <h1 class="h1 margin--b-40">Заполнение языковых версий для ссылки <?= $link ?></h1>
    <form class="form form__block--670" action="/admin/step2_langs" method="post">
      <div class="form-item margin--b-40 form__block--197">
        <div class="form-item__title">Язык для правки</div>
        <div class="select">
          <div class="placeholder">
            <div></div> Выберите язык
          </div>
          <ul>
            <? foreach ($langs_arr as $lang) : ?>
              <li class="selected_lang" data-value="<?= $lang['lang_cut'] ?>">
                <div style="text-transform: uppercase;"><?= $lang['lang_cut'] ?></div> <?= $lang['lang_name'] ?>
              </li>
            <? endforeach; ?>
          </ul>
          <? if (isset($message)) : ?>
            <div class="input__error">
              <div class="input__error-title">Не выбран язык</div>
              <div class="input__error-text">
                Выберите язык перед сохранением.
              </div>
            </div>
          <? endif; ?>
          <input type="hidden" name="selected_lang">
        </div>
      </div>
      <? foreach ($langs_arr as $langs) : ?>
        <div class="products hide" data-cat="<?= $langs['lang_cut'] ?>">
          <h2 class="h1 margin--b-36">Товары</h2>
          <? foreach ($products as $product) : ?>
            <? foreach ($products_langs as $prod_lang) : ?>
              <? if ($prod_lang['id_product'] == $product['id']) : ?>
                <div class="form-item margin--b-20">
                  <div class="form-item__title">Языковая версия товара вариации</div>
                  <div class="product-desc product-desc--2">
                    <div class="product-desc__img" data-dis="true"><img src="<?= $product['img'] ?>" alt="product img"></div>
                    <div class="product-desc__body">
                      <div class="product-desc__text">
                        <div class="input">
                          <div class="input__body">
                            <div class="input__desc">RU</div>
                            <input class="input__input" name="prod_name[<?=$product['id']?>][]" type="text" value="<?= $prod_lang['product_' . $langs['lang_cut']] ?>">
                            <input class="input__input" disabled name="prod_id[<?=$product['id']?>][]" type="hidden" value="<?= $product['id'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="product-desc__feature">
                        <div class="product-desc__feature-name">ASIN</div>
                        <div class="input input--disabled">
                          <div class="input__body">
                            <input class="input__input" data-dis="true" disabled type="text" placeholder="ASIN: <?= $product['asin'] ?>" disabled>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <? endif; ?>
            <? endforeach; ?>
            <?$k=1;?>
            <? foreach ($product_variations as $key => $variation) : ?>
              <? if ($variation['parent_ASIN'] == $product['asin']) : ?>
                <? foreach ($prodvars_langs as $prodvar_lang) : ?>
                  <? if ($prodvar_lang['id_prodvar'] == $variation['id']) : ?>
                    <div data-type="options" class="form-item margin--b-30">
                      <div class="form-item__title">Тип Вариации</div>
                      <div class="product-variations">
                        <div class="product-variations__item prod_color">
                          <div class="checkbox ">
                            <label>
                              <input type="checkbox" data-dis="true" disabled <? if (!empty(trim($variation['color']))) : ?>checked<? endif; ?>><span></span>
                              <div class="checkbox__text" data-name="color[]">Цвет</div>
                            </label>
                          </div>
                        </div>
                        <div class="product-variations__item prod_weight">
                          <div class="checkbox ">
                            <label>
                              <input type="checkbox" data-dis="true" disabled <? if (!empty(trim($variation['weight']))) : ?>checked<? endif; ?>><span></span>
                              <div class="checkbox__text" data-name="weight[]">Вес</div>
                            </label>
                          </div>
                        </div>
                        <div class="product-variations__item prod_varname">
                          <div class="checkbox ">
                            <label>
                              <input type="checkbox" data-dis="true" disabled <? if (!empty(trim($variation['name']))) : ?>checked<? endif; ?>><span></span>
                              <div class="checkbox__text" data-name="name[]">Имя Вариации</div>
                            </label>
                          </div>
                        </div>
                        <div class="product-variations__item prod_size">
                          <div class="checkbox ">
                            <label>
                              <input type="checkbox" data-dis="true" disabled <? if (!empty(trim($variation['size']))) : ?>checked<? endif; ?>><span></span>
                              <div class="checkbox__text" data-name="size[]">Размер</div>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="margin--b-30">
                      <div class="form-product-variations">
                        <div class="form-product-variations__number js-product-number"><? echo $k?><? $k=$k+1;?></div>
                        <div class="form-product-variations__body">
                          <div class="form-product-variations__row">
                            <div class="form-product-variations__col">
                              <div class="form-item">
                                <div class="form-item__title">ASIN</div>
                                <div class="input input--disabled">
                                  <div class="input__body">
                                    <input class="input__input" data-dis="true" disabled type="text" placeholder="ASIN: <?= $variation['asin'] ?>" disabled>
                                    <input class="input__input" disabled type="hidden" value="<?= $variation['id'] ?>" name="prodvar_id[<?=$product['id']?>][]">
                                  </div>
                                </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">URL картинки</div>
                                <div class="input input--disabled">
                                  <div class="input__body">
                                    <input class="input__input" data-dis="true" disabled type="text" placeholder="<?= $variation['img'] ?>" disabled>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-product-variations__row">
                            <div class="form-product-variations__col">
                              <? if (!empty(trim($variation['color']))) : ?>
                                <div class="form-item">
                                  <div class="form-item__title">Цвет</div>
                                  <div class="input input--disabled">
                                    <div class="input__body">
                                      <input class="input__input" data-dis="true" disabled type="text" placeholder="<?= $variation['color'] ?>" disabled>
                                    </div>
                                  </div>
                                </div>
                              <? endif; ?>
                              <? if (!empty(trim($variation['weight']))) : ?>
                                <div class="form-item <? if (isset($variation['weight']) && $variation['weight'] == '') : ?> form-item_input<? endif; ?>">
                                  <div class="form-item__title">Вес</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <div class="input__desc">RU</div>
                                      <input class="input__input" disabled name="prodvar_weight[<?=$product['id']?>][]" type="text" value="<?= $prodvar_lang['weight_' . $langs['lang_cut']] ?>">
                                    </div>
                                  </div>
                                </div>
                              <? endif; ?>
                              <? if (!empty(trim($variation['name']))) : ?>
                                <div class="form-item <? if (isset($variation['name']) && $variation['name'] == '') : ?>form-item_input<? endif; ?>">
                                  <div class="form-item__title">Имя вариации</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <div class="input__desc">RU</div>
                                      <input class="input__input" disabled name="prodvar_name[<?=$product['id']?>][]" type="text" value="<?= $prodvar_lang['name_' . $langs['lang_cut']] ?>">
                                    </div>
                                  </div>
                                </div>
                              <? endif; ?>
                              <? if (!empty(trim($variation['size']))) : ?>
                                <div class="form-item <? if (isset($variation['size']) && $variation['size'] == '') : ?> form-item_input<? endif; ?>">
                                  <div class="form-item__title">Размер</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <div class="input__desc">RU</div>
                                      <input class="input__input" disabled name="prodvar_size[<?=$product['id']?>][]" type="text" value="<?= $prodvar_lang['size_' . $langs['lang_cut']] ?>">
                                    </div>
                                  </div>
                                </div>
                              <? endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="form-product-variations__img">
                          <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="<?= $variation['img'] ?>" alt="product img">
                        </div>
                      </div>
                    </div>
                  <? endif; ?>
                <? endforeach; ?>

              <? endif; ?>

            <? endforeach; ?>
          <? endforeach; ?>

          <h2 class="h1 margin--b-36">Подарки</h2>
          <? foreach ($presents as $present) : ?>
            <? foreach ($presents_langs as $pres_lang) : ?>
              <? if ($pres_lang['id_present'] == $present['id']) : ?>
                <div class="form-item margin--b-20">
                  <div class="form-item__title">Языковая версия товара вариации</div>
                  <div class="product-desc product-desc--2">
                    <div class="product-desc__img"><img src="<?= $present['img'] ?>" alt="product img"></div>
                    <div class="product-desc__body">
                      <div class="product-desc__text">
                        <div class="input">
                          <div class="input__body">
                            <div class="input__desc">RU</div>
                            <input class="input__input" type="text" name="present_name[<?= $present['id'] ?>][]" value="<?= $pres_lang['present_' . $langs['lang_cut']] ?>">
                            <input class="input__input" type="hidden" name="present_id[<?= $present['id'] ?>][]" value="<?= $present['id'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="product-desc__feature">
                        <div class="product-desc__feature-name">ASIN:</div>
                        <div class="input input--disabled">
                          <div class="input__body">
                            <input class="input__input" data-dis="true" type="text" placeholder="ASIN: <? if (explode('.', $present['asin'])[0] != 'empty') {
                                                                                                          echo $present['asin'];
                                                                                                        } ?>" disabled>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <? endif; ?>
            <? endforeach; ?>
            <?$k=1;?>
            <? foreach ($present_variations as $variation) : ?>
              <? if ($present['asin'] == $variation['parent_ASIN']) : ?>
                <? foreach ($presvars_langs as $presvar_lang) : ?>
                  <? if ($presvar_lang['id_presvar'] == $variation['id']) : ?>
                    <div data-type="options" class="form-item margin--b-30">
                      <div class="form-item__title">Тип Вариации</div>
                      <div class="product-variations">
                        <div class="product-variations__item prod_color">
                          <div class="checkbox ">
                            <label>
                              <input data-dis="true" type="checkbox" disabled <? if (!empty(trim($variation['color']))) : ?>checked<? endif; ?>><span></span>
                              <div class="checkbox__text" data-name="presvar_color[]">Цвет</div>
                            </label>
                          </div>
                        </div>
                        <div class="product-variations__item prod_weight">
                          <div class="checkbox ">
                            <label>
                              <input data-dis="true" type="checkbox" disabled <? if (!empty(trim($variation['weight']))) : ?>checked<? endif; ?>><span></span>
                              <div class="checkbox__text" data-name="present_weight[]">Вес</div>
                            </label>
                          </div>
                        </div>
                        <div class="product-variations__item prod_varname">
                          <div class="checkbox ">
                            <label>
                              <input data-dis="true" type="checkbox" disabled <? if (!empty(trim($variation['name']))) : ?>checked<? endif; ?>><span></span>
                              <div class="checkbox__text" data-name="present_name[]">Имя Вариации</div>
                            </label>
                          </div>
                        </div>
                        <div class="product-variations__item prod_size">
                          <div class="checkbox ">
                            <label>
                              <input data-dis="true" type="checkbox" disabled <? if (!empty(trim($variation['size']))) : ?>checked<? endif; ?>><span></span>
                              <div class="checkbox__text" data-name="present_size[]">Размер</div>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="margin--b-30">
                      <div class="form-product-variations">
                        <div class="form-product-variations__number js-product-number"><? echo $k?><? $k=$k+1;?></div>
                        <div class="form-product-variations__body">
                          <div class="form-product-variations__row">
                            <div class="form-product-variations__col">
                              <div class="form-item">
                                <div class="form-item__title">ASIN</div>
                                <div class="input input--disabled">
                                  <div class="input__body">
                                    <input class="input__input" data-dis="true" type="text" placeholder="ASIN: <?= $variation['asin'] ?>" disabled>
                                    <input class="input__input" type="hidden" value="<?= $variation['id'] ?>" name="presvar_id[<?=$present['id']?>][]">
                                  </div>
                                </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">URL картинки</div>
                                <div class="input input--disabled">
                                  <div class="input__body">
                                    <input class="input__input" data-dis="true" type="text" placeholder="<?= $variation['img'] ?>" disabled>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-product-variations__row">
                            <div class="form-product-variations__col">
                              <? if (!empty(trim($variation['color']))) : ?>
                                <div class="form-item <? if (isset($variation['color']) && $variation['color'] == '') : ?> form-item_input<? endif; ?>">
                                  <div class="form-item__title">Цвет</div>
                                  <div class="input input--disabled">
                                    <div class="input__body">
                                      <input class="input__input" type="text" data-dis="true"  placeholder="<?= $variation['color'] ?>" disabled>
                                    </div>
                                  </div>
                                </div>
                              <? endif; ?>
                              <? if (!empty(trim($variation['weight']))) : ?>
                                <div class="form-item <? if (isset($variation['weight']) && $variation['weight'] == '') : ?> form-item_input<? endif; ?>">
                                  <div class="form-item__title">Вес</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <div class="input__desc">RU</div>
                                      <input class="input__input" type="text" name="presvar_weight[<?= $present['id'] ?>][]" value="<?= $presvar_lang['weight_' . $langs['lang_cut']] ?>">
                                    </div>
                                  </div>
                                </div>
                              <? endif; ?>
                              <? if (!empty(trim($variation['name']))) : ?>
                                <div class="form-item <? if (isset($variation['name']) && $variation['name'] == '') : ?> form-item_input<? endif; ?>">
                                  <div class="form-item__title">Имя вариации</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <div class="input__desc">RU</div>
                                      <input class="input__input" type="text" name="presvar_name[<?= $present['id'] ?>][]" value="<?= $presvar_lang['name_' . $langs['lang_cut']] ?>">
                                    </div>
                                  </div>
                                </div>
                              <? endif; ?>
                              <? if (!empty(trim($variation['size']))) : ?>
                                <div class="form-item <? if (isset($variation['size']) && $variation['size'] == '') : ?> form-item_input<? endif; ?>">
                                  <div class="form-item__title">Размер</div>
                                  <div class="input">
                                    <div class="input__body">
                                      <div class="input__desc">RU</div>
                                      <input class="input__input" type="text" name="presvar_size[<?= $present['id'] ?>][]" value="<?= $presvar_lang['size_' . $langs['lang_cut']] ?>">
                                    </div>
                                  </div>
                                </div>
                              <? endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="form-product-variations__img">
                          <div class="form-product-variations__img-title">Предпросмотр товара</div><img src="<?= $variation['img'] ?>" alt="product img">
                        </div>
                      </div>
                    </div>
                  <? endif; ?>
                <? endforeach; ?>
              <? endif; ?>
            <? endforeach; ?>
          <? endforeach; ?>
        </div>
      <? endforeach; ?>

      <div class="margin--b-24">
        <div>Вы дошли до конца, если вам нужно править ещё один язык, смените его сверху и внесите правки ещё раз</div><br><a href="#">Наверх</a>
      </div>
      <div class="page-step__actions">
        <a class="btn btn--outline-grey" href="/admin/step1_langs" role="button"><span class="btn__text">Назад</span></a>
        <button class="btn" name="role" value="save" role="button"><span class="btn__text">Сохранить</span></button>
        <button class="btn" name="role" value="save_next" role="button"><span class="btn__text">Сохранить и далее</span></button>
        <a class="btn" href="/admin" role="button">
          <span class="btn__text">Далее</span></a>
      </div>
    </form>
  </div>
</div>