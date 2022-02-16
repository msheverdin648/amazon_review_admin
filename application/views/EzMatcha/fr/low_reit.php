<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}?>
    <div class="full-page">
        <div class="page2">
            <div class="logo2">
                <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' width="349px" alt="Logo" class="logo-img2 img-fluid"></a>
            </div>
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
                    <input disabled id="star-3" type="radio" <? if ($stars== 3) {
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
                    <input type="hidden" name="star" value="<?= $stars ?>">
                </div>
            <h2 class="title3 title4">Donnez votre avis sur notre produit pour obtenir un produit 100% gratuit!</h2>
            <p class="text4">
                S'il vous plaît écrivez des commentaires honnêtes - vos commentaires sont très importants pour tous les autres clients Amazon et pour le développement de notre produit, qu'il soit 5 ou 1 étoile.
            </p>
            
                <textarea required name="low_review" id="feedback" placeholder="Veuillez écrire votre avis ici s'il vous plaît"></textarea>
                <button type="submit" class="feedback-btn">Partager un avis</button>
                <!-- <a href="index10.html" class="feedback-btn">Partager un avis</a> -->
            <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">

            </form>
            <h4 class="content-title4">Les communautés les plus précieuses ont deux caractéristiques communes:</h4>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Rédigez au moins 2 phrases:</span> de courtes critiques qui ne disent que des choses comme "Je l'aime" ou "Je déteste" ne sont pas très utiles pour les autres clients. Veuillez écrire quelques phrases expliquant ce que vous avez
                    aimé ou non dans le produit.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts">
                    <span>Soyez honnête:</span> nous n'aimons pas les fausses critiques. Donc, le plus important, s'il vous plaît laisser des commentaires honnêtes.
                </div>
            </div>
        </div>
        <img src='<?=$baseURL."/img/goup67.png"?>' alt="" class="last-img img-fluid">
    </div>
