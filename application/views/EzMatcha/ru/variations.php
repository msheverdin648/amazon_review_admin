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

   <div class="full-page">
        <header id="header">
            <div class="container">
                <div class="logo text-center">
                    <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' alt="Logo" class="logo-img img-fluid"></a>
                </div>
            </div>
        </header>
        <div class="content content--color">
            <div class="container text-center">
                <h2 class="content-title">ВЫБЕРИТЕ ЦВЕТ ИЛИ ВАРИАНТ, КОТОРЫЙ ВЫ ПРИОБРЕЛИ, ЧТО БЫ ПОЛУЧИТЬ БЕСПЛАТНЫЙ ПРОДУКТ</h2>
                <div class="content-subtitle">
                    <p>Чтобы получить ваш специальный ПОДАРОК, нам нужны ваши честные отзывы о наших продуктах, чтобы мы могли улучшать их в будущем.</p>
                    <p>Если вы не видите цвет вашего продукта или у вас есть какие-либо ошибки, свяжитесь с нами по адресу <a href="mailto:support@eurodo.es">support@eurodo.es</a> </p>
                </div>
                <div class="content-nofees"> * Никаких комиссий, информация о кредитной карте не требуется.</div>
            </div>
            <div class="product-container product-container--pt35">
                <div class="container">
                    <div class="row">
                        <? foreach($prodvars as $prodvar):?>
                        <div class="product-item">
                            <img src="<?=$prodvar['img']?>" class="img-fluid" alt="product"><br/>
                            <a href="<?=$link?>" class="product-btn dumbbell-btn" data-href="<?=$link?>"  data-url="<?=$url?>" data-value="<?=$prodvar['id']?>"><?=$prodvar['name']?></a>
                        </div>
                         <? endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="container d-flex">
                <p class="footer-txt text-center">Copyright © 2020 EURODO - Все права защищены</p>
            </div>

        </footer>
    </div>
