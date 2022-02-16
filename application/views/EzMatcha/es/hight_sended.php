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
            <h2 class="title3 title5">¡Gracias por su revisión de nuestro producto!</h2>
            <p class="text4">
                Escriba una reseña honesta, ya sea una reseña de 5 estrellas o una reseña de 1 estrella, es muy valiosa para otros clientes de Amazon y para nuestro desarrollo de productos.
            </p>
            <h2 class="title3 title5 title-line">¿Qué esperar a continuación?</h2>
            <div class="title3 title5 step-title">Paso 1. <span>Adjunte un enlace o una captura de pantalla de sus comentarios. </span></div>
            <br/>
            <div class="text-center">
                <img src='<?=$baseURL."/img/vector-big.png"?>' alt="" class="big-vektor">
                <div class="recieved-txt">Hemos recibido la confirmación</div>
                <a href="<?=$form_link?>" class="send-again">Envíe de nuevo</a>
            </div>
            <br/><br/>
            <div class="title3 title5 step-title">Paso 2. <span>Verificaremos el ID de pedido que proporcionó para confirmar su compra. Si algo anda mal, nos comunicaremos con usted por correo electrónico.</span>
            </div><br/>
            <div class="title3 title5 step-title">Paso 3. Tiempo de entrega extendido:
                <span> debido a COVID-19, su regalo puede demorar entre 30 y 35 días hábiles en llegar. Pedimos disculpas por las molestias, estamos tomando todas las medidas necesarias para resolver esta situación.
                </span>
            </div>
            <div class="content-title5">Las reseñas más valiosas para la comunidad tienen 3 cosas en común:</div>
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
                <div class="texts"><span>Incluya una o más imágenes:</span> Sí, sabemos que es un cliché, pero una imagen realmente vale más que mil palabras. Incluso si es solo una instantánea rápida de su teléfono, puede ayudar a otros clientes a comprender qué están
                    comprando y cómo se ve el producto.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Sea honesto:</span> no nos gustan las reseñas falsas y tendenciosas. Así que lo más importante es que proporcione comentarios honestos.
                </div>
            </div>
        </div>
    </div>
