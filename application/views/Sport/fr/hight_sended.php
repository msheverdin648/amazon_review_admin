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
                        Merci pour les commentaires sur notre produit!
                    </h1>
                    <p class="main-desc main-desc-extra review-extra-title review-extra-title-extra cld cld2">Veuillez
                        écrire un avis honnête - qu'il s'agisse d'un avis 5 étoiles ou d'un avis 1 étoile, il est très
                        précieux pour
                        les autres clients d'Amazon et pour le développement de nos produits.
                    </p>
                </div>
                <div class="thanks-container">
                    <h1 class="main-title main-title-extra">
                        Voici à quoi vous attendre ensuite :
                    </h1>
                    <div class="thanks-text thanks-text111">
                        <span>Étape 1.</span>
                        Joignez le lien ou la capture d'écran à vos commentaires que vous avez laissé.
                    </div>
                    <img class="vekktor" src='<?=$baseURL."/img/Vector.png"?>' alt="">
                    <div class="thanks-text thanks-text222">Nous avons reçu la confirmation</div>
                    <a href="<?=$form_link?>" class="send-again">Envoyer à nouveau</a><br /><br />
                    <div class="thanks-text">
                        <span>Étape 2. </span>
                        Nous vérifierons l'identifiant de commande que vous avez spécifié pour confirmer l'achat et les
                        commentaires.
                        Si quelque chose ne va pas, nous vous contacterons par courriel.
                    </div><br /><br />
                    <div class="thanks-text">
                        <span>Étape 3. Délai de livraison important :</span>
                        En raison de la livraison Covid-19 de votre cadeau, vous pouvez prendre jusqu'à 30 à 35 jours
                        ouvrables. Nous nous excusons pour les inconvénients et acceptons toutes les mesures nécessaires
                        pour résoudre cette situation.
                    </div>
                </div>
                <p class="main-desc main-desc-extra review-txt review-txt444">Les communautés les plus précieuses ont
                    trois caractéristiques communes :</p>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Rédigez au moins 2 phrases:</span> de courtes critiques qui ne
                        disent que des choses comme "Je l'aime" ou "Je déteste" ne sont
                        pas très utiles pour les autres clients. Veuillez écrire quelques phrases expliquant ce que vous
                        avez aimé ou non dans
                        le produit.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Ajoutez une ou plusieurs images:</span> Oui, nous savons que
                        c'est cliché, mais l'image coûte vraiment des milliers de mots.
                        Même si c'est juste une photo rapide sur le téléphone, il peut aider les autres clients à
                        comprendre ce qu'ils achètent
                        et à quoi ressemble le produit.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Soyez honnête:</span> nous n'aimons pas les fausses critiques.
                        Donc, le plus important, s'il vous plaît laisser des
                        commentaires honnêtes.</span>
                </div>
            </div>
            <img src='<?=$baseURL."/img/immmg3.png"?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>
