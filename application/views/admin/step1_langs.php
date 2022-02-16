<?$link = $domain['d_name'].'/'.$_SESSION['opinion']; ?>
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
                                <div class="step__desc">Языки</div>
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
                                <div class="step__desc">Товары, подарки</div>
                              </div>
                            </div>
                      <div class="step-list__divider"></div>
                    </div>
                  </div>
          </div>
          <h1 class="h1 margin--b-36">Добавление языков для ссылки <?=$link?></h1>
          <?if(isset($_GET['message'])): ?><h1 class="h1 margin--b-36" style="color: red;"><?=$_GET['message']?></h1> <?endif;?>
          <form class="form" action="/admin/step1_langs" method="post">
            <div class="form__block--m">
              <div class="margin--b-36">
                      <div class="language-item">
                        <div class="language-item__number">1</div>
                        <div class="language-item__body">
                          <div class="language-item__row">
                            <div class="language-item__col">
                              <div class="form-item">
                                <div class="form-item__title">Название языка</div>
                                      <div class="input language-item__title">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="Русский">
                                        </div>
                                      </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">&nbsp;</div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox"  name="lang[]" value="ru" <? if(isset($langs_cut['ru'])): ?> checked <? endif; ?>><span></span>
                                          <div class="checkbox__text">Активировать</div>
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                          <div class="language-item__row">
                            <div class="form-item">
                              <div class="form-item__title">id для URL /link-id и <a href="#">определения по браузеру</a></div>
                              <div class="language-item__block">
                                      <div class="input input--disabled">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="ru" disabled>
                                        </div>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="name1" value="ru" <? if($default_lang=='ru'): ?>checked<?endif;?>><span class="radio__text"></span>Язык по умолчанию
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
              <div class="margin--b-36">
                      <div class="language-item">
                        <div class="language-item__number">2</div>
                        <div class="language-item__body">
                          <div class="language-item__row">
                            <div class="language-item__col">
                              <div class="form-item">
                                <div class="form-item__title">Название языка</div>
                                      <div class="input language-item__title">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="English">
                                        </div>
                                      </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">&nbsp;</div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="lang[]" value="en" <? if(isset($langs_cut['en'])): ?> checked <? endif; ?>><span></span>
                                          <div class="checkbox__text">Активировать</div>
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                          <div class="language-item__row">
                            <div class="form-item">
                              <div class="form-item__title">id для URL /link-id и определения по браузеру</div>
                              <div class="language-item__block">
                                      <div class="input input--disabled">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="en" disabled>
                                        </div>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="name1" value="en" <? if($default_lang=='en'): ?>checked<?endif;?>><span class="radio__text"></span>Язык по умолчанию
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
              <div class="margin--b-36">
                      <div class="language-item">
                        <div class="language-item__number">3</div>
                        <div class="language-item__body">
                          <div class="language-item__row">
                            <div class="language-item__col">
                              <div class="form-item">
                                <div class="form-item__title">Название языка</div>
                                      <div class="input language-item__title">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="Espana">
                                        </div>
                                      </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">&nbsp;</div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="lang[]" value="es" <? if(isset($langs_cut['es'])): ?> checked <? endif; ?>><span></span>
                                          <div class="checkbox__text">Активировать</div>
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                          <div class="language-item__row">
                            <div class="form-item">
                              <div class="form-item__title">id для URL /link-id и определения по браузеру</div>
                              <div class="language-item__block">
                                      <div class="input input--disabled">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="es" disabled>
                                        </div>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="name1" value="es" <? if($default_lang=='es'): ?>checked<?endif;?>><span class="radio__text"></span>Язык по умолчанию
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
              <div class="margin--b-36">
                      <div class="language-item">
                        <div class="language-item__number">4</div>
                        <div class="language-item__body">
                          <div class="language-item__row">
                            <div class="language-item__col">
                              <div class="form-item">
                                <div class="form-item__title">Название языка</div>
                                      <div class="input language-item__title">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="Germany">
                                        </div>
                                      </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">&nbsp;</div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="lang[]" value="de" <? if(isset($langs_cut['de'])): ?> checked <? endif; ?>><span></span>
                                          <div class="checkbox__text">Активировать</div>
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                          <div class="language-item__row">
                            <div class="form-item">
                              <div class="form-item__title">id для URL /link-id и определения по браузеру</div>
                              <div class="language-item__block">
                                      <div class="input input--disabled">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="de" disabled>
                                        </div>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="name1" value="de" <? if($default_lang=='de'): ?>checked<?endif;?>><span class="radio__text"></span>Язык по умолчанию
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
              <div class="margin--b-36">
                      <div class="language-item">
                        <div class="language-item__number">5</div>
                        <div class="language-item__body">
                          <div class="language-item__row">
                            <div class="language-item__col">
                              <div class="form-item">
                                <div class="form-item__title">Название языка</div>
                                      <div class="input language-item__title">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="Italy">
                                        </div>
                                      </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">&nbsp;</div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="lang[]" value="it" <? if(isset($langs_cut['it'])): ?> checked <? endif; ?>><span></span>
                                          <div class="checkbox__text">Активировать</div>
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                          <div class="language-item__row">
                            <div class="form-item">
                              <div class="form-item__title">id для URL /link-id и определения по браузеру</div>
                              <div class="language-item__block">
                                      <div class="input input--disabled">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="it" disabled>
                                        </div>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="name1" value="it" <? if($default_lang=='it'): ?>checked<?endif;?>><span class="radio__text"></span>Язык по умолчанию
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
              <div class="margin--b-45">
                      <div class="language-item">
                        <div class="language-item__number">6</div>
                        <div class="language-item__body">
                          <div class="language-item__row">
                            <div class="language-item__col">
                              <div class="form-item">
                                <div class="form-item__title">Название языка</div>
                                      <div class="input language-item__title">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="France">
                                        </div>
                                      </div>
                              </div>
                              <div class="form-item">
                                <div class="form-item__title">&nbsp;</div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="lang[]" value="fr" <? if(isset($langs_cut['fr'])): ?> checked <? endif; ?>><span></span>
                                          <div class="checkbox__text">Активировать</div>
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                          <div class="language-item__row">
                            <div class="form-item">
                              <div class="form-item__title">id для URL /link-id и определения по браузеру</div>
                              <div class="language-item__block">
                                      <div class="input input--disabled">
                                        <div class="input__body">
                                          <input class="input__input" type="text" placeholder="fr" disabled>
                                        </div>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" name="name1" value="fr" <? if($default_lang=='fr'): ?>checked<?endif;?>><span class="radio__text"></span>Язык по умолчанию
                                        </label>
                                      </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
            <div class="form__block--xs"><button class="btn btn--block" type="submit" role="button"><span class="btn__text">Следующий шаг</span></button>
            </div>
          </form>
        </div>
      </div>
      <script src="/static/js/form.js"></script>