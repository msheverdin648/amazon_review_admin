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
            <div class="link-file-success">
                <img width="64px" src='<?=$baseURL."/img/check.svg"?>' alt="">
                <p class="bs">Wir haben eine Bestätigung erhalten</p>
                <a href="<?= $form_link ?>" class="js-again">Nochmal senden</a>
            </div>
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