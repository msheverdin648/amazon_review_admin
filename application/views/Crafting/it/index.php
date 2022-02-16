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
                    <p class="title upper bs">Che prodotto hai comprato?</p>
                    <p class="text-center">Non vedi il prodotto che hai comprato? <a class="under" href="mailto:support@eurodo.es">Contattaci a support@eurodo.es</a></p>
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
                    <p class="subtitle bs">Nessuna spesa di spedizione | Nessun costo nascosto | Non è richiesta la carta di credito</p>
                    <p><b>* Condizioni che si applicano:</b> <br>Limitato ad un prodotto gratuito per un account Amazon per famiglia. L'offerta è disponibile solo per i clienti che hanno acquistato il prodotto a prezzo pieno tramite il nostro venditore ufficiale su Amazon. per avere i requisiti, i partecipanti accettano di inviarci la loro esperienza con il prodotto acquistato in precedenza che hanno utilizzato attivamente per almeno 14 giorni.</p>
                </div>
            </section>
        </main>
        
        <footer>
            <div class="container">
                <p>Copyright © 2020 EURODO - tutti i diritti riservati</p>
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
