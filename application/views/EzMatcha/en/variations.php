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
                <h2 class="content-title">CHOOSE THE COLOR OR VARIANT YOU BOUGHT TO GET YOUR FREE PRODUCT</h2>
                <div class="content-subtitle">
                    <p>In order to receive your Special GIFT, we need your honest feedback about our products so we can improve them in the future.</p>
                    <p>If you don't see the color of your product or experience any errors, please contact us at <a href="mailto:support@eurodo.es">support@eurodo.es</a> </p>
                </div>
                <div class="content-nofees">*No fees, No credit card info required.</div>
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
                <p class="footer-txt text-center">Copyright © 2020 EURODO - All Rights Reserved</p>
            </div>

        </footer>
    </div>
