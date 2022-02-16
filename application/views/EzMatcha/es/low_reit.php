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
            <h2 class="title3 title4">¡Escriba una reseña de nuestro producto para obtener un producto 100% gratis!</h2>
            <p class="text4">
                Escriba comentarios honestos: sus comentarios son muy importantes para todos los demás clientes de Amazon y para el desarrollo de nuestro producto, ya sea de 5 o 1 estrellas.
            </p>
                <textarea required name="low_review" id="feedback" placeholder="Por favor escriba su reseña aquí."></textarea>
                <button type="submit" class="feedback-btn">Comparte una reseña</button>
                <!-- <a href="index10.html" class="feedback-btn">Comparte una reseña</a> -->
           <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">

            </form>
            <h4 class="content-title4">Las reseñas más valiosas para la comunidad tienen dos cosas en común:</h4>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Escriba al menos 2 líneas:</span> Las reseñas breves que solo digan “Me gusta” o “Lo odio” no son muy útiles para otros clientes. Escriba un par de frases que expliquen lo que le gustó o no le gustó del producto.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts">
                    <span>Sea honesto</span>, no nos gustan las reseñas falsas y tendenciosas. Así que lo más importante es que proporcione comentarios honestos.
                </div>
            </div>
        </div>
        <img src='<?=$baseURL."/img/goup67.png"?>' alt="" class="last-img img-fluid">
    </div>
