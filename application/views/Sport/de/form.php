<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/form';
}else{
    $form_link ='/'.$reviewer['opinion'].'/form';
}
?>
    <div id="full-page">
    <header id="header">
            <img class="fluid-img header-img1 header-img-extra" src='<?=$baseURL."/img/1.png"?>' alt="image">
            <div class="header-container">
                <div class="container">
                    <a href="<?=$index_url?>" class="logo logo333">
                        <img src='<?=$baseURL."/img/logo.svg"?>' class="fluid-img" alt="Logo">
                    </a>
                </div>
            </div>
            <? if(isset($_SESSION['one_variation']) ): ?>
                        <div class="header__wrapper col-lg-8" data-v-78ac9c45="">
                        <h2 class="title header__title" data-v-78ac9c45="">
                             Vielen Dank für Ihren Kauf!
                        </h2>
                        <div class=" header__subtitle" data-v-78ac9c45="">
                            Sie haben diesen Artikel gekauft
                        </div>
                        <div class="header__item" data-v-78ac9c45="">
                            <div class="header__item-img" data-v-78ac9c45=""><img src="<?=$product['img']?>" alt="photo" data-v-78ac9c45=""></div>
                            <div class="header__item-name" data-v-78ac9c45="">
                            <?=$lang_product['product_de']?>
                            </div>
                            <div class="header__item-subname" data-v-78ac9c45="">
                                Merken Sie den Artikel, den Sie gekauft haben, nicht an? <a href="mailto:support@eurodopadel.es" data-v-78ac9c45="">support@eurodopadel.es</a></div>
                        </div>
                    </div>
                <? endif; ?>
        </header>
        <div class="container">
            <div class="main">
                <h1 class="main-title main-title-index2 main-title-extra">Füllen Sie das Formular aus und bekommen Sie
                    Ihr kostenloses Produkt
                </h1>
                <p class="main-desc-extra main-desc-extra666 cld2">Versandkostenfrei | Provisionsfrei | Keine
                    Kreditkarte benötigt</p>
            </div>
        </div>
        <div class="sport-products sport-products222">
            <div class="container sport-cont">
                <div class="d-flex sport-container">
                    <div class="sport-product-img d-flex">
                    <? foreach ($presents as $key => $present) : ?>
                            <div class="sport-item">
                                <div class="text-center">
                                    <img src="<?= $present['img'] ?>" class="sport-image fluid-img" alt="Sport image">
                                </div>
                                <h5 class="sport-item-title"><?= ($key + 1) . '. ' . $present['name'] ?><br></h5>
                            </div>
                        <? endforeach; ?>
                        <div class="sport-item">
                            <p class="sport-item-desc" style="padding-top:405px;">
                                * Beschränkt auf ein kostenloses Produkt pro Amazon-Konto und Haushalt. Das Angebot gilt
                                nur für Kunden, die das Produkt
                                zum vollen Preis über unseren offiziellen Verkäufer bei Amazon gekauft haben.
                            </p>
                        </div>
                    </div>
                    <div class="sport-form">
                    <form action="<?=$form_link?>" method='POST' id="form">
                            <input type="text" class="input-field" required name="name" placeholder="Name">
                            <input type="email" class="input-field" required name="email" placeholder="E-Mail">
                            <p class="form-required-txt">* Bitte geben Sie die Adresse ein, an die das Geschenk gesendet
                                werden soll.
                            </p>
                            <input type="text" class="input-field" required name="address" placeholder="Adresse">
                            <input type="text" class="input-field" required name="city" placeholder="Stadt">
                            <input type="text" class="input-field" required name="state" placeholder="Provinz">
                            <input type="tel" class="input-field" required name="index" placeholder="PLZ">
                            <div class="d-flex country-container">
                                <select id="country" class="input-field" name="country">
                                    <option value="<?=$country?>">Staat</option>
                                    <option value="<?=$country?>"><?=$country?></option>
                                </select>
                                <span class="country-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 7"
                                        fill="none">
                                        <path d="M6.5 7L0.870834 0.25L12.1292 0.25L6.5 7Z" fill="#3E5131"></path>
                                    </svg>
                                </span>
                            </div>
                            <input type="tel" class="input-field" required name="phone" placeholder="Telefonnummer">
                            <input type="text" class="input-field" required name="number" placeholder="Amazon Bestellnummer">
                            <p class="form-required-txt form-required-txt-extra">
                                * Überprüfen Sie den <a href="#"> Bestellverlauf Ihres Amazon-Kontos</a>, Ihre
                                E-Mail-Adresse oder die Quittung, die Sie mit Ihrem
                                Produkt erhalten haben. Z.B. 112-5465666-4343658
                            </p>
                            <div class="d-flex country-container free-gift-container">
                                <select class="input-field" name="id_gift">
                                    <option>Wählen Ihr Geschenk</option>
                                    <? foreach ($presents as $key => $present) : ?>
                                        <optgroup label="<?= ($key + 1) . ". " . $present['name'] ?>">
                                            <? if ($present['variate'] == 1) : ?>
                                                <? foreach ($presvars as $presvar) : ?>
                                                    <? if ($presvar['parent_ASIN'] == $present['asin']) : ?>
                                                        <option  value="presvar-<?= $presvar['id'] ?>">
                                                            <?= $presvar['name'] ?> <?= $presvar['size'] ?> <?= $presvar['weight'] ?> 
                                                        </option>
                                                    <? endif; ?>
                                                <? endforeach; ?>
                                            <? else : ?>
                                                <option value="present-<?= $present['id'] ?>"><?= $present['name'] ?></option>
                                            <? endif; ?>
                                        </optgroup>
                                    <? endforeach; ?>
                                </select>
                                <div id="free-gift" class="free-gift input-field" name="free-gift" style="display: none;">
                                    Wählen Ihr Geschenk
                                </div>
                                <span class="country-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 7"
                                        fill="none">
                                        <path d="M6.5 7L0.870834 0.25L12.1292 0.25L6.5 7Z" fill="#3E5131"></path>
                                    </svg>
                                </span>
                                <div class="select-body" style="display: none;">
                                    <div class="select__child choose-gift-desc">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="8"
                                                viewBox="0 0 11 8" fill="none">
                                                <path
                                                    d="M5.19982 8.00002L0.913574 4.04463L2.05091 2.70138L5.19982 5.61257L9.58274 0L10.6664 1L5.19982 8.00002Z"
                                                    fill="#2E2E2E"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            Wählen Ihr Geschenk
                                        </span>
                                    </div>
                                    <div class="select__child select-choose">Springseil Orange</div>
                                    <div class="select__child select-choose active">Springseil Grün</div>
                                </div>
                            </div>
                            <div class="form-btn-parent">
                                <button class="form-btn">Bekommen Sie ein Geschenk</button>
                            </div>
                            <p class="form-required-txt privacy-policy-txt">
                                * Wir werden Ihre persönlichen Daten niemals an Dritte weitergeben. Hier ist unsere
                                <a href="#">Datenschutzerklärung.</a>.
                            </p>
                            <p class="form-required-txt form-required-txt-extra">
                                * Um sich zu qualifizieren, erklären sich die Teilnehmer damit einverstanden, uns ihre
                                Erfahrungen mit dem zuvor
                                gekauften Produkt zu senden, das sie mindestens 14 Tage lang aktiv verwendet haben.
                            </p>
                            <input type="hidden" name="language" value="<?=$lang?>">
                        </form>
                    </div>
                </div>
            </div>
            <img src='<?=$baseURL."/img/sss.png"?>' class="fluid-img content-extra-img" alt="">
        </div>
        <div class="container">
            <h3 class="content-title spoort-title">Füllen Sie das Formular aus und bekommen Sie Ihr kostenloses Produkt
            </h3>
            <div class="row free-product-container">
                <div class="free-product">
                    <div class="product-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 226 226" fill="none">
                            <path
                                d="M139.178 179.13C139.584 180.079 139.836 180.745 140.145 181.385C142.564 186.416 145.07 191.412 147.379 196.492C148.226 198.355 149.294 199.034 151.373 198.981C161.228 198.717 168.802 202.896 173.467 211.551C175.051 214.49 175.673 218.047 176.251 221.406C176.816 224.654 175.369 225.978 172.015 225.978C149.509 225.978 127 225.978 104.489 225.978H54.4179C50.5253 225.978 49.5234 224.932 49.7264 221.123C50.3752 208.995 60.2084 199.162 72.4072 199.087C76.3131 199.061 78.2815 197.927 79.6806 194.334C81.446 189.762 83.8778 185.437 86.0051 180.997C86.2522 180.485 86.4464 179.938 86.7509 179.108H68.7264C49.7485 179.108 30.7706 179.143 11.7928 179.108C4.79302 179.103 0 174.112 0 167.042C0 115.702 0 64.3705 0 13.0459C0 4.4884 4.47525 0 13.0418 0H212.927C221.556 0 225.969 4.41337 225.969 13.0018C225.969 64.1145 225.969 115.226 225.969 166.336C225.969 172.607 223.047 177.104 217.87 178.552C216.304 178.947 214.692 179.13 213.077 179.095C189.245 179.13 165.412 179.142 141.579 179.13H139.178ZM219.005 136.179C219.049 135.261 219.115 134.475 219.115 133.69C219.115 109.128 219.115 84.569 219.115 60.013C219.115 44.2043 219.124 28.3956 219.141 12.5869C219.141 10.4906 218.863 8.47809 216.785 7.5248C215.561 7.04971 214.252 6.83332 212.941 6.88927C187.131 6.86868 161.322 6.86868 135.515 6.88927H12.8564C8.31054 6.88927 6.89382 8.29273 6.89382 12.79C6.89382 53.0988 6.89382 93.3943 6.89382 133.677V136.17L219.005 136.179ZM219.005 142.799H196.937L66.9831 142.834C47.7889 142.834 28.586 142.87 9.39625 142.79C7.32634 142.79 6.80555 143.426 6.83645 145.399C6.94237 152.164 6.87176 158.93 6.87617 165.7C6.87617 171.093 7.97071 172.201 13.2801 172.201H125.382H213.611C217.636 172.201 219.084 170.784 219.097 166.781C219.119 159.649 219.097 152.513 219.097 145.381C219.097 144.626 219.04 143.902 218.987 142.799H219.005ZM57.0969 218.903H168.916C167.654 211.431 160.826 205.831 152.944 205.756C145.741 205.685 138.534 205.756 131.318 205.756C112.128 205.756 92.9401 205.756 73.7533 205.756C65.4339 205.8 58.4739 211.277 57.0969 218.903ZM140.873 198.822C140.516 197.979 140.291 197.379 139.991 196.806C137.342 191.483 134.606 186.213 132.046 180.829C131.402 179.505 130.621 179.064 129.178 179.064C118.147 179.126 107.113 179.133 96.0766 179.086C94.8496 179.086 94.2582 179.487 93.7507 180.569C91.1556 186.085 88.481 191.562 85.8462 197.062C85.6079 197.56 85.4666 198.099 85.2151 198.8L140.873 198.822Z"
                                fill="#271E63" />
                            <path
                                d="M130.775 72.8604C130.775 89.4017 130.775 105.943 130.775 122.484C130.775 126.068 129.773 127.065 126.212 127.065L27.6238 127.105C22.8882 127.105 21.9305 126.156 21.9305 121.452C21.9305 88.5161 21.9408 55.5805 21.9614 22.645C21.9614 19.1849 22.9765 18.1301 26.3748 18.1301C59.6788 18.1301 92.9827 18.1301 126.287 18.1301C129.817 18.1301 130.784 19.154 130.784 22.7862C130.784 39.4717 130.784 56.1602 130.784 72.8515L130.775 72.8604ZM123.837 120.044V25.2313H28.8993V120.044H123.837Z"
                                fill="#271E63" />
                            <path
                                d="M172.566 80.1777C164.328 80.1777 156.089 80.1777 147.851 80.1777C144.607 80.1777 143.437 79.0214 143.437 75.8085C143.437 59.9204 143.437 44.0322 143.437 28.1441C143.437 24.684 144.408 23.6513 147.886 23.6424C164.578 23.616 181.271 23.616 197.966 23.6424C201.015 23.6424 202.039 24.7325 202.044 27.844C202.064 43.8027 202.064 59.76 202.044 75.7158C202.044 79.1009 200.98 80.1292 197.48 80.1292C189.205 80.1998 180.894 80.1822 172.566 80.1777ZM195.075 30.5979H150.499V73.4915H195.075V30.5979Z"
                                fill="#271E63" />
                            <path
                                d="M172.906 94.8875C180.697 94.8875 188.494 94.8875 196.297 94.8875C199.51 94.8875 200.711 96.0218 200.711 99.2612C200.749 107.126 200.749 114.989 200.711 122.851C200.711 126.015 199.581 127.061 196.395 127.065C180.741 127.089 165.088 127.098 149.435 127.092C146.346 127.092 145.22 125.931 145.212 122.793C145.188 114.849 145.188 106.905 145.212 98.9611C145.212 95.9423 146.306 94.8566 149.343 94.8522C157.207 94.8301 165.068 94.8522 172.933 94.8522C172.928 94.852 172.924 94.8528 172.92 94.8546C172.916 94.8565 172.912 94.8593 172.91 94.8628C172.907 94.8663 172.906 94.8703 172.905 94.8747C172.904 94.879 172.905 94.8834 172.906 94.8875ZM152.044 119.982H193.605V101.689H186.628C175.828 101.689 165.028 101.719 154.228 101.64C152.485 101.64 151.876 102.139 151.986 103.878C152.119 105.925 152.039 107.991 152.044 110.056C152.048 113.335 152.044 116.623 152.044 119.982Z"
                                fill="#271E63" />
                            <path
                                d="M101.708 157.037C101.779 154.029 103.032 151.171 105.195 149.081C107.359 146.991 110.259 145.837 113.267 145.871C119.336 145.968 124.446 151.246 124.332 157.297C124.243 160.302 122.984 163.154 120.823 165.245C118.663 167.336 115.771 168.5 112.764 168.489C106.726 168.388 101.607 163.079 101.708 157.037ZM117.42 157.129C117.394 155.983 116.93 154.89 116.125 154.075C115.319 153.259 114.232 152.783 113.086 152.742C111.902 152.758 110.771 153.236 109.933 154.073C109.096 154.911 108.618 156.042 108.602 157.226C108.617 157.813 108.748 158.391 108.987 158.927C109.226 159.463 109.568 159.947 109.995 160.35C110.421 160.753 110.923 161.068 111.472 161.277C112.021 161.485 112.605 161.583 113.192 161.565C113.763 161.553 114.325 161.428 114.847 161.197C115.369 160.967 115.84 160.635 116.233 160.222C116.626 159.808 116.934 159.321 117.137 158.788C117.341 158.255 117.437 157.686 117.42 157.116V157.129Z"
                                fill="#271E63" />
                            <path
                                d="M76.5471 42.8406C65.9548 42.8406 55.3625 42.8406 44.7701 42.8406C42.8944 42.8406 41.4203 42.3375 40.8819 40.3471C40.211 37.8712 41.7381 35.9778 44.598 35.9337C50.1104 35.8631 55.6317 35.8984 61.1397 35.9028C76.5779 35.9028 92.0148 35.916 107.45 35.9425C107.891 35.9425 108.333 35.9425 108.774 35.9425C111.303 36.0705 112.676 37.3636 112.592 39.5306C112.508 41.6975 111.219 42.8097 108.743 42.8097C100.141 42.8406 91.5308 42.8097 82.9422 42.8362L76.5471 42.8406Z"
                                fill="#271E63" />
                            <path
                                d="M76.7545 59.991C66.2461 59.991 55.7376 60.0439 45.2336 59.9248C43.82 59.8908 42.468 59.3397 41.4336 58.3757C40.8069 57.7093 40.7142 55.763 41.2438 54.9686C41.6473 54.4456 42.1549 54.012 42.7345 53.6952C43.3142 53.3784 43.9532 53.1854 44.6113 53.1282C51.3683 52.9516 58.1297 53.0311 64.8867 53.0311H107.212C107.799 53.0311 108.39 53.0002 108.977 53.0311C111.149 53.2076 112.649 54.7346 112.605 56.6942C112.561 58.6537 111.281 59.9115 108.937 59.9336C103.279 59.9866 97.6213 59.9601 91.9633 59.9645H76.7501C76.7501 59.9645 76.7545 59.9866 76.7545 59.991Z"
                                fill="#271E63" />
                            <path
                                d="M76.5956 111.658C66.0856 111.658 55.5787 111.658 45.0746 111.658C43.2739 111.658 41.6718 111.385 40.9966 109.412C40.1139 106.874 41.6321 104.818 44.5671 104.76C49.1218 104.668 53.6765 104.707 58.2488 104.703H107.834C108.2 104.703 108.571 104.681 108.937 104.703C111.118 104.871 112.627 106.362 112.618 108.326C112.618 110.409 111.294 111.601 108.787 111.614C101.148 111.65 93.5035 111.636 85.8638 111.645L76.5956 111.658Z"
                                fill="#271E63" />
                            <path
                                d="M76.834 94.5168C66.2417 94.5168 55.6582 94.5168 45.0835 94.5168C43.2829 94.5168 41.6808 94.2829 40.9923 92.3101C40.189 89.9975 41.4689 87.8967 43.914 87.7555C46.4782 87.6143 49.0557 87.6584 51.6287 87.654C70.4447 87.654 89.2593 87.654 108.072 87.654C110.893 87.654 112.283 88.5676 112.579 90.5183C112.936 92.8927 111.502 94.4506 108.805 94.4594C99.6162 94.4947 90.4318 94.4859 81.243 94.4947L76.834 94.5168Z"
                                fill="#271E63" />
                            <path
                                d="M76.8163 77.3929C66.3078 77.3929 55.7949 77.3929 45.2865 77.3664C44.2273 77.3664 42.762 77.3179 42.1971 76.6735C41.3777 75.6348 40.9483 74.3418 40.9834 73.0192C41.0716 71.3554 42.4707 70.5919 44.1346 70.5786C48.4686 70.5522 52.8041 70.5375 57.1411 70.5345H107.203C107.719 70.5345 108.231 70.5345 108.748 70.5345C111.263 70.636 112.645 71.9071 112.605 74.0652C112.565 76.2234 111.356 77.3046 108.783 77.3179C100.397 77.3576 92.0118 77.3488 83.6483 77.3576L76.8163 77.3929Z"
                                fill="#271E63" />
                            <path
                                d="M167.102 57.4974L183.662 41.8873C184.249 41.3356 184.8 40.7354 185.427 40.2411C186.681 39.2658 188.022 38.8024 189.399 40.0205C190.097 40.5791 190.551 41.3862 190.666 42.2725C190.781 43.1588 190.549 44.0553 190.017 44.7737C189.709 45.1804 189.363 45.5572 188.984 45.8991C182.452 52.1278 175.91 58.3492 169.358 64.5632C166.423 67.3436 164.631 67.1318 162.464 63.7953C160.209 60.3485 158.002 56.906 155.795 53.4415C154.087 50.767 154.215 48.9046 156.122 47.6732C158.028 46.4419 159.847 46.9848 161.599 49.5004C163.351 52.016 165.156 54.6773 167.102 57.4974Z"
                                fill="#E30824" />
                        </svg>
                    </div>
                    <h4 class="free-product-title">1. FÜLLEN SIE DAS ONLINE-FORMULAR AUS</h4>
                    <p class="free-product-desc">
                        Der erste Schritt, um Ihr KOSTENLOSES PRODUKT zu bekommen, ist das Ausfüllen des Formulars auf
                        dieser Seite. Das Angebot
                        gilt nur für Kunden, die das Produkt zum vollen Preis über unseren offiziellen Verkäufer bei
                        Amazon gekauft haben.
                    </p>
                </div>
                <div class="free-product">
                    <div class="product-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 229 226" fill="none">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M166.557 182.789C165.662 183.424 165.147 183.737 164.688 184.118C151.377 195.189 135.742 200.329 118.812 202.017C112.981 202.597 107.843 198.125 107.045 192.211C106.662 189.421 107.347 186.589 108.962 184.286C110.578 181.982 113.005 180.379 115.753 179.798C119.398 179.049 123.115 178.656 126.756 177.886C139.46 175.201 149.958 168.833 158.25 158.781C160.621 155.9 163.013 153.036 165.346 150.121C168.719 145.952 172.741 142.357 177.256 139.473C181.145 136.875 185.72 135.501 190.393 135.526C195.734 135.551 201.109 135.251 206.425 135.75C218.626 136.896 227.62 146.804 227.688 159.077C227.802 180.23 227.688 201.382 227.751 222.535C227.751 224.172 227.287 224.731 225.604 224.727C206.619 224.676 187.634 224.676 168.649 224.727C166.919 224.727 166.54 224.075 166.54 222.497C166.586 210.229 166.565 197.96 166.565 185.691C166.557 184.875 166.557 184.05 166.557 182.789Z"
                                    stroke="#271E63" stroke-width="6" stroke-miterlimit="10" />
                                <path
                                    d="M104.953 178.686C99.447 185.548 98.3291 192.761 103.392 200.841C88.0519 198.281 74.6232 192.744 62.6543 182.535C62.5953 183.805 62.5278 184.579 62.5278 185.357C62.5278 197.554 62.4814 209.75 62.5657 221.947C62.5657 223.986 62.1438 224.744 59.9121 224.731C41.2112 224.638 22.5076 224.638 3.80116 224.731C1.94064 224.731 1.26984 224.308 1.26984 222.286C1.33734 201.277 1.26984 180.268 1.33312 159.25C1.37953 145.95 11.8803 135.559 25.1571 135.517C28.5321 135.517 31.9072 135.75 35.2823 135.471C45.0827 134.65 52.778 138.897 59.3889 145.493C62.764 148.877 65.7763 152.625 68.7337 156.382C77.7157 167.805 89.1994 175.107 103.438 178.004C103.783 178.07 104.124 178.154 104.459 178.258C104.569 178.288 104.657 178.423 104.953 178.686Z"
                                    stroke="#271E63" stroke-width="6" stroke-miterlimit="10" />
                                <path
                                    d="M97.9071 63.3609C93.8613 63.3609 89.866 63.5005 85.8918 63.3059C83.601 63.1959 82.1497 63.9955 80.7364 65.7511C76.6272 70.8278 72.3535 75.8029 68.0798 80.7696C67.5904 81.3365 66.7466 81.6157 66.0674 82.0049C65.8058 81.2646 65.3248 80.5242 65.3122 79.7796C65.2405 75.0584 65.2194 70.3371 65.3122 65.6158C65.3375 63.9236 64.8312 63.2297 63.0256 63.3186C60.22 63.4582 57.406 63.3905 54.5878 63.344C46.4539 63.217 40.1931 57.2604 40.0623 49.1039C39.8823 37.9015 39.8823 26.6976 40.0623 15.4923C40.1678 7.21308 46.4665 1.26917 54.7439 1.26917C76.5301 1.26917 98.3164 1.26917 120.103 1.26917C128.464 1.26917 134.729 7.50922 134.902 15.9111C134.928 17.2479 134.81 18.5975 134.936 19.9259C135.109 21.7662 134.443 22.3796 132.569 22.3542C125.473 22.2611 118.36 22.5784 111.281 22.2484C102.94 21.8677 97.7806 28.1204 97.8776 35.6677C98.0126 44.7592 97.9071 53.8422 97.9071 63.3609Z"
                                    stroke="#271E63" stroke-width="6" stroke-miterlimit="10" />
                                <path
                                    d="M154.014 93.1101C153.634 92.357 153.381 91.4982 152.858 90.8637C149.955 87.3312 146.951 83.879 144.062 80.3338C143.643 79.7784 143.093 79.3353 142.463 79.0438C141.832 78.7522 141.139 78.6214 140.446 78.6628C132.228 78.7262 123.992 78.7051 115.787 78.6882C109.332 78.6882 104.818 74.4195 104.746 67.913C104.619 58.1912 104.619 48.4694 104.746 38.7476C104.826 32.3002 109.387 27.9851 115.812 27.9808C134.569 27.9639 153.328 27.9639 172.087 27.9808C178.669 27.9808 183.057 32.3087 183.12 38.9803C183.196 48.5695 183.196 58.1503 183.12 67.7226C183.065 74.4915 178.694 78.7008 171.914 78.722C167.206 78.7432 162.498 78.7855 157.794 78.6966C156.035 78.6628 155.452 79.3058 155.512 81.0319C155.613 84.0567 155.562 87.09 155.512 90.1191C155.44 90.8971 155.306 91.6682 155.111 92.4247L154.014 93.1101Z"
                                    stroke="#271E63" stroke-width="6" stroke-miterlimit="10" />
                                <path
                                    d="M171.197 103.521C171.207 96.6211 173.951 90.0074 178.824 85.1352C181.236 82.7228 184.099 80.8105 187.249 79.5076C190.399 78.2047 193.774 77.5367 197.181 77.5417C200.589 77.5467 203.961 78.2246 207.107 79.5367C210.253 80.8489 213.111 82.7695 215.517 85.1891C217.923 87.6086 219.83 90.4796 221.129 93.6381C222.428 96.7967 223.094 100.181 223.089 103.598C223.064 117.981 211.352 129.548 196.873 129.493C190.039 129.447 183.501 126.689 178.689 121.822C173.877 116.955 171.184 110.375 171.197 103.521V103.521Z"
                                    stroke="#271E63" stroke-width="6" stroke-miterlimit="10" />
                                <path
                                    d="M57.8279 103.454C57.8435 106.864 57.1877 110.244 55.8982 113.399C54.6087 116.555 52.7109 119.424 50.3134 121.843C47.916 124.261 45.0661 126.182 41.9272 127.494C38.7882 128.806 35.4219 129.484 32.0211 129.489C17.677 129.489 6.00759 117.931 5.96962 103.657C5.95632 100.242 6.61383 96.8587 7.90461 93.699C9.19539 90.5393 11.0942 87.6655 13.4925 85.2417C15.8908 82.8178 18.7418 80.8914 21.8826 79.5724C25.0233 78.2534 28.3924 77.5677 31.7975 77.5544C35.2026 77.541 38.5769 78.2004 41.7279 79.4947C44.8788 80.7891 47.7447 82.6931 50.1618 85.0981C52.579 87.503 54.5001 90.3619 55.8154 93.5114C57.1308 96.6608 57.8146 100.039 57.8279 103.454V103.454Z"
                                    stroke="#271E63" stroke-width="6" stroke-miterlimit="10" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="229" height="226" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h4 class="free-product-title">2. TEILEN SIE IHRE ERFAHRUNG</h4>
                    <p class="free-product-desc">
                        Nach dem Ausfüllen des Formulars werden wir Sie nach Ihren Erfahrungen mit unserem Produkt
                        fragen. Durch das Teilen
                        Ihres Feedbacks können andere Kunden eine bessere Kaufentscheidung treffen.
                    </p>
                </div>
                <div class="free-product">
                    <div class="product-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208 230" fill="none">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M61.2496 0C63.8776 0.666585 66.5574 1.17826 69.1196 2.03731C74.8223 3.95257 78.9829 8.06005 83.0778 12.2051C88.8134 18.026 92.7625 25.0861 96.641 32.1416C99.4054 37.1645 101.615 42.4925 104.074 47.6796C104.152 47.8108 104.242 47.9349 104.342 48.0505C105.179 45.938 105.94 43.8726 106.801 41.8493C110.016 34.2869 114.078 27.2971 120.242 21.664C124.684 17.6223 129.715 15.1484 135.869 14.6226C142.563 14.0405 148.562 15.5615 153.79 19.5187C158.491 23.0911 161.345 28.067 162.29 33.9724C163.339 40.5443 160.847 45.9803 156.917 51.0313C153.659 55.2233 149.192 57.7676 144.768 60.4198C140.753 62.8092 136.71 65.161 132.681 67.5269C132.418 67.6819 132.164 67.8508 131.68 68.156C132.197 68.1982 132.47 68.2358 132.747 68.2358H202.326C205.335 68.2358 206.943 69.1465 207.7 71.4185C207.926 72.2038 208.027 73.0195 208.001 73.836C208.02 87.2741 208.02 100.715 208.001 114.16C208.001 116.38 208.001 118.601 207.912 120.816C207.837 121.975 207.32 123.062 206.468 123.852C205.615 124.643 204.491 125.076 203.328 125.065C200.672 125.065 198.015 125.065 195.209 125.065V130.627C195.209 152.922 195.209 175.213 195.209 197.502C195.209 206.812 195.209 216.119 195.209 225.423C195.17 226.601 194.689 227.722 193.86 228.562C193.032 229.402 191.917 229.901 190.738 229.958H190.033C132.73 229.958 75.4256 229.97 18.1198 229.995C17.4171 230.012 16.7184 229.886 16.0656 229.626C15.4128 229.366 14.8195 228.977 14.3214 228.481C13.8233 227.986 13.4307 227.396 13.1673 226.745C12.9038 226.094 12.775 225.397 12.7885 224.695C12.8637 191.883 12.8794 159.071 12.8355 126.262C12.8355 125.919 12.8026 125.576 12.7791 125.079C10.0335 125.079 7.34438 125.107 4.65523 125.079C3.66909 125.088 2.7077 124.77 1.92162 124.176C1.13554 123.581 0.56917 122.743 0.311225 121.793C0.105939 120.921 0.0205298 120.026 0.0573547 119.131C0.0573547 104.109 0.104368 89.0877 0.0103416 74.066C0.0103416 70.3717 2.0319 68.1654 5.84467 68.1795C28.5238 68.2686 51.2029 68.2264 73.882 68.2264H74.9022C74.9022 68.1654 74.9445 68.1043 74.9633 68.0433C73.1721 67.1045 71.3621 66.1656 69.5897 65.1845C61.2308 60.5513 53.3326 55.2796 46.779 48.2241C42.5478 43.6613 39.2052 38.554 37.5174 32.4796C35.0116 23.4572 37.5174 15.5803 43.0555 8.43089C46.3182 4.20606 50.493 1.3895 55.782 0.323904C56.4167 0.215936 57.0748 0.117357 57.7236 0H61.2496ZM99.1233 220.306V125.14H22.5343V220.306H99.1233ZM185.491 220.306V125.13H108.902V220.306H185.491ZM9.71854 115.437H99.1139V77.9247H9.71854V115.437ZM108.916 77.9341V115.437H198.33V77.9247L108.916 77.9341ZM99.0434 67.6068C99.1059 66.9824 99.1059 66.3534 99.0434 65.729C98.3288 62.4431 97.7694 59.0914 96.7774 55.8711C94.1541 47.3557 90.0498 39.5069 85.4566 31.9022C82.2739 26.6728 79.1569 21.3917 74.5543 17.1998C71.8134 14.7024 69.1431 12.1347 65.5325 10.8625C63.0408 9.98469 60.535 9.30872 57.8694 9.7312C54.3951 10.2851 51.9739 12.4116 49.99 15.1249C46.4922 19.9177 45.0536 25.119 46.9717 30.9446C48.6266 35.9721 51.8047 39.9951 55.5375 43.6191C60.5256 48.4448 66.2283 52.3175 72.246 55.749C80.762 60.581 89.7407 64.5502 99.0481 67.5974L99.0434 67.6068ZM109.17 68.3766C109.604 68.2999 110.031 68.1917 110.449 68.0527C112.195 67.3958 113.904 66.6451 115.569 65.8041C124.2 60.9941 132.807 56.1434 141.388 51.2519C144.552 49.454 147.617 47.5388 149.822 44.5157C151.957 41.5912 153.508 38.5258 152.643 34.7704C152.05 32.2109 150.729 29.8768 148.84 28.0482C146.437 25.662 143.206 24.2904 139.818 24.2177C136.057 24.0909 132.395 24.4336 129.141 26.8277C124.294 30.3953 120.89 35.0849 118.164 40.3143C113.613 49.0597 110.952 58.4436 109.175 68.3766H109.17Z"
                                    fill="#E30824" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="208" height="230" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h4 class="free-product-title">3. BEKOMMEN SIE EIN GESCHENK</h4>
                    <p class="free-product-desc">
                        Wenn Sie sich für ein fantastisches Geschenk qualifizieren, versenden wir es innerhalb von 48
                        Stunden. Ja, wir zahlen
                        für das Produkt und auch für den Versand - keine Kosten für Sie!
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <h3 class="content-title content-title33 content-title-extra">Versandkostenfrei | Provisionsfrei | Keine
                Kreditkarte benötigt</h3>
            <div class="content-desc">
                <p class="content-desc-txt">* Bedingungen gelten:</p>
                <p class="content-desc-txt">
                    Begrenzt auf ein kostenloses Produkt pro Amazon-Konto und Haushalt. Das Angebot gilt nur für Kunden,
                    die das Produkt zum
                    vollen Preis über unseren offiziellen Verkäufer bei Amazon gekauft haben. Um sich zu qualifizieren,
                    erklären sich die
                    Teilnehmer damit einverstanden, uns ihre Erfahrungen mit dem zuvor gekauften Produkt zu senden, das
                    sie seit mindestens
                    14 Tagen aktiv verwenden.
                </p>
            </div>
        </div>
        <div class="questions">
            <div class="container">
                <h3 class="questions-title">Häufig gestellte Fragen</h3>
                <div class="row question-container">
                    <div class="questions-block">
                        <div class="questions-block-title">Ist es wirklich kostenlos? Oder muss ich zahlen?</div>
                        <p class="questions-block-desc">
                            Es gibt absolut keine Gebühren. Wir fragen zu keinem Zeitpunkt nach Ihren Kreditkartendaten.
                            Es gibt keine Testversion,
                            kein Abonnement, keine versteckten Gebühren, keine Versandkosten. Wir übernehmen alle
                            Kosten. Dies ist wirklich
                            kostenlos.
                        </p>
                    </div>
                    <div class="questions-block">
                        <div class="questions-block-title">Was ist der Haken? Muss ich etwas tun</div>
                        <p class="questions-block-desc">
                            Wir bitten Sie lediglich, uns Ihre Erfahrungen mit dem Produkt zuzusenden. Wenn Sie Ihre
                            Erfahrungen teilen, können wir
                            unsere Produkte verbessern und anderen Kunden helfen, eine bessere Entscheidung zu treffen.
                        </p>
                    </div>
                    <div class="questions-block">
                        <div class="questions-block-title">Was sind die Voraussetzungen, um sich zu qualifizieren?</div>
                        <p class="questions-block-desc">
                            Das Angebot gilt nur für Kunden, die das Produkt zum vollen Preis bei Amazon gekauft haben.
                            Sie müssen das Produkt
                            mindestens 14 Tage lang verwenden, bevor Sie Ihre Erfahrungen teilen können.
                        </p>
                    </div>
                    <div class="questions-block">
                        <div class="questions-block-title">Wie lange dauert es, bis ich meinen kostenlosen Artikel
                            bekomme?</div>
                        <p class="questions-block-desc">
                            Wenn Sie sich für ein KOSTENLOSES Produkt qualifizieren, versenden wir es innerhalb von 48
                            Stunden. Sie erhalten das
                            Produkt innerhalb von 20-25 Werktagen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" class="d-flex">
            <div class="container">
                <p class="footer-txt">Copyright © 2020 EURODO - Alle Rechte vorbehalten</p>
            </div>
            <div class="select">
            <? if(isset($langs_cut)): ?>
                <select class="lang">
                            <?if(strpos($_SERVER['REQUEST_URI'], 'form')!==false):?>
                                <? if(in_array('ru', $langs_cut)): ?> <option <? if($lang=='ru'): echo 'selected'; endif; ?> value="-ru/form">Русский</option><? endif;?>
                                <? if(in_array('en', $langs_cut)): ?> <option <? if($lang=='en'): echo 'selected'; endif; ?> value="-en/form">English</option><? endif;?>
                                <? if(in_array('es', $langs_cut)): ?> <option <? if($lang=='es'): echo 'selected'; endif; ?> value="-es/form">Español</option><? endif;?>
                                <? if(in_array('it', $langs_cut)): ?> <option <? if($lang=='it'): echo 'selected'; endif; ?> value="-it/form">Italiano</option><? endif;?>
                                <? if(in_array('de', $langs_cut)): ?> <option <? if($lang=='de'): echo 'selected'; endif; ?> value="-de/form">Deutsch</option><? endif;?>
                                <? if(in_array('fr', $langs_cut)): ?> <option <? if($lang=='fr'): echo 'selected'; endif; ?> value="-fr/form">Français</option><? endif;?>
                            <? else: ?>
                                <? if(in_array('ru', $langs_cut)): ?> <option <? if($lang=='ru'): echo 'selected'; endif; ?> value="-ru">Русский</option><? endif;?>
                                <? if(in_array('en', $langs_cut)): ?> <option <? if($lang=='en'): echo 'selected'; endif; ?> value="-en">English</option><? endif;?>
                                <? if(in_array('es', $langs_cut)): ?> <option <? if($lang=='es'): echo 'selected'; endif; ?> value="-es">Español</option><? endif;?>
                                <? if(in_array('it', $langs_cut)): ?> <option <? if($lang=='it'): echo 'selected'; endif; ?> value="-it">Italiano</option><? endif;?>
                                <? if(in_array('de', $langs_cut)): ?> <option <? if($lang=='de'): echo 'selected'; endif; ?> value="-de">Deutsch</option><? endif;?>
                                <? if(in_array('fr', $langs_cut)): ?> <option <? if($lang=='fr'): echo 'selected'; endif; ?> value="-fr">Français</option><? endif;?>
                            <? endif; ?>
                        </select>
            <?endif;?>
        </div>
        </footer>
    </div>
