<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}
?>
    <div class="full-page">
        <img src='<?=$baseURL."/img/Group68.png"?>' alt="" class="img1 hide-img2">
        <img src='<?=$baseURL."/img/Group69.png"?>' alt="" class="img2 hide-img2">
        <div class="page3">
            <div class="logo2">
                <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' width="349px" alt="Logo" class="logo-img2 img-fluid"></a>
            </div>
            <div class="stars stars2">
                    <input disabled id="star-5" type="radio" <? if ($stars == 5) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="5">
                    <label disabled for="star-5"></label>
                    <input disabled id="star-4" type="radio" <? if ($stars == 4) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="4">
                    <label disabled for="star-4"></label>
                    <input disabled id="star-3" type="radio" <? if ($stars == 3) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="3">
                    <label disabled for="star-3"></label>
                    <input disabled id="star-2" type="radio" <? if ($stars == 2) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="2">
                    <label disabled for="star-2"></label>
                    <input disabled id="star-1" type="radio" <? if ($stars == 1) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="1">
                    <label disabled for="star-1"></label>
                    <input type="hidden" name="stars" value="<?=$stars?>">
                </div>
            <h2 class="title3 title5">Vielen Dank f??r die Bewertung unseres Produkts!</h2>
            <p class="text4">
                Bitte schreiben Sie eine ehrliche Bewertung - ob es sich um eine 5-Sterne- oder eine 1-Sterne-Bewertung handelt, Ihr Feedback ist f??r alle anderen Amazon-Kunden und unsere Produktentwicklung sehr wertvoll.
            </p>
            <h2 class="title3 title5 title-line">Folgendes als N??chstes k??nnen Sie erwarten:</h2>
            <div class="title3 title5 step-title">Schritt 1. <span>F??gen Sie einen Link oder einen Screenshot Ihres Feedbacks hinzu.</span></div>
            <br/>
            <div class="text-center">
                <img src='<?=$baseURL."/img/vector-big.png"?>' alt="" class="big-vektor">
                <div class="recieved-txt">Wir haben eine Best??tigung erhalten</div>
                <a href="<?=$form_link?>" class="send-again">Nochmal senden</a>
            </div>
            <br/><br/>
            <div class="title3 title5 step-title">Schritt 2.<span> Wir ??berpr??fen die von Ihnen angegebene Bestellnummer, um Ihren Kauf zu best??tigen. Wenn etwas nicht stimmt, werden wir Sie per E-Mail kontaktieren.</span>
            </div><br/>
            <div class="title3 title5 step-title">Schritt 3. Erweiterte Lieferzeit:
                <span> Aufgrund von COVID-19 kann es bis zu 30-35 Werktage dauern, bis Ihr Geschenk eintrifft. Wir entschuldigen uns f??r die Unannehmlichkeiten und ergreifen alle erforderlichen Ma??nahmen, um diese Situation zu l??sen.
                </span>
            </div>
            <div class="content-title5">Die wertvollsten Bewertungen f??r unsere Community haben drei Gemeinsamkeiten:</div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Schreiben Sie mindestens 2 S??tze: </span> Kurze Bewertungen, die nur Dinge wie "Ich liebe es" oder "Ich hasse es" sagen, sind f??r andere Kunden nicht sehr n??tzlich. Bitte schreiben Sie ein paar S??tze, in denen erkl??rt wird, was Ihnen
                    an dem Produkt gefallen oder nicht gefallen hat.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>F??gen Sie ein oder mehrere Bilder hinzu:</span> Ja, wir wissen, dass es ein Klischee ist, aber ein Bild sagt wirklich mehr als tausend Worte. Selbst wenn es sich nur um eine kurze Fotoaufnahme mit Ihrem Telefon handelt, k??nnen andere
                    Kunden besser verstehen, was sie kaufen und wie das Produkt aussieht.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Seien Sie ehrlich: </span> Wir m??gen keine gef??lschten, voreingenommenen Bewertungen. Am wichtigsten ist also, dass Sie Ihre Bewertung ehrlich halten.
                </div>
            </div>
        </div>
    </div>
