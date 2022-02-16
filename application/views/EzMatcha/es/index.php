<? if(isset($route_lang)){                  
    $form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/form/';
    $url='/'.$reviewer['opinion'].'-'.$route_lang;
    }else{
        $form_link = '/'.$reviewer['opinion'].'/form/';
        $url = '/'.$reviewer['opinion'];
    }
    ?>
    <div class="full-page">
        <header id="header">
            <div class="container">
                <div class="logo text-center">
                    <a href="<?=$index_url?>"><img src="<? echo $baseURL."/img/logo.svg"?>" alt="Logo" class="logo-img img-fluid"></a>
                </div>
            </div>
        </header>
        <div class="content">
            <img src="<? echo $baseURL."/img/vector1.png"?>" alt="vektor" class="vector-img1 img-fluid hide-img">
            <div class="container text-center">
                <h2 class="content-title">¿Qué producto ha comprado?</h2>
                <p class="content-desc">¿No compró este artículo? <a href="#">Contáctenos en support@eurodo.es</a></p>
            </div>
            <div class="product-container">
                <div class="container">
                    <div class="row">
                    <?foreach($products as $product): ?>
                        <div class="product-item">
                            <img src="<?=$product['img']?>" class="img-fluid" alt="product"><br/>
                            <div class="product-item__colors">
                                <? foreach ($prodvars as $prodvar) : ?>
                                    <? if ($prodvar['parent_ASIN'] == $product['asin']) : ?>
                                        <div class="product-item__color"  style="background: <?print(preg_replace('%^\s+|\s+$%u', '', $prodvar['color']))?>;"></div>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                            <div class="product-item__weights">
                                <? foreach ($prodvars as $prodvar) : ?>
                                    <? if ($prodvar['parent_ASIN'] == $product['asin']) : ?>
                                        <? if (!empty(trim($prodvar['weight']))) : ?>
                                            <div class="product-item__weight"><?= $prodvar['weight'] ?></div>
                                        <? endif; ?>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                            <div class="product-item__weights">
                                <? foreach ($prodvars as $prodvar) : ?>
                                    <? if ($prodvar['parent_ASIN'] == $product['asin']) : ?>
                                        <? if (!empty(trim($prodvar['size']))) : ?>
                                            <div class="product-item__weight"><?= $prodvar['size'] ?></div>
                                        <? endif; ?>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                            <a href="<?=$form_link?>" data-value="<?=$product['id']?>" data-url="<?=$url?>" class="product-btn" ><?=$product['name']?></a>
                        </div>
                    <? endforeach; ?>
                    </div>
                </div>
                <img src="<? echo $baseURL."/img/group1.png"?>" alt="" class="img-fluid hide-img home-img2">
                <img src="<? echo $baseURL."/img/frame1.png"?>" alt="" class="img-fluid hide-img home-img3">
            </div>
        </div>
        <div class="just-text">
            <div class="container">
                <h4 class="title">Envío Gratis | Sin comisiones | No se requiere tarjeta bancaria</h4>
                <p class="teext">
                    <span>* Las condiciones se aplican:</span><br/> Limitado a un producto gratuito por cuenta de Amazon por hogar. Oferta válida solo para clientes que hayan comprado nuestro artículo a precio completo en nuestro minorista oficial de
                    Amazon.com. Para calificar, los participantes deben aceptar enviarnos su experiencia con un producto comprado previamente y que han usado durante al menos 14 días.
                </p>
            </div>
        </div>
        <footer id="footer">
            <div class="container d-flex">
                <p class="footer-txt text-center">Copyright © 2020 EURODO - Todos los derechos reservados</p>
            </div>
            <div class="select">
                <? if(isset($langs_cut)): ?>
                    <select class="lang">
                        <? if(in_array('ru', $langs_cut)): ?> <option <? if($lang=='ru'): echo 'selected'; endif; ?> value="-ru">Русский</option><? endif;?>
                        <? if(in_array('en', $langs_cut)): ?> <option <? if($lang=='en'): echo 'selected'; endif; ?> value="-en">English</option><? endif;?>
                        <? if(in_array('es', $langs_cut)): ?> <option <? if($lang=='es'): echo 'selected'; endif; ?> value="-es">Español</option><? endif;?>
                        <? if(in_array('it', $langs_cut)): ?> <option <? if($lang=='it'): echo 'selected'; endif; ?> value="-it">Italiano</option><? endif;?>
                        <? if(in_array('de', $langs_cut)): ?> <option <? if($lang=='de'): echo 'selected'; endif; ?> value="-de">Deutsch</option><? endif;?>
                        <? if(in_array('fr', $langs_cut)): ?> <option <? if($lang=='fr'): echo 'selected'; endif; ?> value="-fr">Français</option><? endif;?>
                    </select>
                <?endif;?>
            </div>
        </footer>
    </div>