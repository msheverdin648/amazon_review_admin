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
                    <p class="title bs">WÄHLEN SIE DIE FARBE, DIE SIE GEKAUFT HABEN UM IHR KOSTENLOSES PRODUKT ZU BEKOMMEN</p>
                    <p>Um Ihr spezielles GESCHENK zu bekommen, benötigen wir Ihr ehrliches Feedback zu unseren Produkten, damit wir sie in Zukunft verbessern können. <br>Wenn Sie die Farbe Ihres Produkts nicht sehen oder Fehler feststellen, kontaktieren Sie uns bitte unter support@eurodo.es.</p>
                    <p class="light">* Versandkostenfrei  | Provisionsfrei | Keine Kreditkarte benötigt</p>
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
                <p>Copyright © 2020 EURODO - Alle Rechte vorbehalten</p>
            </div>
        </footer>
