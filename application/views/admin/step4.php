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
                    <div class="step-list__item step-list__item--done">
                            <div class="step step--done">
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
                    <div class="step-list__item step-list__item--done">
                            <div class="step step--done">
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
                    <div class="step-list__item--active">
                            <div class="step--active">
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
          <form action="/admin/step4" method="POST">
            <div class="liner">
              <div class="liner__design">
                      <div class="liner-design liner-design--lg">
                        <div class="liner-design__header">
                          <h1 class="h1 h1--lite">Выберите дизайн сайта</h1>
                        </div>
                        <div class="liner-design__list">
                          <?if(!empty($reviewer)):?>
                            <? foreach($designes as $key => $design): ?>
                            <div class="liner-design__item  ">
                                  <div class=" _design liner-design-item <? if($reviewer['id_design']==$key+1): ?>liner-design-item--active<? endif; ?>"><img src="/static/images/design/<?= $design['name_design']?>" alt="design">
                                          <div class="checkbox">
                                            <label>
                                              <input value="<?= $design['name_design']?>" name="design" type="checkbox" <? if($reviewer['id_design']==$key+1): ?>checked<? endif; ?>><span></span>
                                              <div class="checkbox__text"></div>
                                            </label>
                                          </div>
                                  </div>
                          </div>
                          <? endforeach; ?>
                            <? else: ?>
                              <? foreach($designes as $key => $design): ?>
                            <div class="liner-design__item  ">
                                  <div class=" _design liner-design-item <? if($key==0): ?>liner-design-item--active<? endif; ?>"><img src="/static/images/design/<?= $design['name_design']?>" alt="design">
                                          <div class="checkbox">
                                            <label>
                                              <input value="<?= $design['name_design']?>" name="design" type="checkbox" <? if($key==0): ?>checked<? endif; ?>><span></span>
                                              <div class="checkbox__text"></div>
                                            </label>
                                          </div>
                                  </div>
                          </div>
                          <? endforeach; ?>
                            <? endif; ?>
                          <div class="liner-design__item">
                                  <div class="liner-design-item"><img src="/static/images/liner-design-item__img-00.png" alt="design">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox"><span></span>
                                              <div class="checkbox__text"></div>
                                            </label>
                                          </div>
                                  </div>
                          </div>
                          <div class="liner-design__item">
                                  <div class="liner-design-item"><img src="/static/images/liner-design-item__img-00.png" alt="design">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox"><span></span>
                                              <div class="checkbox__text"></div>
                                            </label>
                                          </div>
                                  </div>
                          </div>
                          <div class="liner-design__item">
                                  <div class="liner-design-item"><img src="/static/images/liner-design-item__img-00.png" alt="design">
                                          <div class="checkbox">
                                            <label>
                                              <input type="checkbox"><span></span>
                                              <div class="checkbox__text"></div>
                                            </label>
                                          </div>
                                  </div>
                          </div>
                        </div>
                      </div>
              </div>
              <div class="liner__view">
                <div class="liner-site-view">
                  <div class="liner-site-view__header">
                    <h1 class="h1 h1--lite">Просмотр дизайна</h1>
                  </div>
                  <div class="liner-site-view__img">
                    <img src="<?
                      if(!empty($reviewer)){
                        echo '/static/images/design/'.$designes[$reviewer['id_design']-1]['name_design'];
                      }else{
                        echo '/static/images/design/'.$designes[0]['name_design'];
                      }
                    ?>" alt="design" id="design">
                </div>  
                  <div class="liner-site-view__footer"><button class="btn btn--block" type="submit" role="button">Создать страницу</button>
                    <div class="liner-site-view__add">
                        <div class="checkbox checkbox--text-top">
                          <label>
                            <input name="checked" type="checkbox" checked><span></span>
                            <div class="checkbox__text">Добавить дополнительный язык для названий товаров и подарков</div>
                          </label>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <script src="/static/js/form.js"></script>