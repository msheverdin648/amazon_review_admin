<main class="review-product">
    <section class="container">
        <div class="step step-1">
                <p class="title step-1 bs">Wie würden Sie das Produkt bewerten?</p>
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
                <img class="product-img" src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                <p><b>* Bitte senden Sie Ihr ehrliches Feedback, um Ihr KOSTENLOSES Produkt zu bekommen! <br>* KEINE Kreditkarte oder Zahlungsoption erforderlich, nur Ihre hilfreiche Meinung.</b></p>
            </div>
        </section>
</main>