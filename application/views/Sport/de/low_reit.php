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
                            Überprüfen Sie unser Produkt, um Ihr 100% kostenloses Produkt zu erhalten!
                        </h1>
                        <p class="main-desc main-desc-extra review-extra-title cld2 cld3">Bitte schreiben Sie eine ehrliche
                            Bewertung - ob es sich um eine 5-Sterne- oder eine 1-Sterne-Bewertung handelt, Ihr
                            Feedback ist für alle anderen Amazon-Kunden und für unsere Produktentwicklung sehr wertvoll.
                        </p>
                    </div>
                    <textarea required name="low_review" id="review-textarea" placeholder="Bitte schreiben Sie hier Ihr Feedback." cols="30" rows="10"></textarea><br />
                    <!--                    <button class="review-btn">Teilen die Bewertung</button>-->
                    <button type="submit" class="review-btn">Teilen die Bewertung</button>
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
                <p class="main-desc main-desc-extra review-txt">Die wertvollsten Bewertungen für die Community haben
                    zwei Gemeinsamkeiten:</p>
                <div class="review-txt-container d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt">Schreiben Sie mindestens 2 Sätze: Kurze Bewertungen, die nur Dinge
                        wie "Ich liebe es" oder "Ich hasse es" sagen, sind
                        für andere Kunden nicht sehr nützlich. Bitte schreiben Sie ein paar Sätze, in denen erklärt
                        wird, was Ihnen an dem
                        Produkt gefallen oder nicht gefallen hat.</span>
                </div>
                <div class="review-txt-container d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt">​​Seien Sie ehrlich: Wir mögen keine gefälschten, voreingenommenen
                        Bewertungen. Am wichtigsten ist also, dass Sie Ihre
                        Bewertung ehrlich halten.</span>
                </div>
            </div>
            <img src='<?=$baseURL."/img/5.png"?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>
