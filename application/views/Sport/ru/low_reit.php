<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}
?>
    <div id="full-page">
        <header id="header">
            <img class="fluid-img header-img1 review-top-img1 header-img-extra cl" src='<?=$baseURL."/img/llll.png"?>' alt="image">
            <div class="header-container no-bottom">
                <div class="container">
                    <a href="<?=$index_url?>" class="logo">
                        <img src='<?=$baseURL."/img/logo2.svg"?>' class="fluid-img" alt="Logo">
                    </a>
                </div>
            </div>
            <img src='<?=$baseURL."/img/ddd.png"?>' alt="" class="fluid-img header-img2 review-top-img2 cl">
        </header>
        <div class="review-page">
            <div class="container review-container">
                <div class="main no-pad main-no-pad">
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
                        <input type="hidden" name="star" value="<?=$stars?>">
                    </div>
                    <h1 class="main-title main-title-extra main-title2 title-extra-style2">
                        Напишите отзыв о нашем продукте, чтобы получить 100% бесплатный продукт!
                    </h1>
                    <p class="main-desc main-desc-extra review-extra-title cld2 cld3">Пожалуйста, напишите честный отзыв
                        - ваш отзыв очень важен для всех других клиентов Amazon и для развития нашего
                        продукта, будь то 5 или 1 звезда.
                    </p>
                </div>
                    <textarea required name="low_review" id="review-textarea" placeholder="Пожалуйста, напишите свой отзыв здесь."
                        cols="30" rows="10"></textarea><br />
                    <button type="submit" class="review-btn">Поделиться отзывом</button>
                </form>
                <p class="main-desc main-desc-extra review-txt">У наиболее ценных для сообщества отзывов есть две общие
                    черты:</p>
                <div class="review-txt-container d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt">Напишите хотя бы 2 предложения: короткие коментарии, в котором
                        говорится только «Мне это нравится» или «Я ненавижу», не
                        очень полезны для других клиентов. Напишите, пожалуйста, пару предложений, объясняющих, что вам
                        понравилось или не
                        понравилось в продукте.</span>
                </div>
                <div class="review-txt-container d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt">​​Будьте честны: мы не любим фальшивые, необъективные отзывы. Так что
                        самое главное, пожалуйста, оставляйте честные
                        отзывы.</span>
                </div>
            </div>
            <img src='<?=$baseURL."/img/5.png"?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>
