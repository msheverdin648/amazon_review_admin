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
            <span id="amazon-url" style="display: none;">www.amazon<?= $_COOKIE['marketplace_link'] ?></span>
            <p class="title bs">¡Gracias por su revisión de nuestro producto!</p>
            <p>Escriba una reseña honesta, ya sea una reseña de 5 estrellas o una reseña de 1 estrella, es muy valiosa para otros clientes de Amazon y para nuestro desarrollo de productos.</p>
            <p class="under bs">¿Qué esperar a continuación?</p>
            <p class="step-desc"><b class="future">Paso 1.</b> Adjunte un enlace o una captura de pantalla de sus comentarios.</p>
            <div class="stars">
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
                <input type="hidden" name="stars" value="<?= $stars ?>">
            </div>
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                <div class="">
                    <div class="link-file ">
                        <div>
                            <input  type="text" name="link" placeholder="Pegue el enlace">
                            <button class="btn-blue bs js-success" value="link" name="choice" type="submit">Envíe el enlace</button>
                        </div>

                    </div>
                </div>
            </form>
            <div class="">
                <div class="link-file ">
                    <div class="or">o</div>
                </div>
            </div>
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                <div class="">
                    <div class="link-file ">
                    <div class="input-file">
                                <div class="file-name">
                                    <input type="file" name="file">
                                    <span  >Elija el archivo</span>
                                </div>
                                <button class="btn-blue bs js-success" value="screen" name="choice" type="submit">Envíe captura de pantalla</button>
                            </div>
                    </div>
                </div>
                <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
            </form>
            <p class="step-desc"><b class="future bs">Paso 2.</b> Verificaremos el ID de pedido que proporcionó para confirmar su compra. Si algo anda mal, nos comunicaremos con usted por correo electrónico.</p>
                <br>
                <p class="step-desc"><b class="future bs">Paso 3.</b> Tiempo de entrega extendido: debido a COVID-19, su regalo puede demorar entre 30 y 35 días hábiles en llegar. Pedimos disculpas por las molestias, estamos tomando todas las medidas necesarias para resolver esta situación.</p>

                <div class="review-bottom">
                    <p class="bs">Las reseñas más valiosas para la comunidad tienen 3 cosas en común:</p>
                    <ul class="check">
                        <li><b class="future bs">Escriba al menos 2 líneas:</b> Las reseñas breves que solo digan “Me gusta” o “Lo odio” no son muy útiles para otros clientes. Escriba un par de frases que expliquen lo que le gustó o no le gustó del producto.</li>
                        <li><b class="future bs">Incluya una o más imágenes:</b> Sí, sabemos que es un cliché, pero una imagen realmente vale más que mil palabras. Incluso si es solo una instantánea rápida de su teléfono, puede ayudar a otros clientes a comprender qué están comprando y cómo se ve el producto.</li>
                        <li><b class="future bs">Sea honesto</b>, no nos gustan las reseñas falsas y tendenciosas. Así que lo más importante es que proporcione comentarios honestos.</li>
                    </ul>
                </div>
        </div>
    </section>
</main>