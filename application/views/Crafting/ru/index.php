<? if(isset($route_lang)){                  
    $form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/form/';
    $url='/'.$reviewer['opinion'].'-'.$route_lang;
    }else{
        $form_link = '/'.$reviewer['opinion'].'/form/';
        $url = '/'.$reviewer['opinion'];
    }
    ?>
<header>
    <a href="<?= $index_url ?>">
        <img src='<?= $baseURL . "/img/logo.svg" ?>' alt="">
    </a>
</header>
<section class="what-product">
    <div class="container">
        <p class="title upper">Какой продукт вы купили?</p>
        <p class="text-center">Купили не эти товары? <a class="under" href="mailto:support@eurodo.es">Свяжитесь с нами support@eurodo.es</a></p>
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
        <p class="subtitle">Бесплатная доставка | Без комиссий | Не требуется банковская карта</p>
        <p><b>* Применяются условия:</b> <br>Ограничено одним бесплатным продуктом на учетную запись Amazon на семью. Предложение действительно только для клиентов, которые приобрели наш товар по полной цене у нашего официального продавца на Amazon.com. Чтобы пройти квалификацию, участники соглашаются отправить нам свой опыт работы с ранее приобретенным продуктом, который они активно использовали в течение как минимум 14 дней.</p>
    </div>
</section>
</main>

<footer>
    <div class="container">
        <p>Copyright © 2020 EURODO - Все права защищены</p>
        <div class="select">
            <? if (isset($langs_cut)) : ?>
                <select class="lang">
                    <? if (in_array('ru', $langs_cut)) : ?> <option <? if ($lang == 'ru') : echo 'selected';
                                                                    endif; ?> value="-ru">Русский</option><? endif; ?>
                    <? if (in_array('en', $langs_cut)) : ?> <option <? if ($lang == 'en') : echo 'selected';
                                                                    endif; ?> value="-en">English</option><? endif; ?>
                    <? if (in_array('es', $langs_cut)) : ?> <option <? if ($lang == 'es') : echo 'selected';
                                                                    endif; ?> value="-es">Español</option><? endif; ?>
                    <? if (in_array('it', $langs_cut)) : ?> <option <? if ($lang == 'it') : echo 'selected';
                                                                    endif; ?> value="-it">Italiano</option><? endif; ?>
                    <? if (in_array('de', $langs_cut)) : ?> <option <? if ($lang == 'de') : echo 'selected';
                                                                    endif; ?> value="-de">Deutsch</option><? endif; ?>
                    <? if (in_array('fr', $langs_cut)) : ?> <option <? if ($lang == 'fr') : echo 'selected';
                                                                    endif; ?> value="-fr">Français</option><? endif; ?>
                </select>
            <? endif; ?>
        </div>
    </div>
</footer>