<? if (isset($route_lang)) {
    $form_link = '/' . $reviewer['opinion'] . '-' . $route_lang . '/review/' . $stars;
} else {
    $form_link = '/' . $reviewer['opinion'] . '/review/' . $stars;
} ?>
<div class="full-page">
    <img src='<?= $baseURL . "/img/Group68.png" ?>' alt="" class="img1 hide-img2">
    <img src='<?= $baseURL . "/img/Group69.png" ?>' alt="" class="img2 hide-img2">
    
        <div class="page3">
            <div class="logo2">
                <a href="<?=$index_url?>"><img src='<?= $baseURL . "/img/logo.svg" ?>' width="349px" alt="Logo" class="logo-img2 img-fluid"></a>
            </div>
            <div class="stars stars2">
                <input disabled id="star-5" type="radio" <? if ($stars == 5) {
                                                                echo 'checked';
                                                            } ?> name="star" value="5">
                <label disabled for="star-5"></label>
                <input disabled id="star-4" type="radio" <? if ($stars == 4) {
                                                                echo 'checked';
                                                            } ?> name="star" value="4">
                <label disabled for="star-4"></label>
                <input disabled id="star-3" type="radio" <? if ($stars == 3) {
                                                                echo 'checked';
                                                            } ?> name="star" value="3">
                <label disabled for="star-3"></label>
                <input disabled id="star-2" type="radio" <? if ($stars == 2) {
                                                                echo 'checked';
                                                            } ?> name="star" value="2">
                <label disabled for="star-2"></label>
                <input disabled id="star-1" type="radio" <? if ($stars == 1) {
                                                                echo 'checked';
                                                            } ?> name="star" value="1">
                <label disabled for="star-1"></label>
                <input type="hidden" name="stars" value="<?= $stars ?>">
            </div>
            <h2 class="title3 title5">Спасибо за отзыв о нашем продукте!</h2>
            <p class="text4">
                Пожалуйста, напишите честный отзыв - будь то 5-звездочный или 1-звездочный отзыв, он очень ценен для других клиентов Amazon и разработки наших продуктов.
            </p>
            <h2 class="title3 title5 title-line">Что ожидать дальше?</h2>
            <div class="title3 title5 step-title">Шаг 1.<span> Прикрепите ссылку или скриншот на оставленный Вами отзыв</span></div>
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
            <div class="d-flex choose-container">
                <input name='link' type="text" class="feedback feedback2" placeholder="Введите ссылку на отзыв">
                <button type="submit" name='choice' value="link" class="feedback-btn feedback-btn2">Отправить ссылку</button>
                <!-- <a href="index9.html" class="feedback-btn feedback-btn2">Отправить ссылку</a> -->
            </div>
            </form>
    <div class="text-or">или</div>
    <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
        <div class="d-flex choose-container">
            <div class="d-flex">
                <label class="choose d-flex" for="choose">
                    <img class="choose-img" src='<?= $baseURL . "/img/choose.png" ?>' alt="">
                    <input name="file" type="file" id="choose" class="choose-file">
                    <span>Выбрать скриншот</span>
                </label>
            </div>
            <button type="submit" name=choice value="screen" class="feedback-btn feedback-btn2 feedback-btn3">Отправить скриншот</button>
            <!-- <a href="index9.html" class="feedback-btn feedback-btn2 feedback-btn3">Отправить скриншот</a> -->
        </div>
    </form>

    <br />
    <div class="title3 title5 step-title">Шаг 2.<span> Мы проверим указанный вами идентификатор заказа, чтобы подтвердить покупку и отзыв. Если что-то не так, мы свяжемся с вами по электронной почте.</span>
    </div><br />
    <div class="title3 title5 step-title">Шаг 3 . Увеличенный срок доставки:
        <span> из-за COVID-19 доставка вашего подарка может занять до 30-35 рабочих дней. Приносим извинения за неудобства и принимаем все необходимые меры для разрешения этой ситуации.
        </span>
    </div>
    <div class="content-title5">У наиболее ценных для сообщества отзывов есть 3 общие черты:</div>
    <div class="d-flex align-start just-start vektor-txt">
        <div>
            <img src='<?= $baseURL . "/img/Vector.png" ?>' alt="" class="vektor-img">
        </div>
        <div class="texts"><span>Напишите хотя бы 2 предложения:</span> короткие обзоры, в которых говорится только «Мне это нравится» или «Я ненавижу», не очень полезны для других клиентов. Напишите, пожалуйста, пару предложений, объясняющих, что вам понравилось
            или не понравилось в продукте.
        </div>
    </div>
    <div class="d-flex align-start just-start vektor-txt">
        <div>
            <img src='<?= $baseURL . "/img/Vector.png" ?>' alt="" class="vektor-img">
        </div>
        <div class="texts"><span>Включите одно или несколько изображений: </span> Да, мы знаем, что это клише, но изображение действительно стоит тысячи слов. Даже если это просто быстрый снимок с телефона, он может помочь другим клиентам понять, что они покупают
            и как выглядит продукт.
        </div>
    </div>
    <div class="d-flex align-start just-start vektor-txt">
        <div>
            <img src='<?= $baseURL . "/img/Vector.png" ?>' alt="" class="vektor-img">
        </div>
        <div class="texts"><span>Будьте честны: </span> мы не любим фальшивые, необъективные отзывы. Так что самое главное, пожалуйста, оставляйте честные отзывы.
        </div>
    </div>
</div>
</div>