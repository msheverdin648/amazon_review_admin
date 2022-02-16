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
                        <p class="thanks-form__title">Thank you for your purchase!</p>
                        <p class="thanks-form__subtitle">You purchased this item</p>
                        <div class="thanks-form__img"><img src="<?=$product['img']?>" alt=""></div>
                        <p class="thanks-form__desc"><?=$lang_product['product_en']?></p>
                        <p class="thanks-form__desc2">
                            Don't see the item you bought?
                            <a href="mailto:support@eurodopadel.es">Contact us at support@eurodo.es</a>
                        </p>
                    </div>
                </div>
            </section>
            <? endif; ?>
            <section class="fill-form">
                <div class="container">
                    <p class="title">Fill out the form and get your free product</p>
                    <p class="text-center">No Shipping Charges | No Hidden Fees | No Credit Card Required</p>
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
                                <input  required name="name" type="text" class="bs" placeholder="Full Name">
                                <input type="text"  required name="email" class="bs" placeholder="e-mail">
                                <p class="adress-text">* Please input the address where you want the gift to be sent.</p>
                                <input type="text"  required name="address" class="bs" placeholder="Full Address">
                                <input type="text"  required name="city" class="bs" placeholder="City Name">
                                <input type="text"  required name="state" class="bs"placeholder="State / Province">
                                <input type="text"  required name="index" class="bs" placeholder="Zip Code">
                                <select required name="country" class="bs" >
                                    <option>Select Country</option>
                                    <option value="<?=$country?>"><?=$country?></option>
                                </select>
                                <input type="text"  required name="phone" class="bs" placeholder="Phone Number">
                                <input type="text"  required name="number" class="bs" placeholder="Amazon Order #">
                                <p class="amazon">* Check in your <a class="under" href="#">Amazon Account Order History</a>, in your email or in the receipt you received with your product. E.g. 112-5465666-4343658</p>
                                <select  required name="id_gift" class="choose-gift">
                                    <option>Choose your gift</option>
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
                                   <button class="btn-blue" type="submit">Get a gift</button>
                                    <!-- <a href="category.php" class="btn-blue">Get a gift</a> -->
                                </div>
                                <p class="small">* We will never share your personal information with anyone. Here is our <a class="under" href="#">privacy policy</a>.</p>
                                <p>* To qualify, participants agree to send us their experience with the previously purchased product that they have been ACTIVELY USING FOR AT LEAST 14 DAYS.</p>
                                <input type="hidden" name="language" value="<?=$lang?>">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="container schema">
                <p class="schema-title">FILL OUT THE FORM AND GET YOUR FREE PRODUCT</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step1.svg"?>' alt="">
                            <p class="name">1. FILL IN THE ONLINE FORM</p>
                            <p>The first step to receive your FREE PRODUCT is to complete the form on this page. The offer is valid only for customers that bought the product at full price through our official seller at Amazon.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step2.svg"?>' alt="">
                            <p class="name">2. SHARE YOUR EXPERIENCE</p>
                            <p>After filling the form we will ask about your experience with our product. Sharing your feedback will help other customers make a better purchase decision.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                        <img src='<?=$baseURL."/img/step3.svg"?>' alt="">
                            <p class="name">3. RECEIVE A GIFT</p>
                            <p>If you qualify for an Awesome GIFT, we will ship it within 48h. Yes, we will pay for the product and for shipping too - zero cost for you!</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bottom-text">
                <div class="container">
                    <p class="subtitle">No Shipping Charges | No Hidden Fees | No Credit Card Required</p>
                    <p><b>* Conditions apply:</b> <br>Limited to one free product per Amazon account per household. The offer is only available for customers that purchased the product at full price through our official seller at Amazon. To qualify, participants agree to send us their experience with the previously purchased product that they have been actively using for at least 14 days.</p>
                </div>
            </section>
            
            <section class="asked-questions">
                <div class="container">
                    <p class="section-title">Frequently Asked Questions</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <p class="question">Is it REALLY free? Or do I have to pay?</p>
                            <p>There are absolutely no charges. We're not asking for your credit card details at any point. There's no trial, no subscription, no hidden fees, no shipping fees. We cover all the costs. This is TRULY FREE. </p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question">What's the CATCH? Do I need to do something?</p>
                            <p>The only thing we ask is that you send us your experience with the product. Sharing your experience will help us improve our products and it will help other customers make a better decision.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question">What are the CONDITIONS to qualify?</p>
                            <p>The offer is only valid for customers who purchased the product at full price on Amazon. You also need to use the product for at least 14 days before sharing your experience.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question">HOW LONG will it take to receive my Free Item?</p>
                            <p>If you qualify for a FREE product we will ship it within 48h. You will receive the product within 20-25 business days.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <div class="container">
                <p>Copyright © 2020 EURODO - All Rights Reserved</p>
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
