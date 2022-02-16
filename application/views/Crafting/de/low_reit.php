<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}?>
<header class="review-header" style="display: block;">
    <a href="<?=$index_url?>">
        <img src='<?=$baseURL."/img/logo.svg"?>' alt="">
    </a>
</header>
<main class="review-product">
    <section class="container">
        <div class="step" >
                <form action="<?=$form_link?>" method="POST" class="feedback-textarea">
                <div class="stars">
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
                    <input type="hidden" name="stars" value="<?= $stars ?>">
                </div>
                    <p class="title bs">Überprüfen Sie unser Produkt, um Ihr 100% kostenloses Produkt zu erhalten!</p>
                    <p>Bitte schreiben Sie eine ehrliche Bewertung - ob es sich um eine 5-Sterne- oder eine 1-Sterne-Bewertung handelt, Ihr Feedback ist für alle anderen Amazon-Kunden und für unsere Produktentwicklung sehr wertvoll.</p>
                    <textarea name="low_review" required placeholder="Bitte schreiben Sie hier Ihr Feedback."></textarea>
                    <button class="btn-blue btn-block " type="submit">Teilen die Bewertung</button>
                    <div class="review-bottom">
                        <p class="bs">Die wertvollsten Bewertungen für die Community haben zwei Gemeinsamkeiten:</p>
                        <ul class="check">
                            <li><b class="future bs">Schreiben Sie mindestens 2 Sätze:</b> Kurze Bewertungen, die nur Dinge wie "Ich liebe es" oder "Ich hasse es" sagen, sind für andere Kunden nicht sehr nützlich. Bitte schreiben Sie ein paar Sätze, in denen erklärt wird, was Ihnen an dem Produkt gefallen oder nicht gefallen hat.</li>
                            <li><b class="future bs">Seien Sie ehrlich:</b> Wir mögen keine gefälschten, voreingenommenen Bewertungen. Am wichtigsten ist also, dass Sie Ihre Bewertung ehrlich halten.</li>
                        </ul>
                    </div>
                </form>
            </div>
    </section>
</main>