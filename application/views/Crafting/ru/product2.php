    <main class="review-product">
        <section class="container">
            <div class="step step-1" <? if (!isset($_GET['stars'])) : ?>style="display:block;" <? endif; ?>>
                <p class="title step-1">Как бы вы хотели оценить этот товар?</p>
                <div class="stars">
                <input id="star-5" type="radio" name="star" value="5">
                     <label for="star-5"></label>
                     <input id="star-4" type="radio" name="star" value="4">
                     <label for="star-4"></label>
                     <input id="star-3" type="radio" name="star" value="3">
                     <label for="star-3"></label>
                     <input id="star-2" type="radio" name="star" value="2">
                     <label for="star-2"></label>
                     <input id="star-1" type="radio" name="star" value="1">
                     <label for="star-1"></label>
                    <!-- <input type="hidden" name="star" value="<?= $_GET['stars'] ?>"> -->
                </div>
                <img class="product-img" src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                <p><b>* Пожалуйста, отправьте честный отзыв, чтобы получить БЕСПЛАТНЫЙ продукт! <br>* НЕТ кредитной карты или способа оплаты, просто ваше полезное мнение.</b></p>
            </div>
            <div class="step step-2" <? if (isset($_GET['stars']) && (!isset($_GET['s'])) && ($_GET['stars'] == 'star-1' || $_GET['stars'] == 'star-2' || $_GET['stars'] == 'star-3')) : ?>style="display:block;" <? endif; ?>>
                <form action="../../views/reviewer_euro/send_low_reit.php" method="POST" class="feedback-textarea">
                    <div class="stars">
                        <input disabled id="star-5" type="radio" <? if ($_GET['stars'] == 'star-5') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="5">
                        <label disabled for="star-5"></label>
                        <input disabled id="star-4" type="radio" <? if ($_GET['stars'] == 'star-4') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="4">
                        <label disabled for="star-4"></label>
                        <input disabled id="star-3" type="radio" <? if ($_GET['stars'] == 'star-3') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="3">
                        <label disabled for="star-3"></label>
                        <input disabled id="star-2" type="radio" <? if ($_GET['stars'] == 'star-2') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="2">
                        <label disabled for="star-2"></label>
                        <input disabled id="star-1" type="radio" <? if ($_GET['stars'] == 'star-1') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="1">
                        <label disabled for="star-1"></label>
                        <input type="hidden" name="stars" value="<?=$_GET['stars'] ?>">
                    </div>
                    <p class="title">Напишите отзыв о нашем продукте, чтобы получить 100% бесплатный продукт!</p>
                    <p>Пожалуйста, напишите честный отзыв - ваш отзыв очень важен для всех других клиентов Amazon и для развития нашего продукта, будь то 5 или 1 звезда.</p>
                    <textarea name="low_review" required placeholder="Пожалуйста, напишите свой отзыв здесь."></textarea>
                    <button class="btn-blue btn-block " type="submit">Поделиться отзывом</button>
                    <div class="review-bottom">
                        <p>У наиболее ценных для сообщества отзывов есть две общие черты:</p>
                        <ul class="check">
                            <li><b class="future">Напишите хотя бы 2 предложения:</b> короткие коментарии, в котором говорится только «Мне это нравится» или «Я ненавижу», не очень полезны для других клиентов. Напишите, пожалуйста, пару предложений, объясняющих, что вам понравилось или не понравилось в продукте.</li>
                            <li><b class="future">Будьте честны:</b> мы не любим фальшивые, необъективные отзывы. Так что самое главное, пожалуйста, оставляйте честные отзывы.</li>
                        </ul>
                    </div>
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
            </div>
            <div class="step step-3" <? if (isset($_GET['stars']) && ($_GET['stars'] == 'star-4' || $_GET['stars'] == 'star-5')) : ?>style="display:block;" <? endif; ?>>
                <span id="asin" style="display: none;"><?=$product['asin']?></span>
                <span id="amazon-url" style="display: none;">www.amazon<?=$_COOKIE['marketplace_link']?></span>
                <p class="title">Спасибо за отзыв о нашем продукте!</p>
                <p>Пожалуйста, напишите честный отзыв - будь то 5-звездочный или 1-звездочный отзыв, он очень ценен для других клиентов Amazon и разработки наших продуктов. </p>
                <p class="under">Что ожидать дальше?</p>
                <p class="step-desc"><b class="future">Шаг 1.</b> Прикрепите ссылку или скриншот на оставленный Вами отзыв</p>
                <form action="../../views/reviewer_euro/send_hight_reit.php" method="POST" class="feedback-textarea" enctype="multipart/form-data" >
                    <div class="stars" style="<? if(isset($_GET['s'])):?>display: none;<?endif;?>">
                        <input id="star-5" type="radio" <? if ($_GET['stars'] == 'star-5') {
                                                            echo 'checked';
                                                        } ?> name="star" value="5">
                        <input disabled id="star-5" type="radio" <? if ($_GET['stars'] == 'star-5') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="5">
                        <label disabled for="star-5"></label>
                        <input disabled id="star-4" type="radio" <? if ($_GET['stars'] == 'star-4') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="4">
                        <label disabled for="star-4"></label>
                        <input disabled id="star-3" type="radio" <? if ($_GET['stars'] == 'star-3') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="3">
                        <label disabled for="star-3"></label>
                        <input disabled id="star-2" type="radio" <? if ($_GET['stars'] == 'star-2') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="2">
                        <label disabled for="star-2"></label>
                        <input disabled id="star-1" type="radio" <? if ($_GET['stars'] == 'star-1') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="1">
                        <label disabled for="star-1"></label>
                        <input type="hidden" name="stars" value="<?= $_GET['stars'] ?>">
                    </div>
                    <div class="">
                        <div class="link-file " style="<? if(isset($_GET['s'])):?>display: none;<?endif;?> ">
                            <div>
                                <input type="text" name="link" placeholder="Введите ссылку на отзыв">
                                <button class="btn-blue js-success" value="link" name="choice" type="submit">Отправить ссылку</button>
                            </div>
                            <div class="or">или</div>
                            <div class="input-file">
                                <div class="file-name">
                                    <input type="file" name="file">
                                    <span>Выбрать скриншот</span>
                                </div>
                                <button class="btn-blue js-success" value="screen" name="choice" type="submit">Отправить скриншот</button>
                            </div>
                        </div>
                        <div class="link-file-success" style="<? if(isset($_GET['s']) && $_GET['s']=='hight'):?>display: block;<?endif;?>">
                            <img width="64px" src="../img/check.svg" alt="">
                            <p>Мы получили подтверждение</p>
                            <a href="product.php?stars=<?=$_GET['stars']?>" class="js-again">отправить еще раз</a>
                        </div>
                    </div>
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
                <p class="step-desc"><b class="future">Шаг 2.</b> Мы проверим указанный вами идентификатор заказа, чтобы подтвердить покупку и отзыв. Если что-то не так, мы свяжемся с вами по электронной почте.</p>
                <br>
                <p class="step-desc"><b class="future">Шаг 3 . Увеличенный срок доставки:</b> из-за COVID-19 доставка вашего подарка может занять до 30-35 рабочих дней. Приносим извинения за неудобства и принимаем все необходимые меры для разрешения этой ситуации.</p>

                <div class="review-bottom">
                    <p>У наиболее ценных для сообщества отзывов есть 3 общие черты:</p>
                    <ul class="check">
                        <li><b class="future">Напишите хотя бы 2 предложения:</b> короткие обзоры, в которых говорится только «Мне это нравится» или «Я ненавижу», не очень полезны для других клиентов. Напишите, пожалуйста, пару предложений, объясняющих, что вам понравилось или не понравилось в продукте.</li>
                        <li><b class="future">Включите одно или несколько изображений:</b> Да, мы знаем, что это клише, но изображение действительно стоит тысячи слов. Даже если это просто быстрый снимок с телефона, он может помочь другим клиентам понять, что они покупают и как выглядит продукт.</li>
                        <li><b class="future">Будьте честны:</b> мы не любим фальшивые, необъективные отзывы. Так что самое главное, пожалуйста, оставляйте честные отзывы.</li>
                    </ul>
                </div>
            </div>
            <div class="step step-4" style="<? if(isset($_GET['s']) && $_GET['s']=='low'): ?>display: block;<? endif; ?>">
                <p class="thank-title">Спасибо!</p>
                <p class="title">Ваш отзыв опубликован!</p>
                <p class="under">Что ожидать дальше?</p>
                <p class="step-desc"><b class="future">Шаг 1.</b> Мы проверим указанный вами идентификатор заказа, чтобы подтвердить покупку. Если что-то не так, мы свяжемся с вами по электронной почте.</p>
                <p class="step-desc"><b class="future">Шаг 2.</b> Увеличенный срок доставки: из-за COVID-19 доставка вашего подарка может занять до 30-35 рабочих дней. Приносим извинения за неудобства и принимаем все необходимые меры для разрешения этой ситуации.</p>
                <p class="step-desc future"><b>Свяжитесь с нами в любое время по адресу <br><a href="mailto:support@eurodo.es">support@eurodo.es</a></b></p>
            </div>
        </section>
    </main>