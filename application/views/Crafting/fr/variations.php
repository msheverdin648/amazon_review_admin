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
                    <p class="title bs">CHOISISSEZ UNE COULEUR OU UNE OPTION QUE VOUS AVEZ ACHETÉE POUR OBTENIR UN PRODUIT GRATUIT </p>
                    <p>Pour obtenir votre cadeau spécial, nous avons besoin de vos commentaires honnêtes sur nos produits afin que nous puissions les améliorer à l'avenir. <br>Si vous ne voyez pas la couleur de votre produit ou que vous avez des erreurs, contactez-nous à l'adresse support@eurodo.es</p>
                    <p class="light">* Aucune commission, aucune information de carte de crédit requise.</p>
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
                <p>Copyright © 2020 EURODO - Tous droits réservés</p>
            </div>
        </footer>
