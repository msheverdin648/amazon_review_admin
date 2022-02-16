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
        <span id="asin" style="display: none;"><?=$product['asin']?></span>
                <span id="amazon-url" style="display: none;">www.amazon<?=$_COOKIE['marketplace_link']?></span>
                <p class="title bs">Merci pour les commentaires sur notre produit!</p>
                <p>Veuillez écrire un avis honnête - qu'il s'agisse d'un avis 5 étoiles ou d'un avis 1 étoile, il est très précieux pour les autres clients d'Amazon et pour le développement de nos produits.</p>
                <p class="under bs">Voici à quoi vous attendre ensuite:</p>
                <p class="step-desc"><b class="future bs">Étape 1.</b> Joignez le lien ou la capture d'écran à vos commentaires que vous avez laissé.</p>
            
            <div class="link-file-success">
            <img width="64px" src='<?=$baseURL."/img/check.svg"?>' alt="">
                <p class="bs">Nous avons reçu la confirmation</p>
                <a href="<?= $form_link ?>" class="js-again">Envoyer à nouveau</a>
            </div>
            <p class="step-desc"><b class="future bs">Étape 2.</b> Nous vérifierons l'identifiant de commande que vous avez spécifié pour confirmer l'achat et les commentaires. Si quelque chose ne va pas, nous vous contacterons par courriel.</p>
                <br>
                <p class="step-desc"><b class="future bs">Étape 3. Délai de livraison important:</b> En raison de la livraison Covid-19 de votre cadeau, vous pouvez prendre jusqu'à 30 à 35 jours ouvrables. Nous nous excusons pour les inconvénients et acceptons toutes les mesures nécessaires pour résoudre cette situation. </p>

                <div class="review-bottom">
                    <p class="bs">Les communautés les plus précieuses ont trois caractéristiques communes:</p>
                    <ul class="check">
                        <li><b class="future bs">Rédigez au moins 2 phrases:</b> de courtes critiques qui ne disent que des choses comme "Je l'aime" ou "Je déteste" ne sont pas très utiles pour les autres clients. Veuillez écrire quelques phrases expliquant ce que vous avez aimé ou non dans le produit.</li>
                        <li><b class="future bs">Ajoutez une ou plusieurs images:</b> Oui, nous savons que c'est cliché, mais l'image coûte vraiment des milliers de mots. Même si c'est juste une photo rapide sur le téléphone, il peut aider les autres clients à comprendre ce qu'ils achètent et à quoi ressemble le produit. </li>
                        <li><b class="future bs">Soyez honnête:</b> nous n'aimons pas les fausses critiques. Donc, le plus important, s'il vous plaît laisser des commentaires honnêtes.</li>
                    </ul>
                </div>
        </div>
    </section>
</main>


