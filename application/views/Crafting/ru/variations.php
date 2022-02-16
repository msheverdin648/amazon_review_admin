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

<header>
    <a href="<?=$index_url?>">
        <img src='<?= $baseURL . "/img/logo.svg" ?>' alt="">
    </a>
</header>
<section class="choose-color">
    <div class="container">
        <p class="title upper">ВЫБЕРИТЕ ЦВЕТ ИЛИ ВАРИАНТ, КОТОРЫЙ ВЫ ПРИОБРЕЛИ, ЧТО БЫ ПОЛУЧИТЬ БЕСПЛАТНЫЙ ПРОДУКТ</p>
        <p>Чтобы получить ваш специальный ПОДАРОК, нам нужны ваши честные отзывы о наших продуктах, чтобы мы могли улучшать их в будущем. <br>Если вы не видите цвет вашего продукта или у вас есть какие-либо ошибки, свяжитесь с нами по адресу support@eurodo.es</p>
        <p class="light">* Никаких комиссий, информация о кредитной карте не требуется.</p>
        <div class="row justify-content-around">
            <? foreach ($prodvars as $prodvar) : ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="item">
                        <img src="<?= $prodvar['img'] ?>" alt="">
                        <a href="<?= $link ?>" data-url="<?=$url?>" data-href="<?=$link?>" class="btn-blue dumbbell-btn" data-value="<?= $prodvar['id'] ?>"><?= $prodvar['name'] ?> </a>
                    </div>
                </div>
            <? endforeach; ?>

        </div>
    </div>
</section>
</main>

<footer>
    <div class="container">
        <p>Copyright © 2020 EURODO - Все права защищены</p>
    </div>
</footer>