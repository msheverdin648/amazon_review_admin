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
            <div class="stars">
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
                <input type="hidden" name="stars" value="<?= $stars ?>">
            </div>
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                <div class="">
                    <div class="link-file ">
                        <div>
                            <input type="text" name="link"  placeholder="Paste the link">
                            <button class="btn-blue js-success" value="link" name="choice" type="submit">Send link</button>
                        </div>

                    </div>
                </div>
            </form>
            <div class="">
                <div class="link-file ">
                <div class="or">or</div>
                </div>
            </div>
            <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                <div class="">
                    <div class="link-file ">
                    <div class="input-file">
                            <div class="file-name">
                                <input type="file" name="file">
                                <span>Choose File</span>
                            </div>
                            <button class="btn-blue js-success" value="screen" name="choice" type="submit">Send screenshot</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
            </form>
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