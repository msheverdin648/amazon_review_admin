
    <div class="full-page">
        <div class="page">
            <h2 class="title3">How would you rate the product?</h2>
            <img src='<?=$baseURL."/img/match.png"?>' class="match-img1 hide-img2" alt="">
            <span id="asin" style="display: none;"><?=$product['asin']?></span>
            <span id="amazon-url" style="display: none;">www.amazon<?=$marketplace_link?></span>
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
            <div class="product-big-img">
                <img src="<?=$product['img']?>" alt="" class="product-big-img big_img img-fluid">
                <h4 class="big-product-title">
                    *Please submit your honest feedback in order to receive your FREE Product! *NO credit card or payment option required, just your helpful opinion.
                </h4>
            </div>
            <img src='<?=$baseURL."/img/match2.png"?>' alt="" class="match-img2 hide-img2">
        </div>
    </div>
