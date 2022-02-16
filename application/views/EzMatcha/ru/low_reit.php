<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}?>
    <div class="full-page">
        <div class="page2">
            <div class="logo2">
                <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' width="349px" alt="Logo" class="logo-img2 img-fluid"></a>
            </div>
            <form action="<?=$form_link?>" method="POST" class="feedback-textarea">
                <div class="stars stars2">
                    <input disabled id="star-5" type="radio" <? if ($stars == 5) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="5">
                    <label disabled for="star-5"></label>
                    <input disabled id="star-4" type="radio" <? if ($stars == 4) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="4">
                    <label disabled for="star-4"></label>
                    <input disabled id="star-3" type="radio" <? if ($stars== 3) {
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
                    <input type="hidden" name="star" value="<?= $stars ?>">
                </div>
                <h2 class="title3 title4">Напишите отзыв о нашем продукте, чтобы получить 100% бесплатный продукт!</h2>
                <p class="text4">
                    Пожалуйста, напишите честный отзыв - ваш отзыв очень важен для всех других клиентов Amazon и для развития нашего продукта, будь то 5 или 1 звезда.
                </p>
                <textarea required name="low_review" id="feedback" placeholder="Пожалуйста, напишите свой отзыв здесь."></textarea>
                <button type="submit" class="feedback-btn">Поделиться отзывом</button>
                <!-- <a href="index10.html" class="feedback-btn">Поделиться отзывом</a> -->
                <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">

            </form>
            <h4 class="content-title4">У наиболее ценных для сообщества отзывов есть две общие черты:</h4>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Напишите хотя бы 2 предложения:</span> короткие коментарии, в котором говорится только «Мне это нравится» или «Я ненавижу», не очень полезны для других клиентов. Напишите, пожалуйста, пару предложений, объясняющих, что вам понравилось
                    или не понравилось в продукте.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts">
                    <span>Будьте честны:</span> мы не любим фальшивые, необъективные отзывы. Так что самое главное, пожалуйста, оставляйте честные отзывы.
                </div>
            </div>
        </div>
        <img src='<?=$baseURL."/img/goup67.png"?>' alt="" class="last-img img-fluid">
    </div>
