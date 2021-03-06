<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}
?>
    <div id="full-page">
        <header id="header">
            <img class="fluid-img header-img1 review-top-img1 header-img-extra cl" src='<?=$baseURL."/img/immmg1.png"?>' alt="image">
            <div class="header-container no-bottom no-bottom2">
                <div class="container">
                    <a href="<?=$index_url?>" class="logo">
                        <img src='<?=$baseURL."/img/logo2.svg"?>' class="fluid-img" alt="Logo">
                    </a>
                </div>
            </div>
            <img src='<?=$baseURL."/img/immmg2.png"?>' alt="" class="fluid-img header-img2 review-top-img2 cl">
        </header>
        <div class="review-page">
            <div class="container">
                <div class="main no-pad main-no-pad main-no-pad2">
                <div class="stars stars2">
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
                    <input type="hidden" name="stars" value="<?=$stars?>">
                </div>
                    <h1 class="main-title main-title-extra main-title-extra666">
                        ??Gracias por su revisi??n de nuestro producto!
                    </h1>
                    <p class="main-desc main-desc-extra review-extra-title review-extra-title-extra cld cld2">Escriba
                        una rese??a honesta, ya sea una rese??a de 5 estrellas o una rese??a de 1 estrella, es muy valiosa
                        para otros
                        clientes de Amazon y para nuestro desarrollo de productos.
                    </p>
                </div>
                <div class="thanks-container">
                    <h1 class="main-title main-title-extra">
                        ??Qu?? esperar a continuaci??n?
                    </h1>
                    <div class="thanks-text thanks-text111">
                        <span>Paso 1.</span>
                        Adjunte un enlace o una captura de pantalla de sus comentarios.
                    </div>
                    <img class="vekktor" src='<?=$baseURL."/img/Vector.png"?>' alt="">
                    <div class="thanks-text thanks-text222">Hemos recibido la confirmaci??n</div>
                    <a href="<?=$form_link?>" class="send-again">Env??e de nuevo</a><br /><br />
                    <div class="thanks-text">
                        <span>Paso 2.</span>
                        Verificaremos el ID de pedido que proporcion?? para confirmar su compra. Si algo anda mal, nos
                        comunicaremos con
                        usted por correo electr??nico.
                    </div><br /><br />
                    <div class="thanks-text">
                        <span>Paso 3. Tiempo de entrega extendido: </span>
                        Tiempo de entrega extendido: debido a COVID-19, su regalo puede demorar entre 30 y 35 d??as
                        h??biles en llegar.
                        Pedimos disculpas por las molestias, estamos tomando todas las medidas necesarias para resolver
                        esta situaci??n.
                    </div>
                </div>
                <p class="main-desc main-desc-extra review-txt review-txt444">Las rese??as m??s valiosas para la comunidad
                    tienen 3 cosas en com??n:</p>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Escriba al menos 2 l??neas:</span> Las rese??as breves que solo
                        digan ???Me gusta??? o ???Lo odio??? no son muy ??tiles para otros
                        clientes. Escriba un par de frases que expliquen lo que le gust?? o no le gust?? del
                        producto.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Incluya una o m??s im??genes:</span> S??, sabemos que es un
                        clich??, pero una imagen realmente vale m??s que mil palabras. Incluso
                        si es solo una instant??nea r??pida de su tel??fono, puede ayudar a otros clientes a comprender qu??
                        est??n comprando y c??mo
                        se ve el producto.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Sea honesto:</span> no nos gustan las rese??as falsas y
                        tendenciosas. As?? que lo m??s importante es que proporcione comentarios
                        honestos.</span>
                </div>
            </div>
            <img src='<?=$baseURL."/img/immmg3.png"?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>
