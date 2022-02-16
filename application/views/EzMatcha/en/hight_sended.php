<? if(isset($route_lang)){                       
$form_link='/'.$reviewer['opinion'].'-'.$route_lang.'/review/'.$stars;
}else{
    $form_link ='/'.$reviewer['opinion'].'/review/'.$stars;
}
?>
    <div class="full-page">
        <img src='<?=$baseURL."/img/Group68.png"?>' alt="" class="img1 hide-img2">
        <img src='<?=$baseURL."/img/Group69.png"?>' alt="" class="img2 hide-img2">
        <div class="page3">
            <div class="logo2">
                <a href="<?=$index_url?>"><img src='<?=$baseURL."/img/logo.svg"?>' width="349px" alt="Logo" class="logo-img2 img-fluid"></a>
            </div>
            <div class="stars stars2">
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
                    <input type="hidden" name="stars" value="<?=$stars?>">
                </div>
            <h2 class="title3 title5">Thank you for reviewing our Product!</h2>
            <p class="text4">
                Please write an honest review - whether it's a 5-star or a 1-star your feedback is very valuable for all the other Amazon customers and our product development.
            </p>
            <h2 class="title3 title5 title-line">Here is what to expect next:</h2>
            <div class="title3 title5 step-title">Step 1.<span> Attach a link or a screenshot of your feedback.</span></div>
            <br/>
            <div class="text-center">
                <img src='<?=$baseURL."/img/vector-big.png"?>' alt="" class="big-vektor">
                <div class="recieved-txt">We have received confirmation</div>
               <a href="<?=$form_link?>" class="send-again">Send again</a>
            </div>
            <br/><br/>
            <div class="title3 title5 step-title">Step 2.<span> We will verify the order ID you've provided to confirm your purchase. To speed up 
                the process, you can send a screenshot to support@eurodo.es</span>
            </div><br/>
            <div class="title3 title5 step-title">Step 3. Extended Delivery Time:
                <span> Due to COVID-19, it may take up to 30-35 business days for your gift to arrive. We apologize for the inconvenience and are 
                    taking all necessary steps to resolve this situation.
                </span>
            </div>
            <div class="content-title5">Most valuable reviews for our community have 3 things in common:</div>
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
                <div class="texts"><span>Include one or more images:</span> Yes, we know it's a cliché, but a picture really is worth a thousand words. Even if it's just a quick photo shot using your phone, it can help other customers understand what they're buying and
                    how the product looks like.
                </div>
            </div>
            <div class="d-flex align-start just-start vektor-txt">
                <div>
                    <img src='<?=$baseURL."/img/Vector.png"?>' alt="" class="vektor-img">
                </div>
                <div class="texts"><span>Be honest:</span> We don't like fake, biased reviews. So most importantly please keep your review honest.
                </div>
            </div>
        </div>
    </div>
