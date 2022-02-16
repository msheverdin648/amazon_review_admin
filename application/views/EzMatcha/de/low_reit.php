<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}?>
    <div class="full-page">
        <div class="page2">
            <div class="logo2">
                <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' width="349px" alt="Logo" class="logo-img2 img-fluid"></a>
            </div>
            <form action="<?=$form_link?>" method="POST" class="feedback-textarea">
                <div class="stars stars2">
                    <input disabled id="star-5" type="radio" <? if ($stars == 5) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="5">
                    <label disabled for="star-5"></label>
                    <input disabled id="star-4" type="radio" <? if ($stars == 4) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="4">
                    <label disabled for="star-4"></label>
                    <input disabled id="star-3" type="radio" <? if ($stars== 3) {
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
                    <input type="hidden" name="star" value="<?= $stars ?>">
                </div>
            <h2 class="title3 title4">Überprüfen Sie unser Produkt, um Ihr 100% kostenloses Produkt zu erhalten!</h2>
            <p class="text4">
                Bitte schreiben Sie eine ehrliche Bewertung - ob es sich um eine 5-Sterne- oder eine 1-Sterne-Bewertung handelt, Ihr Feedback ist für alle anderen Amazon-Kunden und für unsere Produktentwicklung sehr wertvoll.
            </p>
            
               <textarea required name="low_review" id="feedback" placeholder="Bitte schreiben Sie hier Ihr Feedback."></textarea>
                <button type="submit" class="feedback-btn">Teilen die Bewertung</button>
                <!-- <a href="index10.html" class="feedback-btn">Teilen die Bewertung</a> -->
            <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">

            </form>
            <h4 class="content-title4">Die wertvollsten Bewertungen für die Community haben zwei Gemeinsamkeiten:</h4>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Schreiben Sie mindestens 2 Sätze: </span>Kurze Bewertungen, die nur Dinge wie "Ich liebe es" oder "Ich hasse es" sagen, sind für andere Kunden nicht sehr nützlich. Bitte schreiben Sie ein paar Sätze, in denen erklärt wird, was Ihnen
                    an dem Produkt gefallen oder nicht gefallen hat.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts">
                    <span>Seien Sie ehrlich:</span> Wir mögen keine gefälschten, voreingenommenen Bewertungen. Am wichtigsten ist also, dass Sie Ihre Bewertung ehrlich halten.
                </div>
            </div>
        </div>
        <img src='<?=$baseURL."/img/goup67.png"?>' alt="" class="last-img img-fluid">
    </div>
