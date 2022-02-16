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
                <p class="title step-1">How would you rate the product?</p>
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
                <p><b>*Please submit your honest feedback in order to receive your FREE Product! <br>*NO credit card or payment option required, just your helpful opinion.</b></p>
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
                    <p class="title">Review our product to receive your 100% Free Product!</p>
                    <p>Please write an honest review - whether it's a 5-star or a 1-star your feedback is very valuable for all the other Amazon customers and for our product development.</p>
                    <textarea name="low_review" required placeholder="Please write your feedback here"></textarea>
                    <button class="btn-blue btn-block " type="submit">Share my review</button>
                    <div class="review-bottom">
                        <p>Most valuable reviews for the community have 2 things in common:</p>
                        <ul class="check">
                            <li><b class="future">Write at least 2 sentences:</b> Short reviews that only say things like "I love it" or "I hate it" aren't very useful to other customers. Please write a couple of sentences explaining what you liked or disliked about the product.</li>
                            <li><b class="future">Be honest:</b> We don't like fake, biased reviews. So most importantly please keep your review honest.</li>
                        </ul>
                    </div>
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
            </div>
            <div class="step step-3" <? if (isset($_GET['stars']) && ($_GET['stars'] == 'star-4' || $_GET['stars'] == 'star-5')) : ?>style="display:block;" <? endif; ?>>
                <span id="asin" style="display: none;"><?=$product['asin']?></span>
                <span id="amazon-url" style="display: none;">www.amazon<?=$_COOKIE['marketplace_link']?></span>
                <p class="title">Thank you for reviewing our Product!</p>
                <p>Please write an honest review - whether it's a 5-star or a 1-star your feedback is very valuable for all the other Amazon customers and our product development. </p>
                <p class="under">Here is what to expect next:</p>
                <p class="step-desc"><b class="future">Step 1.</b> Attach a link or a screenshot of your feedback.</p>
                <form action="../../views/reviewer_euro/send_hight_reit.php" method="POST" class="feedback-textarea" enctype="multipart/form-data" >
                    <div class="stars" style="<? if(isset($_GET['s'])):?>display: none;<?endif;?>">
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
                    <div class="link-file " style="<? if(isset($_GET['s'])):?>display: none;<?endif;?> ">
                        <div>
                            <input type="text" name="link"  placeholder="Paste the link">
                            <button class="btn-blue js-success" value="link" name="choice" type="submit">Send link</button>
                        </div>
                        <div class="or">or</div>
                        <div class="input-file">
                            <div class="file-name">
                                <input type="file" name="file">
                                <span>Choose File</span>
                            </div>
                            <button class="btn-blue js-success" value="screen" name="choice" type="submit">Send screenshot</button>
                        </div>
                    </div>
                    <div class="link-file-success" style="<? if(isset($_GET['s']) && $_GET['s']=='hight'):?>display: block;<?endif;?>">
                        <img width="64px" src="../img/check.svg" alt="">
                        <p>We have received confirmation</p>
                        <a href="product.php?stars=<?=$_GET['stars']?>"class="js-again">Send again</a>
                    </div>
                </div>
                    <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">
                </form>
                
                <div style="display:none;">
                    <img src="" alt="">
                    <p>We have received confirmation</p>
                    <p><a class="again" href="#">Send again</a></p>
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
            <div class="step step-4" style="<? if(isset($_GET['s']) && $_GET['s']=='low'): ?>display: block;<? endif; ?>">
                <p class="thank-title">Thank you!</p>
                <p class="title">Your review has been posted!</p>
                <p class="under">Here is what to expect next:</p>
                <p class="step-desc"><b class="future">Step 1.</b> We will verify the order ID you've provided to confirm your purchase. To speed up the process, you can send a screenshot to support@eurodo.es</p>
                <p class="step-desc"><b class="future">Step 2.</b> Extended Delivery Time: Due to COVID-19, it may take up to 30-35 business days for your gift to arrive. We apologize for the inconvenience and are taking all necessary steps to resolve this situation.</p>
                <p class="step-desc future"><b>Contact us at any time at <br><a href="mailto:support@eurodo.es">support@eurodo.es</a></b></p>
            </div>
        </section>
    </main>

    <script src="../js/jquery.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>