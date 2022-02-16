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
                <h1 class="main-title main-title-extra">CHOISISSEZ UNE COULEUR OU UNE OPTION QUE VOUS AVEZ ACHETÉE POUR
                    OBTENIR UN PRODUIT GRATUIT</h1>
                <p class="main-desc main-desc-extra main-desc-extra555 cld2">Pour obtenir votre cadeau spécial, nous
                    avons besoin de vos commentaires honnêtes sur nos produits afin que nous
                    puissions les améliorer à l'avenir.<br> Si vous ne voyez pas la couleur de votre produit ou que vous
                    avez des erreurs,
                    contactez-nous à l'adresse support@eurodo.es
                </p>
                <div class="main-desc-last-txt">* Aucune commission, aucune information de carte de crédit requise.
                </div>
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
                <p class="footer-txt">Copyright © 2020 EURODO - Tous droits réservés</p>
            </div>
        </footer>
    </div>
