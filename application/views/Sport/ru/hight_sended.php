<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}
?>
    <div id="full-page">
        <header id="header">
            <img class="fluid-img header-img1 review-top-img1 header-img-extra cl" src='<?=$baseURL."/img/immmg1.png"?>' alt="image">
            <div class="header-container no-bottom no-bottom2">
                <div class="container">
                    <a href="<?=$index_url?>" class="logo">
                        <img src='<?=$baseURL."/img/logo2.svg"?>' class="fluid-img" alt="Logo">
                    </a>
                </div>
            </div>
            <img src='<?=$baseURL."/img/immmg2.png"?>' alt="" class="fluid-img header-img2 review-top-img2 cl">
        </header>
        <div class="review-page">
            <div class="container">
                <div class="main no-pad main-no-pad main-no-pad2">
                <div class="stars stars2">
                    <input disabled id="5" type="radio" <? if ($stars == 5) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="5">
                    <label disabled for="5"></label>
                    <input disabled id="4" type="radio" <? if ($stars == 4) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="4">
                    <label disabled for="4"></label>
                    <input disabled id="3" type="radio" <? if ($stars == 3) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="3">
                    <label disabled for="3"></label>
                    <input disabled id="2" type="radio" <? if ($stars == 2) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="2">
                    <label disabled for="2"></label>
                    <input disabled id="1" type="radio" <? if ($stars == 1) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="1">
                    <label disabled for="1"></label>
                    <input type="hidden" name="stars" value="<?=$stars?>">
                </div>
                    <h1 class="main-title main-title-extra main-title-extra666">
                        Спасибо за отзыв о нашем продукте!
                    </h1>
                    <p class="main-desc main-desc-extra review-extra-title review-extra-title-extra cld cld2">
                        Пожалуйста, напишите честный отзыв - будь то 5-звездочный или 1-звездочный отзыв, он очень ценен
                        для других клиентов
                        Amazon и разработки наших продуктов.
                    </p>
                </div>
                <div class="thanks-container">
                    <h1 class="main-title main-title-extra">
                        Что ожидать дальше?
                    </h1>
                    <div class="thanks-text thanks-text111">
                        <span>Шаг 1.</span>
                        Прикрепите ссылку или скриншот на оставленный Вами отзыв
                    </div>
                    <img class="vekktor" src='<?=$baseURL."/img/Vector.png"?>' alt="">
                    <div class="thanks-text thanks-text222">Мы получили подтверждение</div>
                    <a href="<?=$form_link?>" class="send-again">отправить еще раз</a><br /><br />
                    <div class="thanks-text">
                        <span>Шаг 2. </span>
                        Мы проверим указанный вами идентификатор заказа, чтобы подтвердить покупку и отзыв. Если что-то
                        не так, мы
                        свяжемся с вами по электронной почте.
                    </div><br /><br />
                    <div class="thanks-text">
                        <span>Шаг 3 . Увеличенный срок доставки: </span>
                        из-за COVID-19 доставка вашего подарка может занять до 30-35 рабочих дней. Приносим
                        извинения за неудобства и принимаем все необходимые меры для разрешения этой ситуации.
                    </div>
                </div>
                <p class="main-desc main-desc-extra review-txt review-txt444">У наиболее ценных для сообщества отзывов
                    есть 3 общие черты:</p>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Напишите хотя бы 2 предложения:</span> короткие обзоры, в
                        которых говорится только «Мне это нравится» или «Я ненавижу», не
                        очень полезны для других клиентов. Напишите, пожалуйста, пару предложений, объясняющих, что вам
                        понравилось или не
                        понравилось в продукте.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Включите одно или несколько изображений:</span> Да, мы знаем,
                        что это клише, но изображение действительно стоит тысячи слов.
                        Даже если это просто быстрый снимок с телефона, он может помочь другим клиентам понять, что они
                        покупают и как выглядит
                        продукт.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Будьте честны:</span> мы не любим фальшивые, необъективные
                        отзывы. Так что самое главное, пожалуйста, оставляйте честные
                        отзывы.</span>
                </div>
            </div>
            <img src='<?=$baseURL."/img/immmg3.png"?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>