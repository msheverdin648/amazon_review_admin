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
                        Recensisci il nostro prodotto per ricevere il tuo prodotto gratuito al 100%!
                    </h1>
                    <p class="main-desc main-desc-extra review-extra-title cld2 cld3">Per favore scrivi una recensione
                        onesta, sia che sia una recensione da 5 stelle che da 1 stella, la tua opinione è molto
                        importante per tutti gli altri clienti di Amazon e lo sviluppo del nostro prodotto.
                    </p>
                </div>
                    <textarea required name="low_review" id="review-textarea" placeholder="Per favore scrivi il tuo feedback qui."
                        cols="30" rows="10"></textarea><br />
                   <button type="submit" class="review-btn">Condividi la mia recensione</button>
                    <!-- <a href="index32_it.html" class="review-btn">Condividi la mia recensione</a> -->
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
                <p class="main-desc main-desc-extra review-txt">Le recensioni più utili per la community hanno due
                    caratteristiche in comune:</p>
                <div class="review-txt-container d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt">Scrivi almeno 2 frasi: le brevi recensioni che sono dicono "mi piace"
                        o "non mi piace" non sono molto utili agli altri
                        clienti. Per favore scrivi alcune frasi spiegando cosa ti è piaciuto e cosa non.</span>
                </div>
                <div class="review-txt-container d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt">Sii onesto: Non ci piacciono le recensioni false e piene di
                        pregiudizi. Quindi è molto importante che tu faccia una
                        recensione onesta.</span>
                </div>
            </div>
            <img src='<?=$baseURL."/img/5.png"?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>
