

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
                <div class="step-list__item step-list__item--active">
                    <div class="step step--active">
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
        <form action="/admin/step3" method="post">
        <div class="liner">
            <div class="liner__design">
                <div class="liner-design">
                    <div class="liner-design__header">
                        <h1 class="h1 h1--lite">Выберите дизайн вкладыша</h1>
                    </div>
                    <div class="liner-design__list"><? if (!empty($reviewer)) : ?>
                            <? foreach ($designes as $key => $design) : ?>
                                <div class="liner-design__item">
                                    <div class="liner-design-item _desing <? if ($reviewer['id_input'] == $key + 1) : ?>liner-design-item--active<? endif; ?>">
                                        <img src="/static/images/flyers/front/<?= explode('.', $design['name_design'])[0] ?>.jpg?&qr=<?= $qr_path ?>" alt="design">
                                        <div class="checkbox ">
                                            <label>
                                                <input type="checkbox" <? if ($reviewer['id_input'] == $key + 1) : ?>checked<? endif; ?> name="input" value="<?= $design['name_design'] ?>"><span></span>
                                                <div class="checkbox__text"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        <? else : ?>
                            <? foreach ($designes as $key => $design) : ?>
                                <div class="liner-design__item">
                                    <div class="liner-design-item _desing  <? if ($key == 0) : ?>liner-design-item--active<? endif; ?>">
                                        <img src="/static/images/flyers/front/<?= explode('.', $design['name_design'])[0] ?>.jpg?&qr=<?= $qr_path ?>" alt="design">
                                        <div class="checkbox ">
                                            <label>
                                                <input type="checkbox" <? if ($key == 0) : ?>checked<? endif; ?> name="input" value="<?= $design['name_design'] ?>"><span></span>
                                                <div class="checkbox__text"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        <? endif; ?>
                        <div class="liner-design__item">
                            <div class="liner-design-item "><img src="/static/images/liner-design-item__img-00.png" alt="design">
                                <div class="checkbox ">
                                    <label>
                                        <input type="checkbox"><span></span>
                                        <div class="checkbox__text"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="liner-design__item">
                            <div class="liner-design-item "><img src="/static/images/liner-design-item__img-00.png" alt="design">
                                <div class="checkbox ">
                                    <label>
                                        <input type="checkbox"><span></span>
                                        <div class="checkbox__text"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="liner-design__item">
                            <div class="liner-design-item "><img src="/static/images/liner-design-item__img-00.png" alt="design">
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
                <div class="liner-view">
                    <div class="liner-view__header">
                        <h1 class="h1 h1--lite">Просмотр Вкладыша</h1>
                    </div>
                    <div class="liner-view__list">
                        <div class="liner-view__item "><img id='front' src="<?
                      if(!empty($reviewer)){
                        echo '/views/flyer_front.php?&img=/static/images/flyers/front/'.explode('.', $designes[$reviewer['id_input']-1]['name_design'])[0].".jpg&qr=".$qr_path;
                      }else{
                         echo '/views/flyer_front.php?&img=/static/images/flyers/front/'.explode('.', $designes[0]['name_design'])[0].".jpg&qr=".$qr_path; 
                      }
                    ?>" alt="design">
                            <div>Перед</div>
                        </div>
                        <div class="liner-view__item "><img id='back' src="<?
                      if(!empty($reviewer)){
                        echo '/views/flyer_back.php?&img=/static/images/flyers/back/'.explode('.', $designes[$reviewer['id_input']-1]['name_design'])[0].".jpg&qr=".$qr_path;
                      }else{
                          echo '/views/flyer_back.php?&img=/static/images/flyers/back/'.explode('.', $designes[0]['name_design'])[0].".jpg&qr=".$qr_path;
                      }
                    ?>" alt="design">
                            <div>Зад</div>
                        </div>
                    </div>
                    <div class="liner-view__download">
                        <button class="btn btn--outline-grey" type="button">
                            <svg class="icon icon--pdf ">
                                <use xlink:href="/static/images/icons.svg#icon--pdf"></use>
                            </svg><a class="btn__text" href="/views/download_zip.php" style="color: rgba(0, 0, 0, 0.85);">Скачать вкладыш</a>
                        </button>
                        <button class="btn btn--outline-grey" type="button">
                            <svg class="icon icon--qr ">
                                <use xlink:href="/static/images/icons.svg#icon--qr"></use>
                            </svg><a class="btn__text" href="<?= $qr_path ?>" download="" style="color: rgba(0, 0, 0, 0.85);">Скачать QR-код</a>
                        </button>
                    </div>
                    <div class="liner-view__footer"><button class="btn btn--block" type='submit'><span class="btn__text">Следующий шаг</span></button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<script src="/static/js/form.js"></script>