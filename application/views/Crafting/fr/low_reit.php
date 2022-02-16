<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}?>
<header class="review-header" style="display: block;">
    <a href="<?=$index_url?>">
        <img src='<?=$baseURL."/img/logo.svg"?>' alt="">
    </a>
</header>
<main class="review-product">
    <section class="container">
        <div class="step" >
                <form action="<?=$form_link?>" method="POST" class="feedback-textarea">
                    <div class="stars">
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
                </form>
            </div>
    </section>
</main>