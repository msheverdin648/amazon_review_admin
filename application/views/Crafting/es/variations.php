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
                <img src='<?=$baseURL."/img/logo.svg"?>' alt="">
            </a>
        </header>
            <section class="choose-color">
                <div class="container">
                    <p class="title upper">ELIGE EL COLOR QUE COMPRASTE OBTENGA UN PRODUCTO GRATIS</p>
                    <p>Para recibir su REGALO especial, necesitamos sus comentarios honestos sobre nuestros productos para poder mejorarlos en el futuro. <br>Si no ve el color de su producto o tiene algún error, contáctenos en support@eurodo.es</p>
                    <p class="light">* Sin tarifas, no se requiere información de tarjeta de crédito.</p>
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
                <p>Copyright © 2020 EURODO - Todos los derechos reservados</p>
            </div>
        </footer>