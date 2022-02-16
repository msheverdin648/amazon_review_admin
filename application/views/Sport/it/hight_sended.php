<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}
?>
    <div id="full-page">
        <header id="header">
            <img class="fluid-img header-img1 review-top-img1 header-img-extra cl" src='<?=$baseURL."/img/immmg1.png"?>' alt="image">
            <div class="header-container no-bottom no-bottom2">
                <div class="container">
                    <a href="<?=$index_url?>" class="logo">
                        <img src='<?=$baseURL."/img/logo2.svg"?>' class="fluid-img" alt="Logo">
                    </a>
                </div>
            </div>
            <img src='<?=$baseURL."/img/immmg2.png"?>' alt="" class="fluid-img header-img2 review-top-img2 cl">
        </header>
        <div class="review-page">
            <div class="container">
                <div class="main no-pad main-no-pad main-no-pad2">
                <div class="stars stars2">
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
                    <input type="hidden" name="stars" value="<?=$stars?>">
                </div>
                    <h1 class="main-title main-title-extra main-title-extra666">
                        Grazie per lasciare una recensione al nostro prodotto!
                    </h1>
                    <p class="main-desc main-desc-extra review-extra-title review-extra-title-extra cld cld2">Per favore
                        scrivi una recensione onesta, sia che sia una recensione da 5 stelle che da 1 stella, la tua
                        opinione è molto
                        importante per tutti gli altri clienti di Amazon e lo sviluppo del nostro prodotto.
                    </p>
                </div>
                <div class="thanks-container">
                    <h1 class="main-title main-title-extra">
                        Ecco cos'aspettarsi dopo:
                    </h1>
                    <div class="thanks-text thanks-text111">
                        <span>Passo 1.</span>
                        Includi un link o uno screenshot del tuo feedback.
                    </div>
                    <img class="vekktor" src='<?=$baseURL."/img/Vector.png"?>' alt="">
                    <div class="thanks-text thanks-text222">Abbiamo ricevuto la conferma</div>
                    <a href="<?=$form_link?>" class="send-again">Invia di nuovo</a><br /><br />
                    <div class="thanks-text">
                        <span>Fase 2. </span>
                        Verificheremo l'ID (documento d'identità) del tuo ordine che hai fornito per confermare
                        l'acquisto. Per
                        accellerare il processo, puoi inviare uno screenshot a support@eurodo.es
                    </div><br /><br />
                    <div class="thanks-text">
                        <span>Fase 3. Extended Delivery Time: </span>
                        Tempi di consegna prolungati: a causa del COVID-19, potrebbero essere necessari fino a 30-35
                        giorni lavorativi
                        per l'arrivo del regalo. Ci scusiamo per l'inconveniente e stiamo adottando tutte le misure
                        necessarie per risolvere
                        questa situazione.
                    </div>
                </div>
                <p class="main-desc main-desc-extra review-txt review-txt444">Le recensioni più utili per la nostra
                    community hanno 3 caratteristiche in comune:</p>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Scrivi almeno 2 frasi:</span> le brevi recensioni che sono
                        dicono "mi piace" o "non mi piace" non sono molto utili agli altri
                        clienti. Per favore scrivi alcune frasi spiegando cosa ti è piaciuto e cosa non.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Includi una o più immagini:</span> Sì sappiamo che è un clichè,
                        ma un'immagine davvero vale più di mille parole. Anche se è
                        solo una rapida foto scattata con il tuo telefono, può aiutare gli altri clienti a capire cosa
                        stanno comprando e com'è
                        il prodotto.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z"
                                fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Sii onesto:</span> Non ci piacciono le recensioni false e piene
                        di pregiudizi. Quindi è molto importante che tu faccia una
                        recensione onesta..</span>
                </div>
            </div>
            <img src='<?=$baseURL."/img/immmg3.png"?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>
