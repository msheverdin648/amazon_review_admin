<? if (isset($route_lang)) {
    $form_link = '/' . $reviewer['opinion'] . '-' . $route_lang . '/review/' . $stars;
} else {
    $form_link = '/' . $reviewer['opinion'] . '/review/' . $stars;
} ?>
<header class="review-header" style="display: block;">
    <a href="<?=$index_url?>">
        <img src='<?=$baseURL."/img/logo.svg"?>' alt="">
    </a>
</header>
<main class="review-product">
    <section class="container">
        <div class="step step-3">
            <span id="asin" style="display: none;"><?= $product['asin'] ?></span>
            <span id="amazon-url" style="display: none;">www.amazon<?= $_COOKIE['marketplace_link'] ?></span>
            <p class="title bs">Vielen Dank für die Bewertung unseres Produkts!</p>
            <p>Bitte schreiben Sie eine ehrliche Bewertung - ob es sich um eine 5-Sterne- oder eine 1-Sterne-Bewertung handelt, Ihr Feedback ist für alle anderen Amazon-Kunden und unsere Produktentwicklung sehr wertvoll.</p>
            <p class="under bs">Folgendes als Nächstes können Sie erwarten:</p>
            <p class="step-desc"><b class="future bs">Schritt 1.</b> Fügen Sie einen Link oder einen Screenshot Ihres Feedbacks hinzu.</p>
            <div class="stars">
                <input disabled id="5" type="radio" <? if ($stars == 5) {
                                                                echo 'checked';
                                                            } ?> name="star" value="5">
                <label disabled for="5"></label>
                <input disabled id="4" type="radio" <? if ($stars == 4) {
                                                                echo 'checked';
                                                            } ?> name="star" value="4">
                <label disabled for="4"></label>
                <input disabled id="3" type="radio" <? if ($stars == 3) {
                                                                echo 'checked';
                                                            } ?> name="star" value="3">
                <label disabled for="3"></label>
                <input disabled id="2" type="radio" <? if ($stars == 2) {
                                                                echo 'checked';
                                                            } ?> name="star" value="2">
                <label disabled for="2"></label>
                <input disabled id="1" type="radio" <? if ($stars == 1) {
                                                                echo 'checked';
                                                            } ?> name="star" value="1">
                <label disabled for="1"></label>
                <input type="hidden" name="stars" value="<?= $stars ?>">
            </div>
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                <div class="">
                    <div class="link-file ">
                        <div>
                            <input type="text" name="link" placeholder="Fügen Sie den Link ein">
                            <button class="btn-blue js-success" value="link" name="choice" type="submit">Link senden</button>
                        </div>

                    </div>
                </div>
            </form>
            <div class="">
                <div class="link-file ">
                    <div class="or">oder</div>
                </div>
            </div>
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                <div class="">
                    <div class="link-file ">
                    <div class="input-file">
                        <div class="file-name">
                            <input type="file" name="file">
                            <span  >Datein wählen</span>
                        </div>
                        <button class="btn-blue js-success" value="screen" name="choice" type="submit">Screenshot senden</button>
                    </div>
                    </div>
                </div>
                <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
            </form>
            <p class="step-desc"><b class="future bs">Schritt 2.</b> Wir überprüfen die von Ihnen angegebene Bestellnummer, um Ihren Kauf zu bestätigen. Wenn etwas nicht stimmt, werden wir Sie per E-Mail kontaktieren.</p>
            <br>
            <p class="step-desc"><b class="future bs">Schritt 3. Erweiterte Lieferzeit:</b> Aufgrund von COVID-19 kann es bis zu 30-35 Werktage dauern, bis Ihr Geschenk eintrifft. Wir entschuldigen uns für die Unannehmlichkeiten und ergreifen alle erforderlichen Maßnahmen, um diese Situation zu lösen.</p>

            <div class="review-bottom">
                <p class="bs">Die wertvollsten Bewertungen für unsere Community haben drei Gemeinsamkeiten:</p>
                <ul class="check">
                    <li><b class="future bs">Schreiben Sie mindestens 2 Sätze:</b> Kurze Bewertungen, die nur Dinge wie "Ich liebe es" oder "Ich hasse es" sagen, sind für andere Kunden nicht sehr nützlich. Bitte schreiben Sie ein paar Sätze, in denen erklärt wird, was Ihnen an dem Produkt gefallen oder nicht gefallen hat.</li>
                    <li><b class="future bs">Fügen Sie ein oder mehrere Bilder hinzu:</b> Ja, wir wissen, dass es ein Klischee ist, aber ein Bild sagt wirklich mehr als tausend Worte. Selbst wenn es sich nur um eine kurze Fotoaufnahme mit Ihrem Telefon handelt, können andere Kunden besser verstehen, was sie kaufen und wie das Produkt aussieht.</li>
                    <li><b class="future bs">Seien Sie ehrlich:</b> Wir mögen keine gefälschten, voreingenommenen Bewertungen. Am wichtigsten ist also, dass Sie Ihre Bewertung ehrlich halten.</li>
                </ul>
            </div>
        </div>
    </section>
</main>