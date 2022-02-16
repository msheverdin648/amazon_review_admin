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
            
            <div class="link-file-success" style="<? if (isset($_GET['s']) && $_GET['s'] == 'hight') : ?>display: block;<? endif; ?>">
                <img width="64px" src='<?=$baseURL."/img/check.svg"?>' alt="">
                <p class="bs">Hemos recibido la confirmación</p>
                <a href="<?= $form_link ?>" class="js-again">Envíe de nuevo</a>
            </div>
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