<? if (isset($route_lang)) {
    $form_link = '/' . $reviewer['opinion'] . '-' . $route_lang . '/review/' . $stars;
} else {
    $form_link = '/' . $reviewer['opinion'] . '/review/' . $stars;
} ?>
<div class="full-page">
    <img src='<?= $baseURL . "/img/Group68.png" ?>' alt="" class="img1 hide-img2">
    <img src='<?= $baseURL . "/img/Group69.png" ?>' alt="" class="img2 hide-img2">
    
        <div class="page3">
            <div class="logo2">
                <a href="<?=$index_url?>"><img src='<?= $baseURL . "/img/logo.svg" ?>' width="349px" alt="Logo" class="logo-img2 img-fluid"></a>
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
                <input type="hidden" name="stars" value="<?= $stars ?>">
            </div>
            <h2 class="title3 title5">Grazie per lasciare una recensione al nostro prodotto!</h2>
            <p class="text4">
                Per favore scrivi una recensione onesta, sia che sia una recensione da 5 stelle che da 1 stella, la tua opinione è molto importante per tutti gli altri clienti di Amazon e lo sviluppo del nostro prodotto.
            </p>
            <h2 class="title3 title5 title-line">Ecco cos'aspettarsi dopo:</h2>
            <div class="title3 title5 step-title">Passo 1.<span> Includi un link o uno screenshot del tuo feedback.</span></div>
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
            <div class="d-flex choose-container">
                <input name='link' type="text" class="feedback feedback2" placeholder="Copia il link">
                <button type="submit" name='choice' value="link" class="feedback-btn feedback-btn2">Invia il link</button>
                <!-- <a href="index9.html" class="feedback-btn feedback-btn2">Отправить ссылку</a> -->
            </div>
            </form>
                <div class="text-or">o</div>
                    <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
        <div class="d-flex choose-container">
            <div class="d-flex">
                <label class="choose d-flex" for="choose">
                    <img class="choose-img" src='<?= $baseURL . "/img/choose.png" ?>' alt="">
                    <input name="file" type="file" id="choose" class="choose-file">
                    <span>Scegli il file</span>
                </label>
            </div>
            <button type="submit" name=choice value="screen" class="feedback-btn feedback-btn2 feedback-btn3">Invia uno screenshot</button>
            <!-- <a href="index9.html" class="feedback-btn feedback-btn2 feedback-btn3">Отправить скриншот</a> -->
        </div>
    </form>
                    
            <br/>
            <div class="title3 title5 step-title">Fase 2.<span> Verificheremo l'ID (documento d'identità) del tuo ordine che hai fornito per confermare l'acquisto. Se qualcosa non va, ti contatteremo tramite e-mail.</span>
            </div><br/>
            <div class="title3 title5 step-title">Fase 3. Tempi di consegna prolungati:
                <span> a causa del COVID-19, potrebbero essere necessari fino a 30-35 giorni lavorativi per l'arrivo del regalo. Ci scusiamo per l'inconveniente e stiamo adottando tutte le misure necessarie per risolvere questa situazione.
                </span>
            </div>
            <div class="content-title5">Le recensioni più utili per la nostra community hanno 3 caratteristiche in comune:</div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?= $baseURL . "/img/Vector.png" ?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Scrivi almeno 2 frasi: </span> le brevi recensioni che sono dicono "mi piace" o "non mi piace" non sono molto utili agli altri clienti. Per favore scrivi alcune frasi spiegando cosa ti è piaciuto e cosa non.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?= $baseURL . "/img/Vector.png" ?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Includi una o più immagini: </span> Sì sappiamo che è un clichè, ma un'immagine davvero vale più di mille parole. Anche se è solo una rapida foto scattata con il tuo telefono, può aiutare gli altri clienti a capire cosa stanno comprando
                    e com'è il prodotto.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?= $baseURL . "/img/Vector.png" ?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Sii onesto: </span> Non ci piacciono le recensioni false e piene di pregiudizi. Quindi è molto importante che tu faccia una recensione onesta.
                </div>
            </div>
        </div>
    </div>
