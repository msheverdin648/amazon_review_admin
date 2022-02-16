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
            <p class="title bs">Grazie per lasciare una recensione al nostro prodotto!</p>
            <p>Per favore scrivi una recensione onesta, sia che sia una recensione da 5 stelle che da 1 stella, la tua opinione è molto importante per tutti gli altri clienti di Amazon e lo sviluppo del nostro prodotto.</p>
            <p class="under bs">Ecco cos'aspettarsi dopo:</p>
            <p class="step-desc"><b class="future bs">Passo 1.</b> Includi un link o uno screenshot del tuo feedback.</p>
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
                            <input type="text" name="link" placeholder="Copia il link">
                            <button class="btn-blue js-success" value="link" name="choice" type="submit">Invia il link</button>
                        </div>

                    </div>
                </div>
            </form>
            <div class="">
                <div class="link-file ">
                    <div class="or">o</div>
                </div>
            </div>
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                <div class="">
                    <div class="link-file ">
                        <div class="input-file">
                            <div class="file-name">
                                <input type="file" name="file">
                                <span>Scegli il file</span>
                            </div>
                            <button class="btn-blue js-success" value="screen" name="choice" type="submit">Invia uno screenshot</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
            </form>

            <p class="step-desc"><b class="future bs">Fase 2.</b> Verificheremo l'ID (documento d'identità) del tuo ordine che hai fornito per confermare l'acquisto. Se qualcosa non va, ti contatteremo tramite e-mail.</p>
            <br>
            <p class="step-desc"><b class="future bs">Fase 3.</b> Tempi di consegna prolungati: a causa del COVID-19, potrebbero essere necessari fino a 30-35 giorni lavorativi per l'arrivo del regalo. Ci scusiamo per l'inconveniente e stiamo adottando tutte le misure necessarie per risolvere questa situazione.</p>

            <div class="review-bottom">
                <p class="bs">Le recensioni più utili per la nostra community hanno 3 caratteristiche in comune:</p>
                <ul class="check">
                    <li><b class="future bs">Scrivi almeno 2 frasi:</b> le brevi recensioni che sono dicono "mi piace" o "non mi piace" non sono molto utili agli altri clienti. Per favore scrivi alcune frasi spiegando cosa ti è piaciuto e cosa non.</li>
                    <li><b class="future bs">Includi una o più immagini:</b> Sì sappiamo che è un clichè, ma un'immagine davvero vale più di mille parole. Anche se è solo una rapida foto scattata con il tuo telefono, può aiutare gli altri clienti a capire cosa stanno comprando e com'è il prodotto.</li>
                    <li><b class="future bs">Sii onesto:</b> Non ci piacciono le recensioni false e piene di pregiudizi. Quindi è molto importante che tu faccia una recensione onesta.</li>
                </ul>
            </div>
    </section>
</main>