<? if (isset($route_lang)) {
    $form_link = '/' . $reviewer['opinion'] . '-' . $route_lang . '/review/' . $stars;
} else {
    $form_link = '/' . $reviewer['opinion'] . '/review/' . $stars;
}
?>
<div id="full-page">
    <header id="header">
        <img class="fluid-img header-img1 review-top-img1 header-img-extra cl" src='<?= $baseURL . "/img/immmg1.png" ?>' alt="image">
        <div class="header-container no-bottom no-bottom2">
            <div class="container">
                <a href="<?= $index_url ?>" class="logo">
                    <img src='<?= $baseURL . "/img/logo2.svg" ?>' class="fluid-img" alt="Logo">
                </a>
            </div>
        </div>
        <img src='<?= $baseURL . "/img/immmg2.png" ?>' alt="" class="fluid-img header-img2 review-top-img2 cl">
    </header>
    <div class="review-page">
        <div class="container">
            <div class="main no-pad main-no-pad main-no-pad2">
                <div class="main no-pad main-no-pad main-no-pad2">
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
                    <form action="<?= $form_link ?>" method="POST" class="feedback-textarea">
                        <input type="text" class="link-input-texxxt" name='link' placeholder="Collez le lien">
                        <button type="submit" name='choice' value="link" class="link-btnn">Envoyer le lien</button>
                    </form>
                    <div class="orrr-txt">ou</div>
                    <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                        <div class="d-flex choose-file-cont">
                            <label for="files" class="choose--file d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                                    <path d="M6.14613 12.6511C5.47733 13.4175 5.47733 14.6593 6.14613 15.4252C6.81493 16.1916 7.89927 16.1916 8.56807 15.4252L15.0517 8" stroke="#E30824" stroke-miterlimit="10" stroke-linecap="round" />
                                    <path d="M11.2046 4.66511L2.8698 13.138C1.55114 14.4786 1.55114 16.654 2.87022 17.9946C4.18929 19.3351 6.32835 19.3351 7.647 17.9946L18.0722 7.39659C19.0611 6.39127 19.0611 4.76022 18.0722 3.75447C17.0825 2.74829 15.4776 2.74872 14.4888 3.75447L6.00493 12.3788" stroke="#E30824" stroke-miterlimit="10" stroke-linecap="round" />
                                </svg>
                                <span>Sélectionnez une capture d'écran</span>
                                <input type="file" id="files" name="file" class="input-file">

                            </label>
                            <button type="submit" name=choice value="screen" class="link-btnn link-btnn2">Envoyer une capture d'écran</button>
                        </div>
                    </form>
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
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
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
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
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
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Soyez honnête:</span> nous n'aimons pas les fausses critiques.
                        Donc, le plus important, s'il vous plaît laisser des
                        commentaires honnêtes.</span>
                </div>
            </div>
            <img src='<?= $baseURL . "/img/immmg3.png" ?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>