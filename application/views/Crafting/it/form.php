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
                        <p class="thanks-form__title">Grazie per il tuo acquisto!</p>
                        <p class="thanks-form__subtitle">Hai comprato questo articolo</p>
                        <div class="thanks-form__img"><img src="<?=$product['img']?>" alt=""></div>
                        <p class="thanks-form__desc"><?=$lang_product['product_it']?></p>
                        <p class="thanks-form__desc2">
                            Non vedi il prodotto che hai comprato? 
                            <a href="mailto:support@eurodo.es">Contattaci a support@eurodo.es</a>
                        </p>
                    </div>
                </div>
            </section>
            <? endif; ?>
            <section class="fill-form">
                <div class="container">
                    <p class="title bs">Compila il modulo e ottieni il tuo prodotto gratuito</p>
                    <p class="text-center">Nessuna spesa di spedizione | Nessun costo nascosto | Non è richiesta la carta di credito</p>
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
                                <input  required name="name" type="text" class="bs"  placeholder="Nome completo">
                                <input type="text"  required name="email"  class="bs" placeholder="Indirizzo mail">
                                <p class="adress-text">* Per favore inserisci l'indirizzo presso cui vuoi che il regalo venga spedito.</p>
                                <input type="text"  required name="address" class="bs"  placeholder="Indirizzo completo">
                                <input type="text"  required name="city" class="bs"  placeholder="Nome della città">
                                <input type="text"  required name="state" class="bs" placeholder="Stato / Provincia">
                                <input type="text"  required name="index" class="bs"  placeholder="Codice Postale">
                                <select required name="country"  class="bs"> 
                                    <option>Seleziona il Paese</option>
                                    <option value="<?=$country?>"><?=$country?></option>
                                </select>
                                <input type="text"  required name="phone" class="bs"  placeholder="Numero di telefono">
                                <input type="text"  required name="number" class="bs"  placeholder="Ordine Amazon">
                                <p class="amazon">* Controlla nella cronologia dei tuoi ordini del tuo account di <a class="under" href="#">Amazon</a>, nella tua mail o nella ricevuta con il prodotto, es. 112-5465666-4343658</p>
                                <select  required name="id_gift"  class="choose-gift">
                                    <option>Scegli il regalo</option>
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
                                   <button class="btn-blue" type="sbmit"> Ottieni un regalo</button>
                                    <!-- <a href="category.php" class="btn-blue">Ottieni un regalo</a> -->
                                </div>
                                <p class="small">* Non condivideremo mai le tue informazioni personali con nessuno. Questa è la nostra politica della <a class="under" href="#">privacy</a>.</p>
                                <p>* Per averne diritto, i partecipanti sono d'accordo nell'inviarci la loro esperienza con il loro prodotto precedentemente acquistato che stanno usando in maniera attiva per almeno 14 giorni.</p>
                                <input type="hidden" name="language" value="<?=$lang?>">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="container schema">
                <p class="schema-title bs">COMPILA IL MODULO E OTTIENI IL PRODOTTO GRATUITO</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <img src='<?=$baseURL."/img/step1.svg"?>' alt="">
                            <p class="name bs">1. COMPILA IL MODULO</p>
                            <p>Il primo passo per ricevere il tuo PRODOTTO GRATUITO è compilare tutto il modulo su questa pagina. L'offerta è valida solo per i clienti che hanno acquistato il prodotto a prezzo pieno tramite il nostro venditore ufficiale su Amazon.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step2.svg"?>' alt="">
                            <p class="name bs">2. CONDIVIDI LA TUA ESPERIENZA</p>
                            <p>Dopo aver completato il modulo ti chiederemo la tua esperienza con il nostro prodotto. Nel condividere la tua opinione aiuterai gli altri clienti a prendere una migliore decisione.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step3.svg"?>' alt="">
                            <p class="name bs">3. RICEVI UN REGALO</p>
                            <p>Se ti candidi per un fantastico REGALO, te lo spediremo entro 48 ore. Sì, pagheremo il prodotto e anche la spedizione, zero costi per te!</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bottom-text">
                <div class="container">
                    <p class="subtitle bs">Nessuna spesa di spedizione | Nessun costo nascosto | Non è richiesta la carta di credito</p>
                    <p><b>* Condizioni che si applicano:</b> <br>Limitato ad un prodotto gratuito per un account Amazon per famiglia. L'offerta è disponibile solo per i clienti che hanno acquistato il prodotto a prezzo pieno tramite il nostro venditore ufficiale su Amazon. per avere i requisiti, i partecipanti accettano di inviarci la loro esperienza con il prodotto acquistato in precedenza che hanno utilizzato attivamente per almeno 14 giorni.</p>
                </div>
            </section>
            
            <section class="asked-questions">
                <div class="container">
                    <p class="section-title bs">Domande piú frequenti</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">È davvero gratuito? O devo pagare?</p>
                            <p>Non ci sono assolutamenti costi aggiunti. Non ti chiediamo per nessun motivo i dettagli della tua carta di credito. Nessuna prova, nessun abbonamento, nessun costo nascosto, nessun costo di spedizione. Copriamo tutti i costi. Questo è VERAMENTE GRATUITO.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Cos'è il "CATCH"? Devo fare qualcosa?</p>
                            <p>L'unica cosa che ti chiediamo è di inviarci la tua esperienza con il prodotto. Nel condividere la tua esperienza ci aiuterai nel migliorare i nostri prodotti e ciò aiuterà gli altri clienti a prendere una migliore decisione.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Quali sono le CONDIZIONI per averne diritto?</p>
                            <p>L'offerta è disponibile solo per i clienti che hanno acquistato il prodotto a prezzo pieno su Amazon. Devi inoltre usare il prodotto per almeno 14 giorni prima di condividere la tua esperienza.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">QUANTO ci metterò a ricevere il mio articolo gratuito?</p>
                            <p>Se ti candidi per un prodotto GRATUITO te lo manderemo in 48 ore. Riceverai il prodotto entro 20-25 giorni lavorativi.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <div class="container">
                <p>Copyright © 2020 EURODO - tutti i diritti riservati</p>
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
