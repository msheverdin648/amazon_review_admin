<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}?>
<header class="review-header" style="display: block;">
    <a href="<?=$index_url?>">
        <img src='<?=$baseURL."/img/logo.svg"?>' alt="">
    </a>
</header>
<main class="review-product">
    <section class="container">
        <div class="step" >
            <form action="<?=$form_link?>" method="POST" class="feedback-textarea">
                <div class="stars">
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
                <input type="hidden" name="language" value="">
            </form>
        </div>
    </section>
</main>