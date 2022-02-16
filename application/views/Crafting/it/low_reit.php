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
        <div class="step ">
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea">
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
                <p class="title bs">Recensisci il nostro prodotto per ricevere il tuo prodotto gratuito al 100%!</p>
                <p>Per favore scrivi una recensione onesta, sia che sia una recensione da 5 stelle che da 1 stella, la tua opinione è molto importante per tutti gli altri clienti di Amazon e lo sviluppo del nostro prodotto.</p>
                <textarea name="low_review" required placeholder="Per favore scrivi il tuo feedback qui."></textarea>
                <button class="btn-blue btn-block " type="submit">Condividi la mia recensione</button>
                <div class="review-bottom">
                    <p class="bs">Le recensioni più utili per la community hanno due caratteristiche in comune:</p>
                    <ul class="check">
                        <li><b class="future bs">Scrivi almeno 2 frasi:</b> le brevi recensioni che sono dicono "mi piace" o "non mi piace" non sono molto utili agli altri clienti. Per favore scrivi alcune frasi spiegando cosa ti è piaciuto e cosa non.</li>
                        <li><b class="future bs">Sii onesto:</b> Non ci piacciono le recensioni false e piene di pregiudizi. Quindi è molto importante che tu faccia una recensione onesta.</li>
                    </ul>
                </div>
            </form>
        </div>
    </section>
</main>