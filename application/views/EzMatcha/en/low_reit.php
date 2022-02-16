<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}?>
    <div class="full-page">
        <div class="page2">
            <div class="logo2">
                <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' width="349px" alt="Logo" class="logo-img2 img-fluid"></a>
            </div>
            <form action="<?=$form_link?>" method="POST" class="feedback-textarea">
                <div class="stars stars2">
                    <input disabled id="star-5" type="radio" <? if ($stars == 5) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="5">
                    <label disabled for="star-5"></label>
                    <input disabled id="star-4" type="radio" <? if ($stars == 4) {
                                                                    echo 'checked';
                                                                } ?> name="star" value="4">
                    <label disabled for="star-4"></label>
                    <input disabled id="star-3" type="radio" <? if ($stars== 3) {
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
                    <input type="hidden" name="star" value="<?= $stars ?>">
                </div>
            <h2 class="title3 title4">Review our product to receive your 100% Free Product!</h2>
            <p class="text4">
                Please write an honest review - whether it's a 5-star or a 1-star your feedback is very valuable for all the other Amazon customers and for our product development.
            </p>
            
                <textarea required name="low_review" id="feedback" placeholder="Please write your feedback here."></textarea>
                <button type="submit" class="feedback-btn">Share my review</button>
                <!-- <a href="index10.html" class="feedback-btn">Share my review</a> -->
           <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">

            </form>
            <h4 class="content-title4">Most valuable reviews for the community have 2 things in common:</h4>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Write at least 2 sentences:</span> Short reviews that only say things like "I love it" or "I hate it" aren't very useful to other customers. Please write a couple of sentences explaining what you liked or disliked about the product.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts">
                    <span>Be honest:</span> We don't like fake, biased reviews. So most importantly please keep your review honest.
                </div>
            </div>
        </div>
        <img src='<?=$baseURL."/img/goup67.png"?>' alt="" class="last-img img-fluid">
    </div>
