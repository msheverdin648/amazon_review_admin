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
                        <p class="thanks-form__title">Спасибо за покупку!</p>
                        <p class="thanks-form__subtitle">Вы приобрели этот товар</p>
                        <div class="thanks-form__img"><img src="<?=$product['img']?>" alt=""></div>
                        <p class="thanks-form__desc"><?=$lang_product['product_ru']?></p>
                        <p class="thanks-form__desc2">
                            Купили не этот товар? 
                            <a href="mailto:support@eurodo.es">Свяжитесь с нами support@eurodo.es</a>
                        </p>
                    </div>
                </div>
            </section>
            <? endif; ?>
            <section class="fill-form">
                <div class="container">
                    <p class="title">Заполните форму и получите ваш беспатный продукт</p>
                    <p class="text-center">Бесплатная доставка | Без комиссий | Не требуется банковская карта</p>
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
                        <form class="<?=$form_link?>" action="" method="POST">                                
                                <input  required name="name" type="text" class="bs" placeholder="Имя">
                                <input type="text"  required name="email" class="bs" placeholder="e-mail">
                                <p class="adress-text">* Пожалуйста, введите адрес, по которому вы хотите отправить подарок</p>
                                <input type="text"  required name="address" class="bs" placeholder="Полный адрес">
                                <input type="text"  required name="city" class="bs" placeholder="Город">
                                <input type="text"  required name="state" class="bs" placeholder="Штат / провинция">
                                <input type="text"  required name="index" class="bs" placeholder="Индекс">
                                <input type="hidden" class="input-field" required name="variate" value="<? if($product['variate'] == 0 ): ?>0<? else: ?>1<? endif;?>">
                                <select required name="country" class="bs" >
                                    <option>Страна</option>
                                    <option value="<?=$country?>"><?=$country?></option>
                                </select>
                                <input type="text" class="bs"  required name="phone" placeholder="Телефонный номер">
                                <input type="text" class="bs"  required name="number" placeholder="№ заказа Amazon">
                                <p class="amazon">* Проверьте в <a class="under" href="#">Истории Заказов в Аккаунте Амазон</a>, в своей электронной почте или квитанции, полученной вместе с продуктом. Например 112-5465666-4343658</p>
                                <select  required name="id_gift" class="choose-gift">
                                    <option>Выберите подарок</option>
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
                                   <button class="btn-blue" type="sbmit">Получить подарок</button>
                                </div>
                                <p class="small">* Мы никогда никому не передадим вашу личную информацию. Вот наша <a class="under" href="#">политика конфиденциальности.</a>.</p>
                                <p>* Чтобы пройти квалификацию, участники соглашаются присылать нам свой опыт работы с ранее приобретенным продуктом, который они АКТИВНО ИСПОЛЬЗУЮТ НЕ МЕНЕЕ 14 ДНЕЙ.</p>
                                <input type="hidden" name="language" value="<?=$lang?>">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="container schema">
                <p class="schema-title upper">Заполните форму и получите ваш беспатный продукт</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <img src='<?=$baseURL."/img/step1.svg"?>' alt="">
                            <p class="name">1. ЗАПОЛНИТЕ ОНЛАЙН ФОРМУ</p>
                            <p>Первый шаг для получения БЕСПЛАТНОГО ПРОДУКТА - это заполнение формы на этой странице. Предложение действительно только для клиентов, купивших товар по полной цене у нашего официального продавца на Amazon.com.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <img src='<?=$baseURL."/img/step2.svg"?>' alt="">
                            <p class="name">2. ПОДЕЛИТЕСЬ ОПЫТОМ</p>
                            <p>После заполнения формы мы спросим вас о вашем опыте использования нашего товара. Отправка вашего отзыва поможет другим клиентам принять более правильное решение о покупке.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <img src='<?=$baseURL."/img/step3.svg"?>' alt="">
                            <p class="name">3. ПОЛУЧИТЕ ПОДАРОК</p>
                            <p>Если вы претендуете на отличный ПОДАРОК, мы отправим его в течение 48 часов. Да, мы оплатим товар, а также доставку - для Вас это ноль!</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bottom-text">
                <div class="container">
                    <p class="subtitle">Бесплатная доставка | Без комиссий | Не требуется банковская карта</p>
                    <p><b>* Применяются условия:</b> <br>Ограничено одним бесплатным продуктом на учетную запись Amazon на семью. Предложение действительно только для клиентов, которые приобрели наш товар по полной цене у нашего официального продавца на Amazon.com. Чтобы пройти квалификацию, участники соглашаются отправить нам свой опыт работы с ранее приобретенным продуктом, который они активно использовали в течение как минимум 14 дней.</p>
                </div>
            </section>
            
            <section class="asked-questions">
                <div class="container">
                    <p class="section-title">Часто задаваемые вопросы</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <p class="question">Это ДЕЙСТВИТЕЛЬНО бесплатно? Или мне нужно платить?</p>
                            <p>Абсолютно никаких оплат. Мы ни в коем случае не запрашиваем данные вашей кредитной карты. Нет пробной версии, подписки, скрытых комиссий и сборов за доставку. Мы покрываем все расходы. Это ДЕЙСТВИТЕЛЬНО БЕСПЛАТНО. </p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question">В чем подвох? Мне нужно что-то делать?</p>
                            <p>Единственное, о чем мы просим, - это прислать нам свой опыт купленного товара. Обмен вашим опытом поможет нам улучшить наши продукты и поможет другим клиентам принять более правильное решение.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question">Каковы УСЛОВИЯ для участия?</p>
                            <p>Предложение действительно только для клиентов, которые приобрели товар по полной цене на Amazon.com. Вам также необходимо товар не менее 14 дней, прежде чем поделиться своим опытом.</p>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="question">Сколько времени потребуется, чтобы получить мой бесплатный товар?</p>
                            <p>Если вы имеете право на БЕСПЛАТНЫЙ продукт, мы отправим его в течение 48 часов. Вы получите товар в течении 20-25 рабочих дней.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <div class="container">
                <p>Copyright © 2020 EURODO - Все права защищены</p>
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
