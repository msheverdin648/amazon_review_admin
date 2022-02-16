<? if(isset($route_lang)){                  
    $form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/form/';
    $url='/'.$reviewer['opinion'].'-'.$route_lang;
    }else{
        $form_link = '/'.$reviewer['opinion'].'/form/';
        $url = '/'.$reviewer['opinion'];
    }
    ?>
    <header>
            <a href="<?=$index_url?>">
                <img src='<?=$baseURL."/img/logo.svg"?>' alt="">
            </a>
        </header>
            <section class="what-product">
                <div class="container">
                    <p class="title upper bs">Quel produit avez-vous acheté?</p>
                    <p class="text-center">Acheté des produits peu ou pas appropriés? <a class="under" href="mailto:support@eurodo.es">Contactez-nous chez support@eurodo.es</a></p>
                    <div class="items">
                    <? foreach ($products as $product) : ?>
                <div class="item">
                    <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                    <div class="item__block">
                        <div class="item__colors">
                            <? foreach ($prodvars as $prodvar) : ?>
                                <? if ($prodvar['parent_ASIN'] == $product['asin']) : ?>
                                    <div class="item__color"  style="background: <?print(preg_replace('%^\s+|\s+$%u', '', $prodvar['color']))?>;"></div>
                                <? endif; ?>
                            <? endforeach; ?>
                        </div>
                        <div class="item__weights">
                                <? foreach ($prodvars as $prodvar) : ?>
                                    <? if ($prodvar['parent_ASIN'] == $product['asin']) : ?>
                                        <? if (!empty(trim($prodvar['weight']))) : ?>
                                            <div class="item__weight"><?= $prodvar['weight'] ?></div>
                                        <? endif; ?>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                            <div class="item__weights">
                                <? foreach ($prodvars as $prodvar) : ?>
                                    <? if ($prodvar['parent_ASIN'] == $product['asin']) : ?>
                                        <? if (!empty(trim($prodvar['size']))) : ?>
                                            <div class="item__weight"><?= $prodvar['size'] ?></div>
                                        <? endif; ?>
                                    <? endif; ?>
                                <? endforeach; ?>
                            </div>
                        </div>
                        <a class="btn-blue product-btn" data-url="<?=$url?>" href="<?= $form_link ?>" data-value="<?= $product['id'] ?>"><?= $product['name'] ?></a>
                </div>
            <? endforeach; ?>
                    </div>
                </div>
            </section>
            
            <section class="bottom-text">
                <div class="container px-md-0">
                    <p class="subtitle bs">Livraison gratuite | Sans commissions | Carte bancaire non requise</p>
                    <p><b>* Les conditions s’appliquent:</b> <br>Limité par un produit gratuit sur le compte Amazon par la famille. La proposition n'est valable que pour les clients qui ont acheté nos produits de notre vendeur officiel sur Amazon. Pour passer à la qualification du produit, les participants acceptent de nous envoyer leur expérience avec le produit précédemment acquis, qu'ils utilisaient activement pendant au moins 14 jours.</p>
                </div>
            </section>
        </main>
        
        <footer>
            <div class="container">
                <p>Copyright © 2020 EURODO - Tous droits réservés</p>
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
            </div>
        </footer>
