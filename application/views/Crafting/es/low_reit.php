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
        <div class="step">
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
                    <p class="title bs">¡Escriba una reseña de nuestro producto para obtener un producto 100% gratis!</p>
                    <p>Escriba comentarios honestos: sus comentarios son muy importantes para todos los demás clientes de Amazon y para el desarrollo de nuestro producto, ya sea de 5 o 1 estrellas.</p>
                    <textarea name="low_review" class="bs" required placeholder="Por favor escriba su reseña aquí."></textarea>
                    <button class="btn-blue bs btn-block " type="submit">Comparte una reseña</button>
                    <div class="review-bottom">
                        <p class="bs">Las reseñas más valiosas para la comunidad tienen dos cosas en común:</p>
                        <ul class="check">
                            <li><b class="future bs">Escriba al menos 2 líneas:</b> Las reseñas breves que solo digan “Me gusta” o “Lo odio” no son muy útiles para otros clientes. Escriba un par de frases que expliquen lo que le gustó o no le gustó del producto.</li>
                            <li><b class="future bs">Sea honesto</b>, no nos gustan las reseñas falsas y tendenciosas. Así que lo más importante es que proporcione comentarios honestos.</li>
                        </ul>
                </div>
                </form>
            </div>
    </section>
</main>