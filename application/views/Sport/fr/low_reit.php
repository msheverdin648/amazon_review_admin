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
                        Donnez votre avis sur notre produit pour obtenir un produit 100% gratuit!
                    </h1>
                    <p class="main-desc main-desc-extra review-extra-title cld2 cld3">S'il vous plaît écrivez des
                        commentaires honnêtes - vos commentaires sont très importants pour tous les autres clients
                        Amazon et pour le développement de notre produit, qu'il soit 5 ou 1 étoile.
                    </p>
                </div>
                    <textarea required name="low_review" id="review-textarea"
                        placeholder="Veuillez écrire votre avis ici s'il vous plaît" cols="30"
                        rows="10"></textarea><br />
                   <button type="submit" class="review-btn">Partager un avis</button>
                   <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
                <p class="main-desc main-desc-extra review-txt">Les communautés les plus précieuses ont deux
                    caractéristiques communes :</p>
                <div class="review-txt-container d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt">Rédigez au moins 2 phrases: de courtes critiques qui ne disent que
                        des choses comme "Je l'aime" ou "Je déteste" ne sont
                        pas très utiles pour les autres clients. Veuillez écrire quelques phrases expliquant ce que vous
                        avez aimé ou non dans
                        le produit.</span>
                </div>
                <div class="review-txt-container d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt">​​Soyez honnête: nous n'aimons pas les fausses critiques. Donc, le
                        plus important, s'il vous plaît laisser des
                        commentaires honnêtes.</span>
                </div>
            </div>
            <img src='<?=$baseURL."/img/5.png"?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>
