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
                    <p class="title upper">CHOOSE THE COLOR OR VARIANT YOU BOUGHT TO GET <br>YOUR FREE PRODUCT</p>
                    <p>In order to receive your Special GIFT, we need your honest feedback about our products so we can improve them in the future. <br> If you don't see the color of your product or experience any errors, please contact us at support@eurodo.es </p>
                    <p class="light">*No fees, No credit card info required.</p>
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
                <p>Copyright © 2020 EURODO - All Rights Reserved</p>
            </div>
        </footer>
