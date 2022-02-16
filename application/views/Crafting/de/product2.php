<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include '../include/head.php'; ?>
    <title>Euro.do</title>
</head>
<? include "../../views/reviewer_euro/product_view.php" ?>

<body>
    <header class="review-header" style="display: block;">
        <a href="index.php?id=<?=$_COOKIE['id']?>>">
            <img src="../img/logo.svg" alt="">
        </a>
    </header>

    <main class="review-product">
        <section class="container">
            <div class="step step-1" <? if (!isset($_GET['stars'])) : ?>style="display:block;" <? endif; ?>>
                <p class="title step-1 bs">Wie würden Sie das Produkt bewerten?</p>
                <div class="stars">
                    <input id="star-5" type="radio" name="star" value="5">
                    <label for="star-5"></label>
                    <input id="star-4" type="radio" name="star" value="4">
                    <label for="star-4"></label>
                    <input id="star-3" type="radio" name="star" value="3">
                    <label for="star-3"></label>
                    <input id="star-2" type="radio" name="star" value="2">
                    <label for="star-2"></label>
                    <input id="star-1" type="radio" name="star" value="1">
                    <label for="star-1"></label>
                </div>
                <img class="product-img" src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                <p><b>* Bitte senden Sie Ihr ehrliches Feedback, um Ihr KOSTENLOSES Produkt zu bekommen! <br>* KEINE Kreditkarte oder Zahlungsoption erforderlich, nur Ihre hilfreiche Meinung.</b></p>
            </div>
            <div class="step step-2" <? if (isset($_GET['stars']) && (!isset($_GET['s'])) && ($_GET['stars'] == 'star-1' || $_GET['stars'] == 'star-2' || $_GET['stars'] == 'star-3')) : ?>style="display:block;" <? endif; ?>>
                <form action="../../views/reviewer_euro/send_low_reit.php" method="POST" class="feedback-textarea">
                    <div class="stars">
                        <input disabled id="star-5" type="radio" <? if ($_GET['stars'] == 'star-5') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="5">
                        <label disabled for="star-5"></label>
                        <input disabled id="star-4" type="radio" <? if ($_GET['stars'] == 'star-4') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="4">
                        <label disabled for="star-4"></label>
                        <input disabled id="star-3" type="radio" <? if ($_GET['stars'] == 'star-3') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="3">
                        <label disabled for="star-3"></label>
                        <input disabled id="star-2" type="radio" <? if ($_GET['stars'] == 'star-2') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="2">
                        <label disabled for="star-2"></label>
                        <input disabled id="star-1" type="radio" <? if ($_GET['stars'] == 'star-1') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="1">
                        <label disabled for="star-1"></label>
                        <input type="hidden" name="stars" value="<?= $_GET['stars'] ?>">
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
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
            </div>
            <div class="step step-3" <? if (isset($_GET['stars']) && ($_GET['stars'] == 'star-4' || $_GET['stars'] == 'star-5')) : ?>style="display:block;" <? endif; ?>>
                <span id="asin" style="display: none;"><?=$product['asin']?></span>
                <span id="amazon-url" style="display: none;">www.amazon<?= $_COOKIE['marketplace_link'] ?></span>
                <p class="title bs">Vielen Dank für die Bewertung unseres Produkts!</p>
                <p>Bitte schreiben Sie eine ehrliche Bewertung - ob es sich um eine 5-Sterne- oder eine 1-Sterne-Bewertung handelt, Ihr Feedback ist für alle anderen Amazon-Kunden und unsere Produktentwicklung sehr wertvoll.</p>
                <p class="under bs">Folgendes als Nächstes können Sie erwarten:</p>
                <p class="step-desc"><b class="future bs">Schritt 1.</b> Fügen Sie einen Link oder einen Screenshot Ihres Feedbacks hinzu.</p>
                <form action="../../views/reviewer_euro/send_hight_reit.php" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                    <div class="stars" style="<? if (isset($_GET['s'])) : ?>display: none;<? endif; ?>">
                        <input id="star-5" type="radio" <? if ($_GET['stars'] == 'star-5') {
                                                            echo 'checked';
                                                        } ?> name="star" value="5">
                        <input disabled id="star-5" type="radio" <? if ($_GET['stars'] == 'star-5') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="5">
                        <label disabled for="star-5"></label>
                        <input disabled id="star-4" type="radio" <? if ($_GET['stars'] == 'star-4') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="4">
                        <label disabled for="star-4"></label>
                        <input disabled id="star-3" type="radio" <? if ($_GET['stars'] == 'star-3') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="3">
                        <label disabled for="star-3"></label>
                        <input disabled id="star-2" type="radio" <? if ($_GET['stars'] == 'star-2') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="2">
                        <label disabled for="star-2"></label>
                        <input disabled id="star-1" type="radio" <? if ($_GET['stars'] == 'star-1') {
                                                                        echo 'checked';
                                                                    } ?> name="star" value="1">
                        <label disabled for="star-1"></label>
                        <input type="hidden" name="stars" value="<?= $_GET['stars'] ?>">
                    </div>
                    <div>
                        <div class="link-file " style="<? if (isset($_GET['s'])) : ?>display: none;<? endif; ?> ">
                            <div>
                                <input type="text" name="link" placeholder="Fügen Sie den Link ein">
                                <button class="btn-blue js-success" value="link" name="choice" type="submit">Link senden</button>
                            </div>
                            <div class="or">oder</div>
                            <div class="input-file">
                                <div class="file-name">
                                    <input type="file" name="file">
                                    <span style="white-space: nowrap;">Datein wählen</span>
                                </div>
                                <button class="btn-blue js-success" value="screen" name="choice" type="submit">Screenshot senden</button>
                            </div>
                        </div>
                        <div class="link-file-success" style="<? if (isset($_GET['s']) && $_GET['s'] == 'hight') : ?>display: block;<? endif; ?>">
                            <img width="64px" src="../img/check.svg" alt="">
                            <p class="bs">Wir haben eine Bestätigung erhalten</p>
                            <a href="product.php?stars=<?= $_GET['stars'] ?>" class="js-again">Nochmal senden</a>
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
            <div class="step step-4" style="<? if (isset($_GET['s']) && $_GET['s'] == 'low') : ?>display: block;<? endif; ?>">
                <p class="thank-title">Vielen Dank!</p>
                <p class="title bs">Ihre Bewertung wurde veröffentlicht!</p>
                <p class="under bs">Folgendes als Nächstes können Sie erwarten:</p>
                <p class="step-desc"><b class="future bs">Schritt 1.</b> Wir überprüfen die von Ihnen angegebene Bestellnummer, um Ihren Kauf zu bestätigen. Wenn etwas nicht stimmt, werden wir Sie per E-Mail kontaktieren.</p>
                <p class="step-desc"><b class="future bs">Schritt 2.</b> Erweiterte Lieferzeit: Aufgrund von COVID-19 kann es bis zu 30-35 Werktage dauern, bis Ihr Geschenk eintrifft. Wir entschuldigen uns für die Unannehmlichkeiten und ergreifen alle erforderlichen Maßnahmen, um diese Situation zu lösen.</p>
                <p class="step-desc future"><b>Kontaktieren Sie uns jederzeit unter <br><a href="mailto:support@eurodo.es">support@eurodo.es</a></b></p>
            </div>
        </section>
    </main>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>