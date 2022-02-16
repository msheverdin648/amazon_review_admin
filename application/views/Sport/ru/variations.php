<? if(isset($route_lang)){                       
    $link='/'.$reviewer['opinion'].'-'.$route_lang.'/product';
    }else{
        $link ='/'.$reviewer['opinion'].'/product';
    }
?>
<? if(isset($route_lang)){                       
    $url='/'.$reviewer['opinion'].'-'.$route_lang.'/variate';
    }else{
        $url ='/'.$reviewer['opinion'].'/variate';
    }
?>

   <div id="full-page">
        <header id="header">
            <img class="fluid-img header-img1" src='<?=$baseURL."/img/kkk.png"?>' alt="image">
            <div class="header-container">
                <div class="container">
                    <a href="<?=$index_url?>" class="logo">
                        <img src='<?=$baseURL."/img/logo.svg"?>' class="fluid-img" alt="Logo">
                    </a>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="main no-pad">
                <h1 class="main-title main-title-extra">ВЫБЕРИТЕ ЦВЕТ ИЛИ ВАРИАНТ, КОТОРЫЙ ВЫ ПРИОБРЕЛИ,<br />
                    ЧТО БЫ ПОЛУЧИТЬ БЕСПЛАТНЫЙ ПРОДУКТ</h1>
                <p class="main-desc main-desc-extra main-desc-extra555 cld2">Чтобы получить ваш специальный ПОДАРОК,
                    нам нужны ваши честные отзывы о наших продуктах, чтобы мы могли улучшать их в
                    будущем.<br>
                    Если вы не видите цвет вашего продукта или у вас есть какие-либо ошибки, свяжитесь с нами по адресу
                    support@eurodo.es
                </p>
                <div class="main-desc-last-txt">* Никаких комиссий, информация о кредитной карте не требуется.</div>
            </div>
        </div>
        <div class="dumbbell">
            <div class="row dumbbell-container gift-container">
                <? foreach($prodvars as $prodvar):?>
                    <div class="dumbbell-item d-flex">
                    <div class="dumbbell-img">
                        <img src="<?=$prodvar['img']?>" class="fluid-img" alt="product-photo">
                    </div>
                    
                    <a >
                        <button data-href="<?=$link?>" class="dumbbell-btn" data-url="<?=$url?>" data-value="<?=$prodvar['id']?>"><?=$prodvar['name']?></button>
                    </a>
                </div>
                <? endforeach; ?>
            </div>
            <img src='<?=$baseURL."/img/aaa.png"?>' class="dumbbell-image-down" alt="">
        </div>
        <footer id="footer">
            <div class="container">
                <p class="footer-txt">Copyright © 2020 EURODO - Все права защищены</p>
            </div>
        </footer>
    </div>