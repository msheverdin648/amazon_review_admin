<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include '../include/head.php'; ?>
    <title>Euro.do</title>
</head>

<body>
    <header class="review-header" style="display: block;">
        <a href="index.php?id=<?=$_COOKIE['id']?>">
            <img src="../img/logo.svg" alt="">
        </a>
    </header>
    <? include "../../views/reviewer_euro/product_view.php" ?>
    <main class="review-product">
        <section class="container">
            <div class="step step-1" <? if (!isset($_GET['stars'])) : ?>style="display:block;" <? endif; ?>>
                <p class="title step-1">Come valuteresti il prodotto?</p>
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
                <p><b>* Per favore invia il tuo feedback sincero per ricevere il tuo prodotto GRATUITO! <br> * NON è richiesta alcuna carta di credito o opzione di pagamento, solo la tua utile opinione.</b></p>
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
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
            </div>
            <div class="step step-3" <? if (isset($_GET['stars']) && ($_GET['stars'] == 'star-4' || $_GET['stars'] == 'star-5')) : ?>style="display:block;" <? endif; ?>>
                <span id="asin" style="display: none;"><?=$product['asin']?></span>
                <span id="amazon-url" style="display: none;">www.amazon<?= $_COOKIE['marketplace_link'] ?></span>
                <p class="title bs">Grazie per lasciare una recensione al nostro prodotto!</p>
                <p>Per favore scrivi una recensione onesta, sia che sia una recensione da 5 stelle che da 1 stella, la tua opinione è molto importante per tutti gli altri clienti di Amazon e lo sviluppo del nostro prodotto.</p>
                <p class="under bs">Ecco cos'aspettarsi dopo:</p>
                <p class="step-desc"><b class="future bs">Passo 1.</b> Includi un link o uno screenshot del tuo feedback.</p>
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
                    <div class="">
                    <div class="link-file " style="<? if (isset($_GET['s'])) : ?>display: none;<? endif; ?> ">
                        <div>
                            <input type="text" name="link" placeholder="Copia il link">
                            <button class="btn-blue js-success" value="link" name="choice" type="submit">Invia il link</button>
                        </div>
                        <div class="or">o</div>
                        <div class="input-file">
                            <div class="file-name">
                                <input type="file" name="file">
                                <span>Scegli il file</span>
                            </div>
                            <button class="btn-blue js-success" value="screen" name="choice" type="submit">Invia uno screenshot</button>
                        </div>
                    </div>
                    <div class="link-file-success" style="<? if (isset($_GET['s']) && $_GET['s'] == 'hight') : ?>display: block;<? endif; ?>">
                        <img width="64px" src="../img/check.svg" alt="">
                        <p class="bs">Abbiamo ricevuto la conferma</p>
                        <a href="product.php?stars=<?=$_GET['stars']?>"  class="js-again">Invia di nuovo</a>
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
            </div>
            <div class="step step-4" style="<? if(isset($_GET['s']) && $_GET['s']=='low'): ?>display: block;<? endif; ?>">
                <p class="thank-title bs">Grazie!</p>
                <p class="title bs">la tua recensione è stata pubblicata!</p>
                <p class="under bs">Ecco cos'aspettarsi dopo:</p>
                <p class="step-desc"><b class="future bs">Fase 1.</b> Verificheremo l'ID del tuo ordine che hai fornito per confermare l'acquisto. Se qualcosa non va, ti contatteremo tramite e-mail.</p>
                <p class="step-desc"><b class="future bs">Fase 2.</b> Tempi di consegna prolungati: a causa del COVID-19, potrebbero essere necessari fino a 30-35 giorni lavorativi per l'arrivo del regalo. Ci scusiamo per l'inconveniente e stiamo adottando tutte le misure necessarie per risolvere questa situazione.</p>
                <p class="step-desc future"><b>Contattaci in qualunque momento a<br><a href="mailto:support@eurodo.es">support@eurodo.es</a></b></p>
            </div>
        </section>
    </main>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>