<? if (isset($route_lang)) {
    $form_link = '/' . $reviewer['opinion'] . '-' . $route_lang . '/review/' . $stars;
} else {
    $form_link = '/' . $reviewer['opinion'] . '/review/' . $stars;
}
?>
<div id="full-page">
    <header id="header">
        <img class="fluid-img header-img1 review-top-img1 header-img-extra cl" src='<?= $baseURL ."/img/immmg1.png" ?>' alt="image">
        <div class="header-container no-bottom no-bottom2">
            <div class="container">
                <a href="<?=$index_url?>" class="logo">
                    <img src='<?= $baseURL . "/img/logo2.svg" ?>' class="fluid-img" alt="Logo">
                </a>
            </div>
        </div>
        <img src='<?= $baseURL . "/img/immmg2.png" ?>' alt="" class="fluid-img header-img2 review-top-img2 cl">
    </header>
        <div class="review-page">
            <div class="container">
                <div class="main no-pad main-no-pad main-no-pad2">
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
                        <input type="hidden" name="stars" value="<?= $stars ?>">
                    </div>
                    <h1 class="main-title main-title-extra main-title-extra666">
                        Vielen Dank für die Bewertung unseres Produkts!
                    </h1>
                    <p class="main-desc main-desc-extra review-extra-title review-extra-title-extra cld cld2">Bitte
                        schreiben Sie eine ehrliche Bewertung - ob es sich um eine 5-Sterne- oder eine
                        1-Sterne-Bewertung handelt, Ihr
                        Feedback ist für alle anderen Amazon-Kunden und unsere Produktentwicklung sehr wertvoll.
                    </p>
                </div>
                <div class="thanks-container">
                    <h1 class="main-title main-title-extra">
                        Folgendes als Nächstes können Sie erwarten:
                    </h1>
                    <div class="thanks-text thanks-text111">
                        <span>Schritt 1.</span>
                        Fügen Sie einen Link oder einen Screenshot Ihres Feedbacks hinzu.
                    </div>
                <form action="<?= $form_link ?>" method="POST" class="feedback-textarea">
                    <input type="text" class="link-input-texxxt" name='link' placeholder="Fügen Sie den Link ein">
                    <button type="submit" name='choice' value="link" class="link-btnn">Link senden</button>
                </form>                                             
                    <div class="orrr-txt">oder</div>
                <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                    <div class="d-flex choose-file-cont">
                            <label for="files" class="choose--file d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                                    <path d="M6.14613 12.6511C5.47733 13.4175 5.47733 14.6593 6.14613 15.4252C6.81493 16.1916 7.89927 16.1916 8.56807 15.4252L15.0517 8" stroke="#E30824" stroke-miterlimit="10" stroke-linecap="round" />
                                    <path d="M11.2046 4.66511L2.8698 13.138C1.55114 14.4786 1.55114 16.654 2.87022 17.9946C4.18929 19.3351 6.32835 19.3351 7.647 17.9946L18.0722 7.39659C19.0611 6.39127 19.0611 4.76022 18.0722 3.75447C17.0825 2.74829 15.4776 2.74872 14.4888 3.75447L6.00493 12.3788" stroke="#E30824" stroke-miterlimit="10" stroke-linecap="round" />
                                </svg>
                                <span>Datein wählen</span>
                                <input type="file" id="files" name="file" class="input-file">

                            </label>
                            <button type="submit" name=choice value="screen" class="link-btnn link-btnn2">Screenshot senden</button>
                        </div>
                        <div class="thanks-text">
                            <span>Schritt 2. </span>
                            Wir überprüfen die von Ihnen angegebene Bestellnummer, um Ihren Kauf zu bestätigen. Wenn etwas
                            nicht stimmt,
                            werden wir Sie per E-Mail kontaktieren.
                        </div><br /><br />
                        <div class="thanks-text">
                            <span>Step Schritt 3. Erweiterte Lieferzeit: </span>
                            Aufgrund von COVID-19 kann es bis zu 30-35 Werktage dauern, bis Ihr Geschenk
                            eintrifft. Wir entschuldigen uns für die Unannehmlichkeiten und ergreifen alle erforderlichen
                            Maßnahmen, um diese
                            Situation zu lösen.
                        </div>
                    </div>
                </form>

                <p class="main-desc main-desc-extra review-txt review-txt444">Die wertvollsten Bewertungen für unsere
                    Community haben drei Gemeinsamkeiten:</p>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Schreiben Sie mindestens 2 Sätze:</span>Kurze Bewertungen, die
                        nur Dinge wie "Ich liebe es" oder "Ich hasse es" sagen, sind
                        für andere Kunden nicht sehr nützlich. Bitte schreiben Sie ein paar Sätze, in denen erklärt
                        wird, was Ihnen an dem
                        Produkt gefallen oder nicht gefallen hat.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Fügen Sie ein oder mehrere Bilder hinzu:</span> Ja, wir wissen,
                        dass es ein Klischee ist, aber ein Bild sagt wirklich mehr als
                        tausend Worte. Selbst wenn es sich nur um eine kurze Fotoaufnahme mit Ihrem Telefon handelt,
                        können andere Kunden besser
                        verstehen, was sie kaufen und wie das Produkt aussieht.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Seien Sie ehrlich:</span> Wir mögen keine gefälschten,
                        voreingenommenen Bewertungen. Am wichtigsten ist also, dass Sie Ihre
                        Bewertung ehrlich halten.</span>
                </div>
            </div>
            <img src='<?= $baseURL . "/img/immmg3.png" ?>' class="fluid-img footer-left-img" alt="">
</div>
</div>