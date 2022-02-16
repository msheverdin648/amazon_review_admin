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
            <p class="title">Thank you for reviewing our Product!</p>
            <p>Please write an honest review - whether it's a 5-star or a 1-star your feedback is very valuable for all the other Amazon customers and our product development. </p>
            <p class="under">Here is what to expect next:</p>
            <p class="step-desc"><b class="future">Step 1.</b> Attach a link or a screenshot of your feedback.</p>
            <div class="">
                <div class="link-file-success">
            <img width="64px" src='<?= $baseURL . "/img/check.svg" ?>' alt="">
                <p>We have received confirmation</p>
                <a class="again" href="<?= $form_link ?>">Send again</a>
            </div>
            </div>
            <p class="step-desc"><b class="future">Step 2.</b> We will verify the order ID you've provided to confirm your purchase. To speed up the process, you can send a screenshot to support@eurodo.es</p>
                <br>
                <p class="step-desc"><b class="future">Step 3. Extended Delivery Time:</b> Due to COVID-19, it may take up to 30-35 business days for your gift to arrive. We apologize for the inconvenience and are taking all necessary steps to resolve this situation.</p>

                <div class="review-bottom">
                    <p>Most valuable reviews for our community have 3 things in common:</p>
                    <ul class="check">
                        <li><b class="future">Write at least 2 sentences:</b> Short reviews that only say things like "I love it" or "I hate it" aren't very useful to other customers. Please write a couple of sentences explaining what you liked or disliked about the product.</li>
                        <li><b class="future">Include one or more images:</b> Yes, we know it's a cliché, but a picture really is worth a thousand words. Even if it's just a quick photo shot using your phone, it can help other customers understand what they're buying and how the product looks like.</li>
                        <li><b class="future">Be honest:</b> We don't like fake, biased reviews. So most importantly please keep your review honest.</li>
                    </ul>
                </div>
        </div>
    </section>
</main>