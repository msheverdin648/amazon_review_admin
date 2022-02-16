<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include '../include/head.php'; ?>
    <title>Euro.do</title>
</head>

<body>
    <header class="review-header" style="display: block;">
        <a href="index.php?id=<?=$_COOKIE['id']?>">
            <img src="../img/logo.svg" alt="">
        </a>
    </header>
    <? include "../../views/reviewer_euro/product_view.php" ?>
    <main class="review-product">
        <section class="container">
            <div class="step step-1" <? if (!isset($_GET['stars'])) : ?>style="display:block;" <? endif; ?>>
                <p class="title step-1 bs">¿Cómo le gustaría evaluar este producto?</p>
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
                <p><b>* Envíe una reseña honesta para obtener un producto GRATIS. <br>* SIN tarjeta de crédito ni método de pago, solo su útil opinión.</b></p>
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
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
            </div>
            <div class="step step-3" <? if (isset($_GET['stars']) && ($_GET['stars'] == 'star-4' || $_GET['stars'] == 'star-5')) : ?>style="display:block;" <? endif; ?>>
                <span id="asin" style="display: none;"><?=$product['asin']?></span>
                <span id="amazon-url" style="display: none;">www.amazon<?= $_COOKIE['marketplace_link'] ?></span>
                <p class="title bs">¡Gracias por su revisión de nuestro producto!</p>
                <p>Escriba una reseña honesta, ya sea una reseña de 5 estrellas o una reseña de 1 estrella, es muy valiosa para otros clientes de Amazon y para nuestro desarrollo de productos.</p>
                <p class="under bs">¿Qué esperar a continuación?</p>
                <p class="step-desc"><b class="future">Paso 1.</b> Adjunte un enlace o una captura de pantalla de sus comentarios.</p>
                <form action="../../views/reviewer_euro/send_hight_reit.php" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                    <div class="stars" style="<? if (isset($_GET['s'])) : ?>display: none;<? endif; ?>">
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
                    <div class="">
                        <div class="link-file " style="<? if (isset($_GET['s'])) : ?>display: none;<? endif; ?> ">
                            <div>
                                <input  type="text" name="link" placeholder="Pegue el enlace">
                                <button class="btn-blue bs js-success" value="link" name="choice" type="submit">Envíe el enlace</button>
                            </div>
                            <div class="or">o</div>
                            <div class="input-file">
                                <div class="file-name">
                                    <input type="file" name="file">
                                    <span style="white-space: nowrap;">Elija el archivo</span>
                                </div>
                                <button class="btn-blue bs js-success" value="screen" name="choice" type="submit">Envíe captura de pantalla</button>
                            </div>
                        </div>
                        <div class="link-file-success" style="<? if (isset($_GET['s']) && $_GET['s'] == 'hight') : ?>display: block;<? endif; ?>">
                            <img width="64px" src="../img/check.svg" alt="">
                            <p class="bs">Hemos recibido la confirmación</p>
                            <a href="product.php?stars=<?= $_GET['stars'] ?>" class="js-again">Envíe de nuevo</a>
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
            <div class="step step-4" style="<? if(isset($_GET['s']) && $_GET['s']=='low'): ?>display: block;<? endif; ?>">
                <p class="thank-title bs">¡Gracias!</p>
                <p class="title bs">¡Su opinión se ha publicado!</p>
                <p class="under bs">¿Qué esperar a continuación?</p>
                <p class="step-desc"><b class="future bs">Paso 1.</b> Verificaremos el ID de pedido que proporcionó para confirmar su compra. Si algo anda mal, nos comunicaremos con usted por correo electrónico.</p>
                <p class="step-desc"><b class="future bs">Paso 2.</b> Tiempo de entrega extendido: debido a COVID-19, su regalo puede demorar entre 30 y 35 días hábiles en llegar. Pedimos disculpas por las molestias, estamos tomando todas las medidas necesarias para resolver esta situación.</p>
                <p class="step-desc future bs"><b>Contáctenos en cualquier momento en <br><a href="mailto:support@eurodo.es">support@eurodo.es</a></b></p>
            </div>
        </section>
    </main>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>