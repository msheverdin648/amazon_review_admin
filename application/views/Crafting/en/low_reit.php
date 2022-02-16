<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}?>
<header class="review-header" style="display: block;">
    <a href="<?=$index_url?>">
        <img src='<?=$baseURL."/img/logo.svg"?>' alt="">
    </a>
</header>
<main class="review-product">
    <section class="container">
        <div class="step" >
                <form action="<?=$form_link?>" method="POST" class="feedback-textarea">
                <div class="stars">
                    <input disabled id="star-5" type="radio" <? if ($stars == 5) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="5">
                    <label disabled for="star-5"></label>
                    <input disabled id="star-4" type="radio" <? if ($stars == 4) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="4">
                    <label disabled for="star-4"></label>
                    <input disabled id="star-3" type="radio" <? if ($stars == 3) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="3">
                    <label disabled for="star-3"></label>
                    <input disabled id="star-2" type="radio" <? if ($stars == 2) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="2">
                    <label disabled for="star-2"></label>
                    <input disabled id="star-1" type="radio" <? if ($stars == 1) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="1">
                    <label disabled for="star-1"></label>
                    <input type="hidden" name="stars" value="<?= $stars ?>">
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
                </form>
            </div>
    </section>
</main>