<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include '../include/head.php'; ?>
    <title>Euro.do</title>
</head>
<? include "../../views/reviewer_euro/product_view.php" ?>

<body>
    <header class="review-header" style="display: block;">
        <a href="index.php?id=<?=$_COOKIE['id']?>">
            <img src="../img/logo.svg" alt="">
        </a>
    </header>

    <main class="review-product">
        <section class="container">

            <div class="step step-1" <? if (!isset($_GET['stars'])) : ?>style="display:block;" <? endif; ?>>
                <p class="title step-1 bs">Comment souhaitez-vous évaluer un produit?</p>
                <div class="stars">
                    <input id="star-5" type="radio" name="star" value="5">
                    <label for="star-5"></label>
                    <input id="star-4" type="radio" name="star" value="4">
                    <label for="star-4"></label>
                    <input id="star-3" type="radio" name="star" value="3">
                    <label for="star-3"></label>
                    <input id="star-2" type="radio" name="star" value="2">
                    <label for="star-2"></label>
                    <input id="star-1" type="radio" name="star" value="1">
                    <label for="star-1"></label>
                </div>
                <img class="product-img" src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                <p><b>* S'il vous plaît envoyez un retour honnête pour obtenir un produit gratuit! <br>* PAS de méthode de carte de crédit ou de paiement, juste votre avis est nécessaire. </b></p>
            </div>

            <div class="step step-2" <? if (isset($_GET['stars']) && (!isset($_GET['s'])) && ($_GET['stars'] == 'star-1' || $_GET['stars'] == 'star-2' || $_GET['stars'] == 'star-3')) : ?>style="display:block;" <? endif; ?>>
                <form action="../../views/reviewer_euro/send_low_reit.php" method="POST" class="feedback-textarea">
                    <div class="stars">
                        <input disabled id="star-5" type="radio" <? if ($_GET['stars'] == 'star-5') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="5">
                        <label disabled for="star-5"></label>
                        <input disabled id="star-4" type="radio" <? if ($_GET['stars'] == 'star-4') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="4">
                        <label disabled for="star-4"></label>
                        <input disabled id="star-3" type="radio" <? if ($_GET['stars'] == 'star-3') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="3">
                        <label disabled for="star-3"></label>
                        <input disabled id="star-2" type="radio" <? if ($_GET['stars'] == 'star-2') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="2">
                        <label disabled for="star-2"></label>
                        <input disabled id="star-1" type="radio" <? if ($_GET['stars'] == 'star-1') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="1">
                        <label disabled for="star-1"></label>
                        <input type="hidden" name="stars" value="<?= $_GET['stars'] ?>">
                    </div>
                    <p class="title">Donnez votre avis sur notre produit pour obtenir un produit 100% gratuit!</p>
                    <p>S'il vous plaît écrivez des commentaires honnêtes - vos commentaires sont très importants pour tous les autres clients Amazon et pour le développement de notre produit, qu'il soit 5 ou 1 étoile.</p>
                    <textarea class="bs" name="low_review" requiredplaceholder="Veuillez écrire votre avis ici s'il vous plaît"></textarea>
                    <button class="btn-blue btn-block " type="submit">Partager un avis</button>
                    <div class="review-bottom">
                        <p class="bs">Les communautés les plus précieuses ont deux caractéristiques communes:</p>
                        <ul class="check">
                            <li><b class="future bs">Rédigez au moins 2 phrases:</b> de courtes critiques qui ne disent que des choses comme "Je l'aime" ou "Je déteste" ne sont pas très utiles pour les autres clients. Veuillez écrire quelques phrases expliquant ce que vous avez aimé ou non dans le produit.</li>
                            <li><b class="future bs">Soyez honnête:</b> nous n'aimons pas les fausses critiques. Donc, le plus important, s'il vous plaît laisser des commentaires honnêtes.</li>
                        </ul>
                    </div>
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
            </div>
           <div class="step step-3" <? if (isset($_GET['stars']) && ($_GET['stars'] == 'star-4' || $_GET['stars'] == 'star-5')) : ?>style="display:block;" <? endif; ?>>
                <span id="asin" style="display: none;"><?=$product['asin']?></span>
                <span id="amazon-url" style="display: none;">www.amazon<?=$_COOKIE['marketplace_link']?></span>
                <p class="title bs">Merci pour les commentaires sur notre produit!</p>
                <p>Veuillez écrire un avis honnête - qu'il s'agisse d'un avis 5 étoiles ou d'un avis 1 étoile, il est très précieux pour les autres clients d'Amazon et pour le développement de nos produits.</p>
                <p class="under bs">Voici à quoi vous attendre ensuite:</p>
                <p class="step-desc"><b class="future bs">Étape 1.</b> Joignez le lien ou la capture d'écran à vos commentaires que vous avez laissé.</p>
                <form action="../../views/reviewer_euro/send_hight_reit.php" method="POST" class="feedback-textarea" enctype="multipart/form-data" >
                    <div class="stars" style="<? if(isset($_GET['s'])):?>display: none;<?endif;?>">
                        <input id="star-5" type="radio" <? if ($_GET['stars'] == 'star-5') {
                                                            echo 'checked';
                                                        } ?> name="star" value="5">
                        <input disabled id="star-5" type="radio" <? if ($_GET['stars'] == 'star-5') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="5">
                        <label disabled for="star-5"></label>
                        <input disabled id="star-4" type="radio" <? if ($_GET['stars'] == 'star-4') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="4">
                        <label disabled for="star-4"></label>
                        <input disabled id="star-3" type="radio" <? if ($_GET['stars'] == 'star-3') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="3">
                        <label disabled for="star-3"></label>
                        <input disabled id="star-2" type="radio" <? if ($_GET['stars'] == 'star-2') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="2">
                        <label disabled for="star-2"></label>
                        <input disabled id="star-1" type="radio" <? if ($_GET['stars'] == 'star-1') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="1">
                        <label disabled for="star-1"></label>
                        <input type="hidden" name="stars" value="<?= $_GET['stars'] ?>">
                    </div>
                    
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                    <div class="">
                        <div class="link-file " style="<? if(isset($_GET['s'])):?>display: none;<?endif;?> ">
                            <div>
                                <input type="text" name="link" placeholder="Collez le lien">
                                <button class="btn-blue js-success" value="link" name="choice" type="submit">Envoyer le lien</button>
                            </div>
                            <div class="or">ou</div>
                            <div class="input-file">
                                <div class="file-name">
                                    <input type="file" name="file">
                                    <span>Sélectionnez une capture d'écran</span>
                                </div>
                                <button class="btn-blue js-success" value="screen" name="choice" type="submit">Envoyer une capture d'écran</button>
                            </div>
                        </div>
                        <div class="link-file-success" style="<? if(isset($_GET['s']) && $_GET['s']=='hight'):?>display: block;<?endif;?>">
                            <img width="64px" src="../img/check.svg" alt="">
                            <p class="bs">Nous avons reçu la confirmation</p>
                            <a href="product.php?stars=<?=$_GET['stars']?>" class="js-again">Envoyer à nouveau</a>
                        </div>
                    </div>
                </form>
               
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
            <div class="step step-4" style="<? if(isset($_GET['s']) && $_GET['s']=='low'): ?>display: block;<? endif; ?>">
                <p class="thank-title bs">Merci!</p>
                <p class="title bs">Votre avis a été publié!</p>
                <p class="under bs">Voici à quoi vous attendre ensuite :</p>
                <p class="step-desc"><b class="future bs">Étape 1.</b> Nous vérifierons l'identifiant de commande que vous avez spécifié pour confirmer l'achat. Si quelque chose ne va pas, nous vous contacterons par e-mail.</p>
                <p class="step-desc"><b class="future bs">Étape 2.</b> Délai de livraison prolongé: En raison du COVID-19, la réception de votre cadeau peut prendre entre 30 et 35 jours ouvrables. Nous nous excusons pour les inconvénients et acceptons toutes les mesures nécessaires pour résoudre cette situation. </p>
                <p class="step-desc future bs"><b>Contactez-nous à tout moment chez <br><a href="mailto:support@eurodo.es">support@eurodo.es</a></b></p>
            </div>
        </section>
    </main>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>