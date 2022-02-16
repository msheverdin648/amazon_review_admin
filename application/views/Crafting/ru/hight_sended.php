<? if (isset($route_lang)) {
    $form_link = '/' . $reviewer['opinion'] . '-' . $route_lang . '/review/' . $stars;
} else {
    $form_link = '/' . $reviewer['opinion'] . '/review/' . $stars;
} ?>
<header class="review-header" style="display: block;">
    <a href="<?=$index_url?>">
        <img src='<?=$baseURL."/img/logo.svg"?>' alt="">
    </a>
</header>
<main class="review-product">
    <section class="container">
        <div class="step step-3">
            <span id="asin" style="display: none;"><?= $product['asin'] ?></span>
            <span id="amazon-url" style="display: none;">www.amazon<?= $_COOKIE['marketplace_link'] ?></span>
            <p class="title">Спасибо за отзыв о нашем продукте!</p>
            <p>Пожалуйста, напишите честный отзыв - будь то 5-звездочный или 1-звездочный отзыв, он очень ценен для других клиентов Amazon и разработки наших продуктов. </p>
            <p class="under">Что ожидать дальше?</p>
            <p class="step-desc"><b class="future">Шаг 1.</b> Прикрепите ссылку или скриншот на оставленный Вами отзыв</p>

            
            <div class="">
                <div class="link-file-success">
                    <img width="64px" src='<?= $baseURL . "/img/check.svg" ?>' alt="">
                    <p>Мы получили подтверждение</p>
                    <a href="<?= $form_link ?>" class="js-again">отправить еще раз</a>
                </div>
            </div>


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
    </section>
</main>