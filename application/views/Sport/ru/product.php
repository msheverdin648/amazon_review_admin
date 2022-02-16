    <div id="full-page">
        <header id="header">
            <img class="fluid-img header-img1" src='<?=$baseURL."/img/kkk.png"?>' alt="image">
            <img src='<?=$baseURL."/img/3.png"?>' alt="" class="fluid-img header-img2">
        </header>
        <div class="container">
            <div class="main extra-main">
            <span id="asin" style="display: none;"><?=$product['asin']?></span>
            <span id="amazon-url" style="display: none;">www.amazon<?=$marketplace_link?></span>
                <h1 class="main-title main-title-extra title-extra-style">Как бы вы хотели оценить этот товар?</h1>
                 <div class="stars">
                     <input id="5" type="radio" name="star" value="5">
                     <label for="5"></label>
                     <input id="4" type="radio" name="star" value="4">
                     <label for="4"></label>
                     <input id="3" type="radio" name="star" value="3">
                     <label for="3"></label>
                     <input id="2" type="radio" name="star" value="2">
                     <label for="2"></label>
                     <input id="1" type="radio" name="star" value="1">
                     <label for="1"></label>
                 </div>
            </div>
            <div class="product-big-img">
                <img src="<?=$product['img']?>" class="fluid-img big_img" alt="<?=$product['img']?>">
            </div>
            <div class="product-last-text">
                * Пожалуйста, отправьте честный отзыв, чтобы получить БЕСПЛАТНЫЙ продукт!<br>
                * НЕТ кредитной карты или способа оплаты, просто ваше полезное мнение.
            </div>
        </div>
        <img src='<?=$baseURL."/img/5.png"?>' class="fluid-img footer-left-img" alt="">
    </div>