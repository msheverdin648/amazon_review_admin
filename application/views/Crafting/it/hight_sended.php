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
            
            <div class="link-file-success">
                <img width="64px" src='<?=$baseURL."/img/check.svg"?>' alt="">
                <p class="bs">Abbiamo ricevuto la conferma</p>
                <a href="<?= $form_link ?>"  class="js-again">Invia di nuovo</a>
            </div>
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