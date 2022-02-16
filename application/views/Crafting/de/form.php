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
                        <p class="thanks-form__title">Vielen Dank für Ihren Kauf!</p>
                        <p class="thanks-form__subtitle">Sie haben diesen Artikel gekauft</p>
                        <div class="thanks-form__img"><img src="<?=$product['img']?>" alt=""></div>
                        <p class="thanks-form__desc"><?=$lang_product['product_en']?></p>
                        <p class="thanks-form__desc2">
                            Merken Sie den Artikel, den Sie gekauft haben, nicht an? 
                            <a href="mailto:support@eurodopadel.es">Kontaktieren Sie uns unter support@eurodo.es</a>
                        </p>
                    </div>
                </div>
            </section>
            <? endif; ?>
            <section class="fill-form">
                <div class="container">
                    <p class="title bs">Füllen Sie das Formular aus und bekommen Sie Ihr kostenloses Produkt</p>
                    <p class="text-center">Versandkostenfrei | Provisionsfrei | Keine Kreditkarte benötigt</p>
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
                                <input  required name="name" type="text"  class="bs" placeholder="Name">
                                <input type="text"  required name="email"  class="bs" placeholder="e-mail">
                                <p class="adress-text">* Bitte geben Sie die Adresse ein, an die das Geschenk gesendet werden soll.</p>
                                <input type="text"  required name="address"  class="bs" placeholder="Adresse">
                                <input type="text"  required name="city"  class="bs" placeholder="Stadt">
                                <input type="text"  required name="state" class="bs"  placeholder="Provinz">
                                <input type="text"  required name="index"  class="bs" placeholder="PLZ">
                                <select required name="country" class="bs"> 
                                    <option>Staat</option>
                                    <option value="<?=$country?>"><?=$country?></option>
                                </select>
                                <input type="text"  required name="phone"  class="bs" placeholder="Telefonnummer">
                                <input type="text"  required name="number"  class="bs" placeholder="Amazon Bestellnummer">
                                <p class="amazon">* Überprüfen Sie den Bestellverlauf Ihres <a class="under" href="#">Amazon-Kontos</a>, Ihre E-Mail-Adresse oder die Quittung, die Sie mit Ihrem Produkt erhalten haben. Z.B. 112-5465666-4343658</p>
                                <select  required name="id_gift" class="choose-gift bs">
                                    <option>Wählen Ihr Geschenk</option>
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
                                   <button class="btn-blue" type="submit">Bekommen Sie ein Geschenk</button>
                                    <!-- <a href="category.php" class="btn-blue">Bekommen Sie ein Geschenk</a> -->
                                </div>
                                <p class="small">* Wir werden Ihre persönlichen Daten niemals an Dritte weitergeben. Hier ist unsere <a class="under" href="#">Datenschutzerklärung</a>.</p>
                                <p>* Um sich zu qualifizieren, erklären sich die Teilnehmer damit einverstanden, uns ihre Erfahrungen mit dem zuvor gekauften Produkt zu senden, das sie mindestens 14 Tage lang aktiv verwendet haben.</p>
                            <input type="hidden" name="language" value="<?=$lang?>">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="container schema">
                <p class="schema-title upper bs">Füllen Sie das Formular aus und bekommen Sie Ihr kostenloses Produkt</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step1.svg"?>' alt="">
                            <p class="name bs">1. FÜLLEN SIE DAS ONLINE-FORMULAR AUS</p>
                            <p>Der erste Schritt, um Ihr KOSTENLOSES PRODUKT zu bekommen, ist das Ausfüllen des Formulars auf dieser Seite. Das Angebot gilt nur für Kunden, die das Produkt zum vollen Preis über unseren offiziellen Verkäufer bei Amazon gekauft haben.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step2.svg"?>' alt="">
                            <p class="name bs">2. TEILEN SIE IHRE ERFAHRUNG</p>
                            <p>Nach dem Ausfüllen des Formulars werden wir Sie nach Ihren Erfahrungen mit unserem Produkt fragen. Durch das Teilen Ihres Feedbacks können andere Kunden eine bessere Kaufentscheidung treffen.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step3.svg"?>' alt="">
                            <p class="name bs">3. BEKOMMEN SIE EIN GESCHENK</p>
                            <p>Wenn Sie sich für ein fantastisches Geschenk qualifizieren, versenden wir es innerhalb von 48 Stunden. Ja, wir zahlen für das Produkt und auch für den Versand - keine Kosten für Sie!</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bottom-text">
                <div class="container">
                    <p class="subtitle bs">Versandkostenfrei  | Provisionsfrei | Keine Kreditkarte benötigt</p>
                    <p><b>* Bedingungen gelten:</b> <br>Begrenzt auf ein kostenloses Produkt pro Amazon-Konto und Haushalt. Das Angebot gilt nur für Kunden, die das Produkt zum vollen Preis über unseren offiziellen Verkäufer bei Amazon gekauft haben. Um sich zu qualifizieren, erklären sich die Teilnehmer damit einverstanden, uns ihre Erfahrungen mit dem zuvor gekauften Produkt zu senden, das sie seit mindestens 14 Tagen aktiv verwenden.</p>
                </div>
            </section>
            
            <section class="asked-questions">
                <div class="container">
                    <p class="section-title bs">Häufig gestellte Fragen</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Ist es wirklich kostenlos? Oder muss ich zahlen?</p>
                            <p>Es gibt absolut keine Gebühren. Wir fragen zu keinem Zeitpunkt nach Ihren Kreditkartendaten. Es gibt keine Testversion, kein Abonnement, keine versteckten Gebühren, keine Versandkosten. Wir übernehmen alle Kosten. Dies ist wirklich kostenlos.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Was ist der Haken? Muss ich etwas tun</p>
                            <p>Wir bitten Sie lediglich, uns Ihre Erfahrungen mit dem Produkt zuzusenden. Wenn Sie Ihre Erfahrungen teilen, können wir unsere Produkte verbessern und anderen Kunden helfen, eine bessere Entscheidung zu treffen.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Was sind die Voraussetzungen, um sich zu qualifizieren?</p>
                            <p>Das Angebot gilt nur für Kunden, die das Produkt zum vollen Preis bei Amazon gekauft haben. Sie müssen das Produkt mindestens 14 Tage lang verwenden, bevor Sie Ihre Erfahrungen teilen können.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Wie lange dauert es, bis ich meinen kostenlosen Artikel bekomme?</p>
                            <p>Wenn Sie sich für ein KOSTENLOSES Produkt qualifizieren, versenden wir es innerhalb von 48 Stunden. Sie erhalten das Produkt innerhalb von 20-25 Werktagen.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <div class="container">
                <p>Copyright © 2020 EURODO - Alle Rechte vorbehalten</p>
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
