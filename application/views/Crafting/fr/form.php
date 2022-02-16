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
                        <p class="thanks-form__title">Merci pour votre achat!</p>
                        <p class="thanks-form__subtitle">Vous avez acheté cet article</p>
                        <div class="thanks-form__img"><img src="<?=$product['img']?>" alt=""></div>
                        <p class="thanks-form__desc"><?=$lang_product['product_fr']?></p>
                        <p class="thanks-form__desc2">
                        Acheté des produits peu ou pas appropriés?  
                            <a href="mailto:support@eurodo.es">Contactez-nous chez support@eurodo.es</a>
                        </p>
                    </div>
                </div>
            </section>
            <? endif; ?>
            <section class="fill-form">
                <div class="container">
                    <p class="title bs">Remplissez le formulaire et obtenez votre produit gratuit</p>
                    <p class="text-center">Livraison gratuite | Sans commissions | Carte bancaire non requise</p>
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
                                <input  required name="name" type="text"  class="bs" placeholder="Nom">
                                <input type="text"  required name="email"  class="bs" placeholder="e-mail">
                                <p class="adress-text">* Veuillez entrer l'adresse à laquelle vous souhaitez envoyer un cadeau</p>
                                <input type="text"  required name="address"  class="bs" placeholder="Adresse complète">
                                <input type="text"  required name="city"  class="bs" placeholder="Ville">
                                <input type="text"  required name="state" class="bs" placeholder="État / province">
                                <input type="text"  required name="index"  class="bs"  placeholder="Code postal">
                                <select required name="country" class="bs"> 
                                    <option>Pays</option>
                                    <option value="<?=$country?>"><?=$country?></option>
                                </select>
                                <input type="text"  required name="phone"  class="bs" placeholder="Numéro de téléphone">
                                <input type="text"  required name="number"  class="bs" placeholder="Numéro de commande Amazon">
                                <p class="amazon">* Vérifiez l'historique des commandes dans le compte <a class="under" href="#">Amazon</a>, dans votre boîte mail ou votre reçu, obtenu avec le produit. Par exemple 112-5465666-4343658</p>
                                
                                <select  required name="id_gift" class="choose-gift bs">
                                    <option>Choisissez le cadeau</option>
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
                                <button class="btn-blue" type="submit">Obtenir un cadeau</button>
                                    <!-- <a href="category.php" class="btn-blue">Obtenir un cadeau</a> -->
                                </div>
                                <p class="small">* Nous ne partageons jamais vos informations personnelles. Voici notre <a class="under" href="#">politique de confidentialité</a>.</p>
                                <p>* Pour passer à la qualification du produit, les participants acceptent de nous envoyer leur expérience avec le produit précédemment acquis, qu'ils utilisent activement au moins 14 jours.</p>
                                <input type="hidden" name="language" value="<?=$lang?>">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="container schema">
                <p class="schema-title bs">REMPLISSEZ LE FORMULAIRE ET OBTENEZ VOTRE PRODUIT GRATUIT</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step1.svg"?>' alt="">
                            <p class="name bs">1. REMPLISSEZ LE FORMULAIRE EN LIGNE </p>
                            <p>La première étape pour obtenir UN PRODUIT GRATUIT est de remplir le formulaire sur cette page. L'offre est valable uniquement pour les clients qui ont acheté nos produits au coût de notre vendeur officiel sur Amazon.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step2.svg"?>' alt="">
                            <p class="name bs">2. PARTAGEZ VOTRE EXPÉRIENCE</p>
                            <p>Après avoir rempli le formulaire, nous vous demanderons de partager votre expérience d'utilisation de notre produit. L'envoi de votre avis aidera les autres clients à prendre une décision d'achat plus correcte.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step3.svg"?>' alt="">
                            <p class="name bs">3. OBTENEZ UN CADEAU </p>
                            <p>Si vous faites une demande pour un CADEAU excellent, nous vous l'enverrons dans les 48 heures. Oui, nous allons payer le produit, ainsi que la livraison - c'est gratuit pour vous!</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bottom-text">
                <div class="container">
                    <p class="subtitle bs">Livraison gratuite | Sans commissions | Carte bancaire non requise</p>
                    <p><b>* Les conditions s’appliquent:</b> <br>Limité par un produit gratuit sur le compte Amazon sur la famille. La proposition n'est valable que pour les clients qui ont acheté nos produits à un coût de notre vendeur officiel sur Amazon. Pour passer à la qualification du produit, les participants acceptent de nous envoyer leur expérience avec le produit précédemment acquis, qu'ils utilisaient activement pendant au moins 14 jours.</p>
                </div>
            </section>
            
            <section class="asked-questions">
                <div class="container">
                    <p class="section-title bs">Questions fréquemment posées</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Est-ce que c`est VRAIMENT un bon plan? Ou dois-je payer?</p>
                            <p>Absolument aucun paiement. Nous ne demandons pas vos données de carte de crédit. Il n'y a pas de version d'évaluation, d'abonnements, de commissions cachées et de frais d'expédition. Nous couvrons tous les coûts. C'est vraiment gratuit.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Quel est le PIÈGE? Dois-je faire quelque chose?</p>
                            <p>La seule chose que nous demandons est de nous envoyer votre expérience des biens achetés. Votre expérience nous aidera à améliorer nos produits et aidera les autres clients à prendre une décision plus correcte.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Quelles sont les conditions de participation ?</p>
                            <p>L'offre n'est valable que pour les clients qui ont acheté nos produits à un coût sur Amazon. Vous devez profiter du produit pendant au moins 14 jours avant de partager votre expérience.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question bs">Combien de temps faut-il pour obtenir mon produit GRATUIT ?</p>
                            <p>Si vous avez le droit à un produit gratuit, nous l'enverrons dans les 48 heures. Vous recevrez un produit dans les 20-25 jours ouvrables.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <div class="container">
                <p>Copyright © 2020 EURODO - Tous droits réservés</p>
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
