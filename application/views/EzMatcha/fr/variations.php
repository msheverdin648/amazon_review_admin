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
                <h2 class="content-title">CHOISISSEZ UNE COULEUR OU UNE OPTION QUE VOUS AVEZ ACHETÉE POUR OBTENIR UN PRODUIT GRATUIT </h2>
                <div class="content-subtitle">
                    <p>Pour obtenir votre cadeau spécial, nous avons besoin de vos commentaires honnêtes sur nos produits afin que nous puissions les améliorer à l'avenir.</p>
                    <p>Si vous ne voyez pas la couleur de votre produit ou que vous avez des erreurs, contactez-nous à l'adresse <a href="mailto:support@eurodo.es">support@eurodo.es</a> </p>
                </div>
                <div class="content-nofees"> * Aucune commission, aucune information de carte de crédit requise.</div>
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
                <p class="footer-txt text-center">Copyright © 2020 EURODO - Tous droits réservés</p>
            </div>

        </footer>
    </div>
