<div class="page">
        <div class="page-step">
          <div class="page-step__step-list">
                  <div class="step-list">
                    <div class="step-list__item step-list__item--active">
                            <div class="step step--active">
                              <div class="step__number"><span>1</span>
                                      <svg class="icon icon--check ">
                                        <use xlink:href="static/images/icons.svg#icon--check"></use>
                                      </svg>
                              </div>
                              <div class="step__body">
                                <div class="step__title">Шаг 1</div>
                                <div class="step__desc">Товары, подарки</div>
                              </div>
                            </div>
                      <div class="step-list__divider"></div>
                    </div>
                    <div class="step-list__item">
                            <div class="step">
                              <div class="step__number"><span>2</span>
                                      <svg class="icon icon--check ">
                                        <use xlink:href="static/images/icons.svg#icon--check"></use>
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
                                        <use xlink:href="static/images/icons.svg#icon--check"></use>
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
                                        <use xlink:href="static/images/icons.svg#icon--check"></use>
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
          <h1 class="h1 margin--b-36">Выбор домена и ссылки для сайта акции</h1>
          <form class="form" action="views/save_step1.php" method="post">
            <div class="form__block margin--b-63">
              <div class="form-item margin--b-24">
                      <div class="select">
                        <div class="placeholder"><? if(isset($domain)):?><?= $domain ?><?else: echo 'Выберите домен';?><? endif;?></div>
                        <input type="hidden" name="domain" value="<? if(isset($domain)):?><?= $domain ?><? endif;?>">
                        <ul>
                          <? foreach($domains as $domain): ?>
                            <li data-value="<?= $domain['d_name'] ?>"><?= $domain['d_name'] ?></li>
                          <? endforeach; ?>
                        </ul>
                        
                      </div>
              </div>
              <div class="form-item">
                <div class="form-item__title">Ссылка для акции https://domain.com/ссылка/ </div>
                      <div class="input">
                        <div class="input__body">
                          <input class="input__input" type="text" value="<? if(isset($opinion)):?><?= $domain ?><?else: echo 'Введите ссылку';?><? endif;?>" required name="opinion">
                        </div>
                      </div>
              </div>
            </div>
            <div class="form__block-lg margin--b-63">
              <div class="product-section js-product-section">
                <div class="product-section__header">
                  <h2 class="h1">Товары </h2>
                </div>
                <div class="product-section__list js-product-list">
                  <? if(isset($products)): ?>
                    <? foreach($products as $key => $product): ?>
                      <div class="product-section__item js-product-item">
                          <div class="form-product">
                            <div class="form-product__number js-product-number"><?=$key+1?></div>
                            <div class="form-product__body">
                              <div class="form-product__row">
                                <div class="form-product__col-12">
                                  <div class="form-item">
                                    <div class="form-item__title">Название товара </div>
                                          <div class="input">
                                            <div class="input__body">
                                              <input class="input__input" type="text" placeholder="Название товара" name="name[]" value="<?=$product['name']?>" required>
                                            </div>
                                          </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-product__row">
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">ASIN</div>
                                                <div class="input form-product__w-asin">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="ASIN" name="ASIN[]" value="<?=$product['asin']?>" required>
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">URL картинки</div>
                                                <div class="input form-product__w-img-url">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="http://" name="img[]" value="<?=$product['img']?>" required>
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">Вариация?</div>
                                                <div class="checkbox _checked">
                                                  <label>
                                                    <input type="hidden" class="_hidden" name="variate[]" value="<?if($product['variate']): ?>1<? else: ?>0<?endif;?>">
                                                    <input  type="checkbox" <?if($product['variate']): ?>checked<?endif;?> ><span></span>
                                                    <div class="checkbox__text">Да</div>
                                                  </label>
                                                </div>
                                        </div>
                                      </div>
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">&nbsp;</div>
                                                <button class="btn btn--icon-only btn--outline-red form-product__delete" type="button">
                                                        <svg class="icon icon--minus ">
                                                          <use xlink:href="static/images/icons.svg#icon--minus"></use>
                                                        </svg>
                                                </button>
                                        </div>
                                      </div>
                              </div>
                            </div>
                            <div class="form-product__img">
                              <div class="form-product__img-title">Предпросмотр товара </div><img src="<?=$product['img']?>" alt="product img">
                            </div>
                          </div>
                  </div>
                      <? endforeach;?>
                  <? elseif(isset($_SESSION['products'])): ?>
                    <? foreach($_SESSION['products'] as $key_num => $product): ?>
                      <?$key= explode('.', $key_num)[1] ?>
                      <div class="product-section__item js-product-item">
                          <div class="form-product">
                            <div class="form-product__number js-product-number"><?=$key+1?></div>
                            <div class="form-product__body">
                              <div class="form-product__row">
                                <div class="form-product__col-12">
                                  <div class="form-item">
                                    <div class="form-item__title">Название товара </div>
                                          <div class="input">
                                            <div class="input__body">
                                              <input class="input__input" type="text" placeholder="Название товара" name="name[]" value="<?=$product['name']?>" required>
                                            </div>
                                          </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-product__row">
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">ASIN</div>
                                                <div class="input form-product__w-asin">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="ASIN" name="ASIN[]" value="<?=$product['ASIN']?>" required>
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">URL картинки</div>
                                                <div class="input form-product__w-img-url">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="http://" name="img[]" value="<?=$product['img']?>" required>
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">Вариация?</div>
                                                <div class="checkbox _checked">
                                                  <label>
                                                    <input type="hidden" class="_hidden" name="variate[]" value="<?if($product['variate']): ?>1<? else: ?>0<?endif;?>">
                                                    <input  type="checkbox" <?if($product['variate']): ?>checked<?endif;?> ><span></span>
                                                    <div class="checkbox__text">Да</div>
                                                  </label>
                                                </div>
                                        </div>
                                      </div>
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">&nbsp;</div>
                                                <button class="btn btn--icon-only btn--outline-red form-product__delete" type="button">
                                                        <svg class="icon icon--minus ">
                                                          <use xlink:href="static/images/icons.svg#icon--minus"></use>
                                                        </svg>
                                                </button>
                                        </div>
                                      </div>
                              </div>
                            </div>
                            <div class="form-product__img">
                              <div class="form-product__img-title">Предпросмотр товара </div><img src="<?=$product['img']?>" alt="product img">
                            </div>
                          </div>
                  </div>
                      <? endforeach;?>
                    <? else:?>
                      <div class="product-section__item js-product-item">
                          <div class="form-product">
                            <div class="form-product__number js-product-number">1</div>
                            <div class="form-product__body">
                              <div class="form-product__row">
                                <div class="form-product__col-12">
                                  <div class="form-item">
                                    <div class="form-item__title">Название товара для отзыва</div>
                                          <div class="input">
                                            <div class="input__body">
                                              <input class="input__input" type="text" placeholder="Название товара" name="name[]" required>
                                            </div>
                                          </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-product__row">
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">ASIN</div>
                                                <div class="input form-product__w-asin">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="ASIN" name="ASIN[]" required>
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">URL картинки</div>
                                                <div class="input form-product__w-img-url">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="http://" name="img[]" required>
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">Вариация?</div>
                                                <div class="checkbox _checked">
                                                  <label>
                                                    <input type="hidden" class="_hidden" name="variate[]" value="0">
                                                    <input type="checkbox" ><span></span>
                                                    <div class="checkbox__text">Да</div>
                                                  </label>
                                                </div>
                                        </div>
                                      </div>
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">&nbsp;</div>
                                                <button class="btn btn--icon-only btn--outline-red form-product__delete" type="button">
                                                        <svg class="icon icon--minus ">
                                                          <use xlink:href="static/images/icons.svg#icon--minus"></use>
                                                        </svg>
                                                </button>
                                        </div>
                                      </div>
                              </div>
                            </div>
                            <div class="form-product__img">
                              <div class="form-product__img-title">Предпросмотр товара </div><img src="static/images/form-product__img.png" alt="product img">
                            </div>
                          </div>
                  </div>
                    <? endif;?>
                </div>
                <div class="product-section__footer">
                        <button class="btn btn--outline-grey js-product-add" type="button">
                                <svg class="icon icon--plus-2 ">
                                  <use xlink:href="static/images/icons.svg#icon--plus-2"></use>
                                </svg><span class="btn__text">Добавить товар</span>
                        </button>
                </div>
              </div>
            </div>
            <div class="form__block-lg margin--b-68">
              <div class="product-section js-product-section">
                <div class="product-section__header">
                  <h2 class="h1">Подарки </h2>
                </div>
                <div class="product-section__list js-product-list">
                  <?if(isset($presents)):?>
                    <? foreach($presents as $key=>$present):?>
                      <div class="product-section__item js-product-item">
                          <div class="form-product">
                            <div class="form-product__number js-product-number"><?= $key+1 ?></div>
                            <div class="form-product__body">
                              <div class="form-product__row">
                                <div class="form-product__col-12">
                                  <div class="form-item">
                                    <div class="form-item__title">Название подарка</div>
                                          <div class="input">
                                            <div class="input__body">
                                              <input class="input__input" type="text" placeholder="Название " name="present_name[]" value="<?=$present['name']?>" required>
                                            </div>
                                          </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-product__row">
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">ASIN подарка, если есть</div>
                                                <div class="input form-product__w-asin--lg">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="ASIN подарка" name="present_ASIN[]" value="<?=$present['asin']?>">
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">URL картинки</div>
                                                <div class="input form-product__w-img-url">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="http://" name="present_img[]" value="<?=$present['img']?>" required>
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">Вариация?</div>
                                                <div class="checkbox _checked">
                                                  <label>
                                                    <input type="hidden" class="_hidden" name="present_var[]" value=" <?if($present['variate']): ?>1<? else: ?>0<?endif;?>">
                                                    <input type="checkbox" <?if($present['variate']): ?>checked<?endif;?> ><span></span>
                                                    <div class="checkbox__text">Да</div>
                                                  </label>
                                                </div>
                                        </div>
                                      </div>
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">&nbsp;</div>
                                                <button class="btn btn--icon-only btn--outline-red" type="button">
                                                        <svg class="icon icon--minus ">
                                                          <use xlink:href="static/images/icons.svg#icon--minus"></use>
                                                        </svg>
                                                </button>
                                        </div>
                                      </div>
                              </div>
                            </div>
                            <div class="form-product__img">
                              <div class="form-product__img-title">Предпросмотр подарка </div><img src="<?=$present['img']?>" alt="product img">
                            </div>
                          </div>
                  </div>
                      <? endforeach; ?>
                    <? elseif(isset($_SESSION['presents'])): ?>
                    <? foreach($_SESSION['presents'] as $key_num => $present): ?>
                      <?$key= explode('.', $key_num)[1] ?>
                      <div class="product-section__item js-product-item">
                          <div class="form-product">
                            <div class="form-product__number js-product-number"><?= $key+1 ?></div>
                            <div class="form-product__body">
                              <div class="form-product__row">
                                <div class="form-product__col-12">
                                  <div class="form-item">
                                    <div class="form-item__title">Название подарка</div>
                                          <div class="input">
                                            <div class="input__body">
                                              <input class="input__input" type="text" placeholder="Название " name="present_name[]" value="<?=$present['name']?>" required>
                                            </div>
                                          </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-product__row">
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">ASIN подарка, если есть</div>
                                                <div class="input form-product__w-asin--lg">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="ASIN подарка" name="present_ASIN[]" value="<?=$present['ASIN']?>">
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">URL картинки</div>
                                                <div class="input form-product__w-img-url">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="http://" name="present_img[]" value="<?=$present['img']?>" required>
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">Вариация?</div>
                                                <div class="checkbox _checked">
                                                  <label>
                                                    <input type="hidden" class="_hidden" name="present_var[]" value=" <?if($present['variate']): ?>1<? else: ?>0<?endif;?>">
                                                    <input type="checkbox" <?if($present['variate']): ?>checked<?endif;?> ><span></span>
                                                    <div class="checkbox__text">Да</div>
                                                  </label>
                                                </div>
                                        </div>
                                      </div>
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">&nbsp;</div>
                                                <button class="btn btn--icon-only btn--outline-red" type="button">
                                                        <svg class="icon icon--minus ">
                                                          <use xlink:href="static/images/icons.svg#icon--minus"></use>
                                                        </svg>
                                                </button>
                                        </div>
                                      </div>
                              </div>
                            </div>
                            <div class="form-product__img">
                              <div class="form-product__img-title">Предпросмотр подарка </div><img src="<?=$present['img']?>" alt="product img">
                            </div>
                          </div>
                  </div>
                      <? endforeach; ?>
                  <?else:?>
                    
                    <div class="product-section__item js-product-item">
                          <div class="form-product">
                            <div class="form-product__number js-product-number">1</div>
                            <div class="form-product__body">
                              <div class="form-product__row">
                                <div class="form-product__col-12">
                                  <div class="form-item">
                                    <div class="form-item__title">Название </div>
                                          <div class="input">
                                            <div class="input__body">
                                              <input class="input__input" type="text" placeholder="Название подарка" name="present_name[]" required>
                                            </div>
                                          </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-product__row">
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">ASIN подарка, если есть</div>
                                                <div class="input form-product__w-asin--lg">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="ASIN подарка" name="present_ASIN[]">
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">URL картинки</div>
                                                <div class="input form-product__w-img-url">
                                                  <div class="input__body">
                                                    <input class="input__input" type="text" placeholder="http://" name="present_img[]" required>
                                                  </div>
                                                </div>
                                        </div>
                                        <div class="form-item">
                                          <div class="form-item__title">Вариация?</div>
                                                <div class="checkbox _checked">
                                                  <label>
                                                    <input type="hidden" class="_hidden" name="present_var[]" value="0">
                                                    <input type="checkbox" ><span></span>
                                                    <div class="checkbox__text">Да</div>
                                                  </label>
                                                </div>
                                        </div>
                                      </div>
                                      <div class="form-product__col">
                                        <div class="form-item">
                                          <div class="form-item__title">&nbsp;</div>
                                                <button class="btn btn--icon-only btn--outline-red" type="button">
                                                        <svg class="icon icon--minus ">
                                                          <use xlink:href="static/images/icons.svg#icon--minus"></use>
                                                        </svg>
                                                </button>
                                        </div>
                                      </div>
                              </div>
                            </div>
                            <div class="form-product__img">
                              <div class="form-product__img-title">Предпросмотр подарка </div><img src="static/images/form-product__img.png" alt="product img">
                            </div>
                          </div>
                  </div>
                  <? endif; ?>
                </div>
                <div class="product-section__footer">
                        <button class="btn btn--outline-grey js-product-add" type="button">
                                <svg class="icon icon--plus-2 ">
                                  <use xlink:href="static/images/icons.svg#icon--plus-2"></use>
                                </svg><span class="btn__text">Добавить подарок</span>
                        </button>
                </div>
              </div>
            </div>
            <div class="form__block">
              <div class="form-item margin--b-24">
                <div class="form-item__title">Почта для уведомлений</div>
                      <div class="input">
                        <div class="input__body">
                          <input class="input__input" type="text" placeholder="example@email.com" name="email" value="<? if(isset($reviewer['user_mail'])): ?><?=$reviewer['user_mail']?><?endif;?>" required>
                        </div>
                      </div>
              </div>
              <div class="form-item margin--b-30">
                <div class="form-item__title">Маркетплейс</div>
                      <div class="select">
                      <div class="placeholder">
                        <? if(isset($marcetplace['marcetplace_cut'])): ?>
                          <span style="text-transform: uppercase;" ><?=$marcetplace['marcetplace_cut'] ?></span>
                          <? else: ?>
                            Выберите маркетплейс
                        <?endif;?></span></div>
                        <ul>
                          <? foreach($marcetplaces as $mp): ?>
                            <li data-value="<?= $mp['marcetplace_cut'];?>"><span style="text-transform: uppercase;"><?= $mp['marcetplace_cut'];?></span></li>
                            <? endforeach; ?>
                        </ul>
                        <input type="hidden" requiered name="marketplace" value="
                        <? if(isset($marcetplace['marcetplace_cut'])): ?>
                          <?=$marcetplace['marcetplace_cut']?>
                          <? else: ?>
                            uk
                        <?endif;?>">
                      </div>
              </div><button class="btn btn--block"  type="submit"><span class="btn__text">Следующий шаг</span></button>
            </div>
          </form>
        </div>
      </div>