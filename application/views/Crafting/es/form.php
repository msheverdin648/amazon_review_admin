<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/form';
}else{
    $form_link ='/'.$reviewer['opinion'].'/form';
}
?>
<header>
            <a href="<?=$index_url?>">
                <img src='<?=$baseURL."/img/logo.svg"?>' alt="">
            </a>
        </header>
            <? if(isset($_SESSION['one_variation']) ): ?>
        <section class='thanks-form'>
                <div class='container'>
                    <div class='thanks-form__inner'>
                        <p class="thanks-form__title">Gracias por su compra!</p>
                        <p class="thanks-form__subtitle">Usted ha comprado este artículo</p>
                        <div class="thanks-form__img"><img src="<?=$product['img']?>" alt=""></div>
                        <p class="thanks-form__desc"><?=$lang_product['product_es']?></p>
                        <p class="thanks-form__desc2">
                            No compró este artículo? 
                            <a href="mailto:support@eurodo.es">Contáctenos en support@eurodo.es</a>
                        </p>
                    </div>
                </div>
            </section>
            <? endif; ?>
            <section class="fill-form">
                <div class="container">
                    <p class="title bs">Complete el formulario y reciba su producto gratis</p>
                    <p class="text-center">Envío Gratis | Sin comisiones | No se requiere tarjeta bancaria</p>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                            <? foreach($presents as $present): ?>
                                    <div class="col-sm-6">
                                        <div class="item">
                                            <img src="<?=$present['img']?>" alt="<?=$present['img']?>">
                                            <p class="name"><?=$present['name']?></p>
                                        </div>
                                    </div>
                                <? endforeach; ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <form class="form" action="<?=$form_link?>" method="POST"> 
                                <input  required name="name" type="text"  class="bs" placeholder="Nombre">
                                <input type="text"  required name="email"  class="bs" placeholder="e-mail">
                                <p class="adress-text">* Introduzca la dirección para enviar el regalo</p>
                                <input type="text"  required name="address"  class="bs" placeholder="Dirección completa">
                                <input type="text"  required name="city"  class="bs" placeholder="Ciudad">
                                <input type="text"  required name="state" class="bs" placeholder="Provincia">
                                <input type="text"  required name="index"  class="bs" placeholder="Сódigo postal">
                                <select required name="country" class="bs"> 
                                    <option>País</option>
                                    <option value="<?=$country?>"><?=$country?></option>
                                </select>
                                <input type="text"  required name="phone"  class="bs" placeholder="Número de teléfono">
                                <input type="text"  required name="number"  class="bs" placeholder="Número de pedido en Amazon">
                                <p class="amazon">* Consulta el historial de pedidos de tu cuenta de <a class="under" href="#">Amazon</a>, envía un correo electrónico o el recibo recibido con el producto. Por ejemplo, 112-5465666-4343658</p>
                                <select  required name="id_gift" class="choose-gift bs">
                                    <option>Elige el regalo</option>
                                    <? foreach($presents as $key => $present):?>
                                    <optgroup label="<?=($key+1).". ".$present['name']?>">
                                    <? if($present['variate']==1): ?>
                                        <? foreach($presvars as $presvar): ?>
                                            <? if($presvar['parent_ASIN']==$present['asin'] ): ?>
                                                <option value="presvar-<?=$presvar['id']?>" ><?=$presvar['name']?><?=$presvar['weight']?><?=$presvar['size']?></option>
                                            <? endif; ?>
                                        <? endforeach; ?>
                                    <? else: ?>
                                        <option value="present-<?=$present['id']?>" ><?=$present['name']?></option>
                                    <? endif; ?>
                                </optgroup> 
                                <? endforeach; ?>
                                </select>
                                <div class="text-center">
                                   <button class="btn-blue" type="submit">Recibe el regalo</button>
                                    <!-- <a href="category.php" class="btn-blue">Recibe el regalo</a> -->
                                </div>
                                <p class="small">* Nunca compartimos información personal de nuestros usuarios con nadie. Aquí está nuestra <a class="under" href="#">política de privacidad</a>.</p>
                                <p>* Para calificar, los participantes deben aceptar enviarnos su experiencia con un producto comprado previamente y que HAN USADO DURANTE AL MENOS 14 DÍAS.</p>
                                <input type="hidden" name="language" value="<?=$lang?>">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="container schema">
                <p class="schema-title upper bs">Complete el formulario y reciba su producto gratis</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step1.svg"?>' alt="">
                            <p class="name bs">1. LLENE EL FORMULARIO EN LÍNEA</p>
                            <p>El primer paso para obtener un PRODUCTO GRATIS es completar el formulario en esta página. La oferta solo es válida para los clientes que hayan comprado el artículo a precio completo en nuestro distribuidor autorizado en Amazon.com.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step2.svg"?>' alt="">
                            <p class="name bs">2. COMPARTA SU EXPERIENCIA</p>
                            <p>Después de completar el formulario, le preguntaremos sobre su experiencia con nuestro producto. Enviar sus comentarios ayudará a otros clientes a tomar mejores decisiones de compra.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step3.svg"?>' alt="">
                            <p class="name bs">3. OBTENGA UN REGALO</p>
                            <p>Si reclama un regalo grande le será enviado en un plazo de 48 horas. Nos hacemos cargo de los gastos de envío. ¡Para usted el coste es 0!</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bottom-text">
                <div class="container">
                    <p class="subtitle bs">Envío Gratis | Sin comisiones | No se requiere tarjeta bancaria</p>
                    <p><b>* Las condiciones se aplican:</b> <br>Limitado a un producto gratuito por cuenta de Amazon por hogar. Oferta válida solo para clientes que hayan comprado nuestro artículo a precio completo en nuestro minorista oficial de Amazon.com. Para calificar, los participantes deben aceptar enviarnos su experiencia con un producto comprado previamente y que han usado durante al menos 14 días.</p>
                </div>
            </section>
            
            <section class="asked-questions">
                <div class="container">
                    <p class="section-title bs">Preguntas frecuentes</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">¿Es REALMENTE gratis? ¿O tengo que pagar?</p>
                            <p>No hay absolutamente ninguna tarifa. No solicitamos los datos de su tarjeta de crédito de ninguna manera. Sin suscripción, sin tarifas ocultas o tarifas de envío. Cubrimos todos los gastos. Es REALMENTE GRATIS.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">¿Cuál es el truco? ¿Necesito hacer algo?</p>
                            <p>Lo único que te pedimos es que nos envíes tu experiencia con el producto. Compartir sus experiencias nos ayudará a mejorar nuestros productos y ayudará a otros clientes a tomar mejores decisiones.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">¿Cuáles son las CONDICIONES de participación?</p>
                            <p>Oferta válida solo para clientes que compraron el producto a precio completo en Amazon.com. También debe usarlo durante al menos 14 días antes de compartir su experiencia.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">¿Cuánto tiempo tardaré en recibir mi artículo gratis?</p>
                            <p>Si selecciona un producto GRATIS, lo enviaremos en 48 horas. Recibira su producto en un plazo de 20 a 25 días hábiles.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <div class="container">
                <p>Copyright © 2020 EURODO - Todos los derechos reservados</p>
                <div class="select">
                <? if(isset($langs_cut)): ?>
                    <select class="lang">
                            <?if(strpos($_SERVER['REQUEST_URI'], 'form')!==false):?>
                                <? if(in_array('ru', $langs_cut)): ?> <option <? if($lang=='ru'): echo 'selected'; endif; ?> value="-ru/form">Русский</option><? endif;?>
                                <? if(in_array('en', $langs_cut)): ?> <option <? if($lang=='en'): echo 'selected'; endif; ?> value="-en/form">English</option><? endif;?>
                                <? if(in_array('es', $langs_cut)): ?> <option <? if($lang=='es'): echo 'selected'; endif; ?> value="-es/form">Español</option><? endif;?>
                                <? if(in_array('it', $langs_cut)): ?> <option <? if($lang=='it'): echo 'selected'; endif; ?> value="-it/form">Italiano</option><? endif;?>
                                <? if(in_array('de', $langs_cut)): ?> <option <? if($lang=='de'): echo 'selected'; endif; ?> value="-de/form">Deutsch</option><? endif;?>
                                <? if(in_array('fr', $langs_cut)): ?> <option <? if($lang=='fr'): echo 'selected'; endif; ?> value="-fr/form">Français</option><? endif;?>
                            <? else: ?>
                                <? if(in_array('ru', $langs_cut)): ?> <option <? if($lang=='ru'): echo 'selected'; endif; ?> value="-ru">Русский</option><? endif;?>
                                <? if(in_array('en', $langs_cut)): ?> <option <? if($lang=='en'): echo 'selected'; endif; ?> value="-en">English</option><? endif;?>
                                <? if(in_array('es', $langs_cut)): ?> <option <? if($lang=='es'): echo 'selected'; endif; ?> value="-es">Español</option><? endif;?>
                                <? if(in_array('it', $langs_cut)): ?> <option <? if($lang=='it'): echo 'selected'; endif; ?> value="-it">Italiano</option><? endif;?>
                                <? if(in_array('de', $langs_cut)): ?> <option <? if($lang=='de'): echo 'selected'; endif; ?> value="-de">Deutsch</option><? endif;?>
                                <? if(in_array('fr', $langs_cut)): ?> <option <? if($lang=='fr'): echo 'selected'; endif; ?> value="-fr">Français</option><? endif;?>
                            <? endif; ?>
                        </select>
                <?endif;?>
            </div>
            </div>
        </footer>
