<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/form';
}else{
    $form_link ='/'.$reviewer['opinion'].'/form';
}
?>
    <div class="full-page">
        <header id="header">
            <div class="container">
                <div class="logo text-center">
                    <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' alt="Logo" class="logo-img img-fluid"></a>
                </div>
            </div>
        </header>
        <div class="page">
        <? if(isset($_SESSION['one_variation']) ): ?>
            <div class="container img--container">
                <img class="img--fluid main__img main__img1" src='<?=$baseURL."/img/img1.png"?>' alt="image">
                <img class="img--fluid main__img main__img2" src='<?=$baseURL."/img/img2.png"?>' alt="image">
                <img class="img--fluid main__img main__img3" src='<?=$baseURL."/img/img3.png"?>' alt="image">
                <img class="img--fluid main__img main__img4" src='<?=$baseURL."/img/img4.png"?>' alt="image">
                <img class="img--fluid main__img main__img5" src='<?=$baseURL."/img/img5.png"?>' alt="image">
                <img class="img--fluid main__img main__img6" src='<?=$baseURL."/img/img6.png"?>' alt="image">

                <div class="col-lg-8 text-center mx-auto ">
                    <h1 class="main--block__title">Gracias por su compra!</h1>
                    <h3 class="main--block__subtitle">Usted ha comprado este artículo</h3>
                    <img src="<?=$product['img']?>" alt="Product" class="img-fluid form-img">
                    <p class="main--block__txt"><?=$lang_product['product_es'] ?><br></p>
                    <p class="main--block__txt2">
                        ¿No compró este artículo?
                        <a href="#">Contáctenos en support@eurodo.es</a>
                    </p>
                </div>
                
            </div>
            <? endif; ?>
            <h2 class="content-title content-title2">Complete el formulario y reciba su producto gratis</h2>
            <p class="content-txt2">Envío Gratis | Sin comisiones | No se requiere tarjeta bancaria</p>
            <div class="d-flex align-start cont">
                <div class="left-block">
                    <div class="row cooontent just-start align-start">
<? foreach ($presents as $key => $present) : ?>
                        <div class="product-block">
                            <img src="<?= $present['img'] ?>" alt="image" class="img-fluid">
                            <p class="product-desc"><?= ($key + 1) . '. ' . $present['name'] ?></p>
                        </div>
                    <? endforeach; ?>
                    </div>
                    <div class="info-txt d-flex just-between" style="padding-top: 28px;">
                        <div class="left-img">
                            <img src='<?=$baseURL."/img/group.png"?>' alt="" class="group-img hide-img">
                        </div>
                        <p class="left-txt left-txt-desk">
                            * Limitado a un producto gratis por cuenta de Amazon por familia. Oferta válida solo para clientes que hayan comprado el artículo a precio completo de nuestro vendedor oficial de Amazon.com.
                        </p>
                    </div>
                </div>
                <div class="right-block">
                <form action="<?=$form_link?>" class="form" method='POST' id="form">
                        <input type="text" class="input-item" required name="name" placeholder="Nombre">
                        <input type="email" class="input-item" required name="email" placeholder="e-mail">
                        <p class="input-txt1">* Introduzca la dirección para enviar el regalo</p>
                        <input type="text" class="input-item" required name="address" placeholder="Dirección completa">
                        <input type="text" class="input-item" required name="city" placeholder="Ciudad">
                        <input type="text" class="input-item" required name="state" placeholder="Provincia">
                        <input type="tel" class="input-item" required name="index" placeholder="Сódigo postal">
                        <div class="d-flex country-container">
                            <select id="country" class="input-item select-item" name="country">
                                <option>País</option>
                                <option value="<?=$country?>"><?=$country?></option>
                             </select>
                            <span class="country-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 7" fill="none">
                                    <path d="M6.5 7L0.870834 0.25L12.1292 0.25L6.5 7Z" fill="#3E5131"></path>
                                </svg>
                             </span>
                        </div>

                        <input type="tel" class="input-item" required name="phone" placeholder="Número de teléfono">
                        <input type="text" class="input-item" required name="number" placeholder="Número de pedido en Amazon">
                        <p class="input-txt2">
                            * Consulta el historial de pedidos de tu cuenta de <a href="#">Amazon</a>, envía un correo electrónico o el recibo recibido con el producto. Por ejemplo, 112-5465666-4343658
                        </p>

                        <div id="select-gift" class="">
                            <select class="select-header d-flex select-item input-item input-item11"name="id_gift">
                                <option>Elige el regalo</option>
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
                            <span class="country-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 7" fill="none">
                                    <path d="M6.5 7L0.870834 0.25L12.1292 0.25L6.5 7Z" fill="#3E5131"></path>
                                </svg>
                            </span>
                        </div>

                        <button class="form-btn" type="submit">Recibe el regalo</button>
                        <div class="text-extra">
                            <p class="input-txt1 input-txt3">
                                * Nunca compartimos información personal de nuestros usuarios con nadie. Aquí está nuestra <a href="#">política de privacidad</a>.
                            </p><br/>
                            <p class="input-txt2 input-txt4">
                                * Para calificar, los participantes deben aceptar enviarnos su experiencia con un producto comprado previamente y que HAN USADO DURANTE AL MENOS 14 DÍAS.
                            </p>
                        </div>
                        <p class="left-txt left-txt-mobile">
                            * Limitado a un producto gratis por cuenta de Amazon por familia. Oferta válida solo para clientes que hayan comprado el artículo a precio completo de nuestro vendedor oficial de Amazon.com.
                        </p>
                        <input type="hidden" name="language" value="<?=$lang?>">
                    </form>
                </div>
            </div>
        </div>
        <div class="free-product">
            <h2 class="free-product-title">Complete el formulario y reciba su producto gratis</h2>
            <div class="row bloook">
                <div class="free-product-item free-product-item1111">
                    <div class="text-center">
                        <svg class="d-flex icon-la" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 232 226" fill="none">
                            <path d="M142.439 176.99C142.835 177.915 143.081 178.564 143.383 179.188C145.746 184.093 148.195 188.963 150.451 193.914C151.279 195.73 152.322 196.392 154.353 196.341C163.983 196.082 171.382 200.157 175.941 208.593C177.489 211.458 178.092 214.926 178.662 218.2C179.214 221.366 177.803 222.657 174.522 222.657C152.534 222.669 130.545 222.669 108.557 222.674C92.2437 222.678 75.9347 222.678 59.6214 222.674C55.818 222.674 54.8391 221.654 55.0375 217.95C55.6714 206.128 65.2791 196.543 77.1982 196.47C81.0146 196.444 82.9379 195.338 84.3049 191.836C86.0427 187.379 88.4058 183.163 90.4843 178.835C90.7258 178.336 90.8983 177.803 91.2131 176.994C85.1889 176.994 79.3975 176.994 73.6018 176.994C55.0634 176.994 36.5249 177.028 17.9865 176.981C11.1343 176.964 6.46842 172.098 6.46842 165.206C6.46411 115.169 6.45548 65.1308 6.45117 15.093C6.45117 6.75122 10.8238 2.39318 19.1939 2.39318C84.2962 2.38888 149.399 2.38028 214.497 2.37598C222.927 2.37598 227.252 6.67378 227.252 15.05C227.261 64.8726 227.265 114.695 227.269 164.518C227.269 170.631 224.415 175.015 219.356 176.426C217.86 176.843 216.239 176.955 214.673 176.955C191.391 176.99 168.114 176.985 144.832 176.99C144.133 176.99 143.435 176.99 142.439 176.99ZM220.435 135.122C220.478 134.227 220.542 133.461 220.542 132.695C220.542 108.754 220.534 84.8129 220.534 60.876C220.534 45.4658 220.534 30.0557 220.56 14.6456C220.564 12.6021 220.288 10.6403 218.257 9.71106C217.14 9.19911 215.764 9.09586 214.501 9.09156C189.283 9.07005 164.065 9.09586 138.851 9.09586C98.9062 9.10016 58.9617 9.09586 19.0128 9.10016C14.5712 9.10016 13.1869 10.4682 13.1869 14.8521C13.1826 54.1303 13.1826 93.4128 13.1826 132.691C13.1826 133.457 13.1826 134.227 13.1826 135.122C82.3902 135.122 151.318 135.122 220.435 135.122ZM220.417 141.575C219.4 141.575 218.623 141.575 217.843 141.575C211.521 141.575 205.195 141.571 198.873 141.575C156.548 141.588 114.223 141.601 71.8985 141.609C53.1444 141.614 34.3904 141.644 15.632 141.566C13.6095 141.558 13.1007 142.186 13.1309 144.109C13.2344 150.704 13.1654 157.299 13.1697 163.894C13.1697 169.151 14.2391 170.231 19.4268 170.231C55.9301 170.227 92.4335 170.218 128.941 170.214C157.687 170.21 186.428 170.214 215.174 170.21C219.106 170.21 220.521 168.829 220.534 164.927C220.555 157.974 220.538 151.018 220.529 144.066C220.525 143.356 220.469 142.65 220.417 141.575ZM62.239 215.773C98.7466 215.773 135.103 215.773 171.495 215.773C170.261 208.49 163.59 203.03 155.889 202.957C148.851 202.888 141.809 202.953 134.771 202.953C116.022 202.957 97.2762 202.936 78.5264 202.97C70.3849 202.987 63.5844 208.326 62.239 215.773ZM144.094 196.199C143.745 195.377 143.525 194.792 143.249 194.233C140.649 189.044 137.988 183.886 135.47 178.659C134.84 177.351 134.077 176.947 132.667 176.955C121.891 177.016 111.114 177.02 100.342 176.977C99.1434 176.973 98.5655 177.368 98.0696 178.422C95.534 183.8 92.9208 189.139 90.3463 194.499C90.1135 194.985 89.9755 195.51 89.7297 196.194C107.876 196.199 125.81 196.199 144.094 196.199Z" fill="#789B60"/>
                            <path d="M134.228 73.3993C134.228 89.5236 134.232 105.648 134.228 121.772C134.228 125.265 133.249 126.238 129.769 126.238C97.66 126.251 65.5509 126.264 33.4417 126.272C28.8147 126.272 27.8789 125.347 27.8789 120.761C27.8875 88.6545 27.8962 56.5522 27.9091 24.4457C27.9091 21.0728 28.9009 20.0446 32.2343 20.0446C64.7747 20.0403 97.3151 20.0489 129.855 20.0575C133.297 20.0575 134.25 21.0556 134.25 24.5962C134.254 40.8625 134.25 57.133 134.25 73.3993C134.241 73.3993 134.232 73.3993 134.228 73.3993ZM127.449 119.402C127.449 88.4308 127.449 57.7138 127.449 26.971C96.4526 26.971 65.6026 26.971 34.688 26.971C34.688 57.8687 34.688 88.5814 34.688 119.402C65.6414 119.402 96.444 119.402 127.449 119.402Z" fill="#789B60"/>
                            <path d="M175.078 80.5325C167.032 80.5282 158.985 80.5368 150.934 80.5282C147.764 80.5239 146.63 79.401 146.63 76.2691C146.617 60.7858 146.609 45.3026 146.613 29.8193C146.613 26.4464 147.562 25.4397 150.96 25.4311C167.269 25.4053 183.582 25.4096 199.891 25.4441C202.871 25.4484 203.871 26.5067 203.876 29.5397C203.897 45.0961 203.901 60.6482 203.888 76.2046C203.884 79.5043 202.849 80.5153 199.43 80.5282C191.318 80.554 183.198 80.5368 175.078 80.5325ZM197.032 32.2027C182.392 32.2027 167.997 32.2027 153.487 32.2027C153.487 46.1759 153.487 60.0287 153.487 74.0148C168.075 74.0148 182.521 74.0148 197.032 74.0148C197.032 60.0459 197.032 46.2361 197.032 32.2027Z" fill="#789B60"/>
                            <path d="M175.393 94.8624C183.004 94.8624 190.615 94.8538 198.226 94.8667C201.366 94.871 202.53 95.9723 202.547 99.13C202.586 106.796 202.582 114.458 202.539 122.125C202.521 125.209 201.435 126.229 198.321 126.233C183.026 126.255 167.734 126.263 152.439 126.259C149.433 126.259 148.32 125.128 148.312 122.069C148.29 114.334 148.29 106.594 148.312 98.859C148.32 95.9164 149.381 94.8581 152.348 94.8538C160.033 94.8322 167.713 94.8451 175.397 94.8451C175.393 94.8494 175.393 94.8581 175.393 94.8624ZM155.009 119.333C168.687 119.333 182.133 119.333 195.617 119.333C195.617 113.34 195.617 107.519 195.617 101.501C193.228 101.501 191.016 101.501 188.8 101.501C178.248 101.496 167.695 101.531 157.143 101.453C155.44 101.44 154.845 101.939 154.953 103.634C155.082 105.631 155.004 107.644 155.009 109.649C155.013 112.854 155.009 116.059 155.009 119.333Z" fill="#789B60"/>
                            <path d="M105.827 155.454C105.927 149.396 111.037 144.47 117.121 144.569C123.051 144.664 128.044 149.809 127.932 155.707C127.82 161.735 122.65 166.725 116.63 166.618C110.73 166.519 105.728 161.343 105.827 155.454ZM121.179 155.544C121.136 153.234 119.204 151.285 116.944 151.268C114.59 151.25 112.52 153.311 112.563 155.639C112.602 158.026 114.655 159.958 117.048 159.868C119.433 159.769 121.226 157.897 121.179 155.544Z" fill="#789B60"/>
                            <path d="M81.2431 44.1365C70.898 44.1322 60.5572 44.1236 50.2121 44.1451C48.3794 44.1494 46.9391 43.6547 46.413 41.7144C45.7575 39.3009 47.2495 37.4553 50.0439 37.4209C55.4299 37.3521 60.8159 37.3865 66.2063 37.3908C81.2906 37.3994 96.3749 37.4166 111.455 37.4295C111.886 37.4295 112.317 37.4166 112.749 37.4381C115.219 37.5629 116.561 38.8234 116.479 40.9357C116.405 42.9835 115.133 44.1064 112.701 44.115C104.297 44.1451 95.8919 44.1365 87.4916 44.1408C85.4088 44.1408 83.326 44.1408 81.2431 44.1365Z" fill="#789B60"/>
                            <path d="M81.4459 60.8545C71.1784 60.8545 60.9109 60.9062 50.6477 60.79C49.3712 60.7771 47.78 60.1748 46.9348 59.28C46.3225 58.6303 46.2319 56.7331 46.7494 55.9587C47.379 55.0209 48.8883 54.1949 50.0396 54.1648C56.6417 53.9927 63.2481 54.0701 69.8502 54.0701C83.6365 54.0701 97.4185 54.0701 111.205 54.0701C111.778 54.0701 112.356 54.04 112.925 54.0873C115.047 54.2594 116.513 55.7479 116.47 57.6581C116.427 59.5897 115.159 60.7943 112.887 60.8158C107.358 60.8674 101.83 60.8416 96.3017 60.8459C91.3469 60.8502 86.3964 60.8459 81.4416 60.8459C81.4459 60.8502 81.4459 60.8502 81.4459 60.8545Z" fill="#789B60"/>
                            <path d="M81.2906 111.228C71.0231 111.228 60.7556 111.223 50.4924 111.236C48.733 111.241 47.1676 110.97 46.5079 109.047C45.6583 106.573 47.1288 104.568 49.9965 104.512C54.4467 104.422 58.897 104.46 63.3516 104.456C79.5053 104.452 95.6591 104.456 111.813 104.456C112.171 104.456 112.533 104.435 112.891 104.46C115.021 104.624 116.496 106.078 116.487 107.992C116.474 110.023 115.185 111.185 112.744 111.198C105.28 111.232 97.8109 111.219 90.3464 111.228C87.3191 111.228 84.3049 111.228 81.2906 111.228Z" fill="#789B60"/>
                            <path d="M81.5233 94.5099C71.1825 94.5099 60.8417 94.5013 50.5009 94.5228C48.7414 94.5271 47.1761 94.2948 46.5034 92.3631C45.7185 90.1088 46.9691 88.0524 49.3581 87.9234C51.8635 87.7857 54.3819 87.8287 56.8959 87.8244C75.2791 87.8201 93.6623 87.8244 112.046 87.8373C114.801 87.8373 116.159 88.7278 116.448 90.6294C116.798 92.9439 115.396 94.4625 112.761 94.4711C103.783 94.5056 94.8094 94.497 85.8313 94.5056C84.3953 94.5099 82.9593 94.5099 81.5233 94.5099Z" fill="#789B60"/>
                            <path d="M81.5062 77.8177C71.2387 77.8177 60.9668 77.8349 50.6993 77.7919C49.6644 77.7876 48.2327 77.7446 47.6937 77.1165C46.9261 76.2217 46.4474 74.746 46.5078 73.5544C46.594 71.9325 47.961 71.1882 49.5868 71.1753C53.8214 71.1495 58.0604 71.1366 62.295 71.1323C78.5954 71.128 94.8957 71.1323 111.196 71.1323C111.701 71.1323 112.201 71.1323 112.705 71.1495C115.163 71.2484 116.513 72.4874 116.474 74.6041C116.436 76.6949 115.254 77.7618 112.74 77.7747C104.555 77.8134 96.3662 77.8048 88.1816 77.8134C85.9564 77.8177 83.7313 77.8177 81.5062 77.8177Z" fill="#789B60"/>
                            <path d="M169.722 58.4239C175.268 53.2097 180.585 48.2064 185.902 43.2073C186.476 42.6696 187.015 42.0845 187.636 41.6027C188.86 40.6519 190.171 40.2002 191.521 41.3876C192.957 42.6524 193.198 44.5281 192.125 46.0209C191.836 46.4253 191.465 46.7738 191.103 47.118C184.716 53.1882 178.33 59.2585 171.926 65.3115C169.058 68.0219 167.307 67.8154 165.19 64.563C163.004 61.203 160.813 57.8474 158.653 54.4702C156.984 51.8632 157.109 50.0477 158.972 48.8474C160.887 47.6127 162.611 48.1763 164.323 50.6285C166.074 53.1409 167.821 55.6748 169.722 58.4239Z" fill="#789B60"/>
                        </svg>
                    </div>
                    <h4 class="free-product-item-title">1. LLENE EL FORMULARIO EN LÍNEA</h4>
                    <p class="free-product-desc">
                        El primer paso para obtener un PRODUCTO GRATIS es completar el formulario en esta página. La oferta solo es válida para los clientes que hayan comprado el artículo a precio completo en nuestro distribuidor autorizado en Amazon.com.
                    </p>
                </div>
                <div class="free-product-item free-product-item1111">
                    <div class="text-center">
                        <svg class="d-flex icon-la" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 226 226" fill="none">
                            <g clip-path="url(#clip0)">
                            <path d="M163.16 179.892C162.299 180.5 161.804 180.8 161.361 181.164C148.549 191.763 133.5 196.684 117.204 198.3C111.591 198.855 106.641 194.574 105.878 188.912C105.131 183.375 108.757 178.147 114.259 177.021C117.768 176.304 121.346 175.927 124.85 175.19C137.077 172.618 147.201 166.527 155.164 156.899C157.446 154.141 159.749 151.399 161.994 148.609C165.247 144.567 169.109 141.225 173.458 138.414C177.312 135.924 181.511 134.611 186.103 134.636C191.244 134.66 196.418 134.372 201.518 134.85C213.262 135.948 221.92 145.433 221.985 157.183C222.095 177.43 222.001 197.681 222.046 217.932C222.05 219.499 221.599 220.034 219.979 220.03C201.705 219.981 183.436 219.981 165.162 220.03C163.497 220.034 163.123 219.406 163.131 217.895C163.176 206.15 163.156 194.404 163.156 182.663C163.16 181.877 163.16 181.099 163.16 179.892Z" stroke="#789B60" stroke-width="6" stroke-miterlimit="10"/>
                            <path d="M103.864 175.964C98.5643 182.533 97.4882 189.439 102.361 197.175C87.596 194.724 74.6704 189.423 63.1498 179.65C63.093 180.861 63.028 181.606 63.028 182.351C63.024 194.028 62.9833 205.704 63.0646 217.381C63.0767 219.333 62.6707 220.058 60.5103 220.046C42.5087 219.957 24.5071 219.973 6.50949 220.03C4.71866 220.034 4.05675 219.621 4.06081 217.689C4.12578 197.576 4.04863 177.462 4.12172 157.349C4.16639 144.615 14.2738 134.688 27.0532 134.628C30.3018 134.612 33.5667 134.85 36.7951 134.583C46.2284 133.797 53.6353 137.864 59.9986 144.178C63.2473 147.402 66.1467 151.007 68.9934 154.603C77.6388 165.535 88.6924 172.529 102.398 175.304C102.731 175.373 103.06 175.441 103.38 175.547C103.494 175.583 103.579 175.713 103.864 175.964Z" stroke="#789B60" stroke-width="6" stroke-miterlimit="10"/>
                            <path d="M97.082 65.5558C93.1877 65.5558 89.3421 65.6895 85.5168 65.5032C83.3118 65.3979 81.9148 66.1633 80.5545 67.8442C76.5992 72.7206 72.4856 77.4674 68.3761 82.2223C67.905 82.765 67.0928 83.0161 66.439 83.405C66.1873 82.6962 65.7243 81.9874 65.7122 81.2746C65.6431 76.7546 65.6228 72.2346 65.6919 67.7146C65.7162 66.0904 65.2289 65.4303 63.4909 65.5153C60.7904 65.649 58.0819 65.5842 55.3774 65.5396C47.5481 65.4181 41.5218 59.7155 41.396 51.9067C41.2213 41.1818 41.2213 30.4529 41.3838 19.728C41.5056 11.8018 47.5684 6.12753 55.5357 6.12348C76.5058 6.10728 97.4759 6.10728 118.446 6.12348C126.495 6.13158 132.525 12.0975 132.691 20.1411C132.716 21.421 132.602 22.713 132.724 23.9848C132.89 25.7466 132.249 26.3339 130.446 26.3096C123.615 26.2205 116.769 26.5242 109.955 26.2083C101.927 25.8438 96.9399 31.83 97.0536 39.0555C97.1835 47.7472 97.082 56.4429 97.082 65.5558Z" stroke="#789B60" stroke-width="6" stroke-miterlimit="10"/>
                            <path d="M151.087 94.0368C150.721 93.3159 150.478 92.4937 149.974 91.8862C147.18 88.5043 144.289 85.1993 141.507 81.8053C140.565 80.6591 139.522 80.1933 138.027 80.2054C130.117 80.2662 122.202 80.2459 114.292 80.2297C108.079 80.2176 103.746 76.1431 103.665 69.9139C103.543 60.6066 103.547 51.2993 103.665 41.992C103.742 35.8195 108.119 31.6883 114.316 31.6843C132.371 31.6681 150.429 31.664 168.483 31.6802C174.818 31.6843 179.054 35.8236 179.102 42.1905C179.176 51.3641 179.18 60.5378 179.107 69.7074C179.054 76.1796 174.847 80.2176 168.321 80.2459C163.789 80.2662 159.257 80.3067 154.729 80.2216C153.036 80.1892 152.476 80.8049 152.533 82.4573C152.63 85.3532 152.581 88.2572 152.533 91.1571C152.52 91.8943 152.281 92.6273 152.147 93.3645C151.789 93.5913 151.436 93.814 151.087 94.0368Z" stroke="#789B60" stroke-width="6" stroke-miterlimit="10"/>
                            <path d="M167.627 104.004C167.651 90.2053 178.762 79.0754 192.499 79.0835C206.359 79.0916 217.587 90.2903 217.563 104.077C217.538 117.844 206.265 128.921 192.329 128.868C178.68 128.812 167.602 117.661 167.627 104.004Z" stroke="#789B60" stroke-width="6" stroke-miterlimit="10"/>
                            <path d="M58.5043 103.939C58.5084 117.73 47.4305 128.848 33.6643 128.864C19.8616 128.88 8.62526 117.799 8.58871 104.134C8.55217 90.3106 19.7316 79.0997 33.5709 79.0835C47.3127 79.0673 58.5003 90.2175 58.5043 103.939Z" stroke="#789B60" stroke-width="6" stroke-miterlimit="10"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="226" height="225" fill="white" transform="translate(0 0.242188)"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h4 class="free-product-item-title">2. COMPARTA SU EXPERIENCIA</h4>
                    <p class="free-product-desc">
                        Después de completar el formulario, le preguntaremos sobre su experiencia con nuestro producto. Enviar sus comentarios ayudará a otros clientes a tomar mejores decisiones de compra.
                    </p>
                </div>
                <div class="free-product-item free-product-item1111">
                    <div class="text-center">
                        <svg class="d-flex icon-la" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 207 227" fill="none">
                            <g clip-path="url(#clip0)">
                            <path d="M64.0583 3.44922C66.5575 4.08345 69.1059 4.57029 71.5425 5.38764C76.9657 7.20993 80.9224 11.118 84.8165 15.0708C90.2709 20.6091 94.0264 27.3266 97.7148 34.0396C100.344 38.8187 102.445 43.888 104.783 48.8234C104.828 48.9217 104.908 49.0021 105.038 49.1763C105.834 47.1664 106.558 45.2012 107.376 43.2761C110.434 36.0808 114.297 29.4214 120.158 24.0885C124.383 20.2429 129.167 17.8891 135.02 17.3799C141.386 16.8261 147.1 18.2732 152.062 22.0384C156.542 25.4373 159.247 30.1717 160.146 35.7904C161.143 42.03 158.773 47.2155 155.036 52.0214C151.937 56.0099 147.69 58.4306 143.483 60.9363C139.665 63.2097 135.82 65.4474 131.988 67.6984C131.738 67.8458 131.497 68.0066 131.036 68.2969C131.528 68.3371 131.787 68.3729 132.051 68.3729C154.101 68.3773 176.156 68.3729 198.206 68.3773C201.067 68.3773 202.596 69.2438 203.316 71.4055C203.558 72.1246 203.598 72.9375 203.602 73.7057C203.62 86.4931 203.62 99.2804 203.611 112.072C203.611 114.185 203.629 116.297 203.526 118.406C203.415 120.688 201.474 122.439 199.167 122.448C196.641 122.457 194.115 122.448 191.446 122.448C191.446 124.27 191.446 126.003 191.446 127.74C191.451 148.951 191.455 170.162 191.455 191.369C191.455 200.226 191.451 209.082 191.442 217.935C191.437 220.199 189.461 222.187 187.19 222.249C186.966 222.254 186.743 222.249 186.519 222.249C132.024 222.249 77.529 222.236 23.0339 222.285C20.2307 222.29 17.9595 220.181 17.964 217.243C18.0355 186.022 18.0087 154.802 18.0087 123.587C18.0087 123.26 17.9774 122.934 17.955 122.461C15.344 122.461 12.7867 122.488 10.2294 122.452C8.25328 122.421 6.63931 121.228 6.09834 119.335C5.87032 118.531 5.85691 117.646 5.85691 116.802C5.84797 102.523 5.90162 88.235 5.8122 73.9425C5.78985 70.4274 7.73466 68.3282 11.3605 68.3416C32.9279 68.4265 54.4952 68.3863 76.0626 68.3863C76.3845 68.3863 76.7064 68.3863 77.0327 68.3863C77.0506 68.3282 77.073 68.2701 77.0908 68.2121C75.3875 67.3054 73.6662 66.43 71.9807 65.492C64.0315 61.0837 56.5205 56.0679 50.2881 49.3549C46.2599 45.0136 43.0856 40.1541 41.4806 34.3746C39.0976 25.7902 41.4716 18.3 46.7472 11.4932C49.85 7.49131 53.8201 4.78914 58.8498 3.77973C59.4668 3.65467 60.0882 3.56088 60.7052 3.44922C61.8229 3.44922 62.9406 3.44922 64.0583 3.44922ZM100.075 213.062C100.075 182.816 100.075 152.667 100.075 122.515C75.7541 122.515 51.5221 122.515 27.241 122.515C27.241 152.721 27.241 182.869 27.241 213.062C51.531 213.062 75.763 213.062 100.075 213.062ZM182.209 213.062C182.209 182.82 182.209 152.672 182.209 122.506C157.897 122.506 133.665 122.506 109.375 122.506C109.375 152.707 109.375 182.865 109.375 213.062C133.674 213.062 157.91 213.062 182.209 213.062ZM15.0534 113.283C43.4746 113.283 71.7571 113.283 100.067 113.283C100.067 101.353 100.067 89.4811 100.067 77.596C71.6811 77.596 43.3986 77.596 15.0534 77.596C15.0534 89.5079 15.0534 101.357 15.0534 113.283ZM109.388 77.6004C109.388 89.557 109.388 101.406 109.388 113.283C137.769 113.283 166.061 113.283 194.419 113.283C194.419 101.371 194.419 89.5168 194.419 77.6004C166.061 77.6004 137.765 77.6004 109.388 77.6004ZM100.004 67.7744C100.004 67.0955 100.102 66.5193 99.986 65.9923C99.3065 62.8569 98.7744 59.6768 97.8311 56.6218C95.3364 48.5197 91.4333 41.0519 87.0653 33.8163C84.0564 28.8273 81.0878 23.8026 76.7108 19.8141C74.1043 17.438 71.5649 14.9949 68.1313 13.7845C65.7617 12.9493 63.3788 12.3061 60.8438 12.7081C57.5399 13.2351 55.2374 15.2584 53.3507 17.84C50.0244 22.4002 48.6563 27.3489 50.4804 32.8917C52.0541 37.6753 55.0764 41.503 58.6263 44.9376C63.3698 49.5291 68.793 53.2139 74.5156 56.4788C82.5945 61.0882 91.0667 64.8176 100.004 67.7744ZM109.634 68.5069C110.166 68.3773 110.528 68.3371 110.85 68.1987C112.482 67.5064 114.176 66.9213 115.719 66.0593C123.927 61.4812 132.105 56.8495 140.273 52.2045C143.282 50.4938 146.197 48.6716 148.293 45.7952C150.323 43.0126 151.799 40.0961 150.989 36.5229C150.426 34.0396 149.152 31.8868 147.372 30.127C145.03 27.809 142.061 26.5941 138.793 26.4825C135.221 26.3619 131.733 26.6879 128.64 28.9658C124.03 32.3602 120.793 36.8222 118.2 41.7978C113.855 50.1276 111.324 59.0559 109.634 68.5069Z" fill="#789B60"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="207" height="226" fill="white" transform="translate(0 0.242188)"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h4 class="free-product-item-title">3. OBTENGA UN REGALO</h4>
                    <p class="free-product-desc">
                        Si reclama un regalo grande le será enviado en un plazo de 48 horas. Nos hacemos cargo de los gastos de envío. ¡Para usted el coste es 0!
                    </p>
                </div>
            </div>
            <h2 class="free-product-title free-product-title2">Envío Gratis | Sin comisiones | No se requiere tarjeta bancaria</h2>
            <p class="free-product-text2">
                <span>* Las condiciones se aplican:</span><br/> Limitado a un producto gratuito por cuenta de Amazon por hogar. Oferta válida solo para clientes que hayan comprado nuestro artículo a precio completo en nuestro minorista oficial de Amazon.com.
                Para calificar, los participantes deben aceptar enviarnos su experiencia con un producto comprado previamente y que han usado durante al menos 14 días.
            </p>
        </div>
        <div class="questions">
            <h2 class="quations-title">Preguntas frecuentes</h2>
            <div class="row align-start">
                <div class="questions-item">
                    <h4 class="questions-subtitle">¿Es REALMENTE gratis? ¿O tengo que pagar?</h4>
                    <p class="questions-text">No hay absolutamente ninguna tarifa. No solicitamos los datos de su tarjeta de crédito de ninguna manera. Sin suscripción, sin tarifas ocultas o tarifas de envío. Cubrimos todos los gastos. Es REALMENTE GRATIS.
                    </p>
                </div>
                <div class="questions-item">
                    <h4 class="questions-subtitle">¿Cuál es el truco? ¿Necesito hacer algo?</h4>
                    <p class="questions-text">
                        Lo único que te pedimos es que nos envíes tu experiencia con el producto. Compartir sus experiencias nos ayudará a mejorar nuestros productos y ayudará a otros clientes a tomar mejores decisiones.
                    </p>
                </div>
                <div class="questions-item">
                    <h4 class="questions-subtitle">¿Cuáles son las CONDICIONES de participación?</h4>
                    <p class="questions-text">
                        Oferta válida solo para clientes que compraron el producto a precio completo en Amazon.com. También debe usarlo durante al menos 14 días antes de compartir su experiencia.
                    </p>
                </div>
                <div class="questions-item">
                    <h4 class="questions-subtitle">¿Cuánto tiempo tardaré en recibir mi artículo gratis?</h4>
                    <p class="questions-text">
                        Si selecciona un producto GRATIS, lo enviaremos en 48 horas. Recibira su producto en un plazo de 20 a 25 días hábiles.
                    </p>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="container d-flex">
                <p class="footer-txt text-center">Copyright © 2020 EURODO - Todos los derechos reservados</p>
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
            </div>
            
        </footer>
    </div>
