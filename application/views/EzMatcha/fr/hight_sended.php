<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}
?>
    <div class="full-page">
        <img src='<?=$baseURL."/img/Group68.png"?>' alt="" class="img1 hide-img2">
        <img src='<?=$baseURL."/img/Group69.png"?>' alt="" class="img2 hide-img2">
        <div class="page3">
            <div class="logo2">
                <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' width="349px" alt="Logo" class="logo-img2 img-fluid"></a>
            </div>
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
                    <input type="hidden" name="stars" value="<?=$stars?>">
                </div>
            <h2 class="title3 title5">Merci pour votre avis sur notre produit!</h2>
            <p class="text4">
                Veuillez écrire un avis honnête - qu'il s'agisse d'un avis 5 étoiles ou d'un avis 1 étoile, il est très précieux pour les autres clients d'Amazon et pour le développement de nos produits.
            </p>
            <h2 class="title3 title5 title-line">Voici à quoi vous attendre ensuite :</h2>
            <div class="title3 title5 step-title">Étape 1.<span> Joignez le lien ou la capture d'écran à vos commentaires que vous avez laissé.</span></div>
            <br/>
            <div class="text-center">
                <img src='<?=$baseURL."/img/vector-big.png"?>' alt="" class="big-vektor">
                <div class="recieved-txt">Nous avons reçu la confirmation</div>
                <a href="<?=$form_link?>" class="send-again">Envoyer à nouveau</a>
            </div>
            <br/><br/>
            <div class="title3 title5 step-title">Étape 2.<span> Nous vérifierons les commentaires et l'identifiant de commande que vous avez spécifié pour confirmer l'achat. Si quelque chose ne va pas, nous vous contacterons par courriel.</span>
            </div><br/>
            <div class="title3 title5 step-title">Étape 3. Délai de livraison important:
                <span> En raison de la livraison Covid-19 de votre cadeau, vous pouvez prendre jusqu'à 30 à 35 jours ouvrables. Nous nous excusons pour les inconvénients et acceptons toutes les mesures nécessaires pour résoudre cette situation. 
                </span>
            </div>
            <div class="content-title5">Les communautés les plus précieuses ont trois caractéristiques communes:</div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Rédigez au moins 2 phrases: </span> de courtes critiques qui ne disent que des choses comme "Je l'aime" ou "Je déteste" ne sont pas très utiles pour les autres clients. Veuillez écrire quelques phrases expliquant ce que vous avez
                    aimé ou non dans le produit.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Ajoutez une ou plusieurs images: </span> Oui, nous savons que c'est cliché, mais l'image coûte vraiment des milliers de mots. Même si c'est juste une photo rapide sur le téléphone, il peut aider les autres clients à comprendre ce
                    qu'ils achètent et à quoi ressemble le produit.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Soyez honnête: </span> nous n'aimons pas les fausses critiques. Donc, le plus important, s'il vous plaît laisser des commentaires honnêtes.
                </div>
            </div>
        </div>
    </div>
