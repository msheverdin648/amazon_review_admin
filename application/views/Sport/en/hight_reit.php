<? if (isset($route_lang)) {
    $form_link = '/' . $reviewer['opinion'] . '-' . $route_lang . '/review/' . $stars;
} else {
    $form_link = '/' . $reviewer['opinion'] . '/review/' . $stars;
}
?>
<div id="full-page">
    <header id="header">
        <img class="fluid-img header-img1 review-top-img1 header-img-extra cl" src='<?= $baseURL . "/img/immmg1.png" ?>' alt="image">
        <div class="header-container no-bottom no-bottom2">
            <div class="container">
                <a href="<?= $index_url ?>" class="logo">
                    <img src='<?= $baseURL . "/img/logo2.svg" ?>' class="fluid-img" alt="Logo">
                </a>
            </div>
        </div>
        <img src='<?= $baseURL . "/img/immmg2.png" ?>' alt="" class="fluid-img header-img2 review-top-img2 cl">
    </header>
    <div class="review-page">
        <div class="container">
            <div class="main no-pad main-no-pad main-no-pad2">
                <div class="main no-pad main-no-pad main-no-pad2">
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
                        <input type="hidden" name="stars" value="<?= $stars ?>">
                    </div>
                    <h1 class="main-title main-title-extra main-title-extra666">
                        Thank you for reviewing our Product!
                    </h1>
                    <p class="main-desc main-desc-extra review-extra-title review-extra-title-extra cld cld2">Please write an honest review - whether it's a 5-star or a 1-star
                        your feedback is very valuable for all the other Amazon customers and for our product development.
                    </p>
                </div>
                <div class="thanks-container">
                    <h1 class="main-title main-title-extra">
                        Here is what to expect next:
                    </h1>
                    <div class="thanks-text thanks-text111">
                        <span>Step 1.</span>
                        Attach a link or a screenshot of your feedback.
                    </div>
                    <form action="<?= $form_link ?>" method="POST" class="feedback-textarea">
                        <input type="text" class="link-input-texxxt" name='link' placeholder="Paste the link">
                        <button type="submit" name='choice' value="link" class="link-btnn">Send link</button>
                    </form>
                    <div class="orrr-txt">or</div>
                    <form action="<?= $form_link ?>" method="POST" class="feedback-textarea" enctype="multipart/form-data">
                        <div class="d-flex choose-file-cont">
                            <label for="files" class="choose--file d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                                    <path d="M6.14613 12.6511C5.47733 13.4175 5.47733 14.6593 6.14613 15.4252C6.81493 16.1916 7.89927 16.1916 8.56807 15.4252L15.0517 8" stroke="#E30824" stroke-miterlimit="10" stroke-linecap="round" />
                                    <path d="M11.2046 4.66511L2.8698 13.138C1.55114 14.4786 1.55114 16.654 2.87022 17.9946C4.18929 19.3351 6.32835 19.3351 7.647 17.9946L18.0722 7.39659C19.0611 6.39127 19.0611 4.76022 18.0722 3.75447C17.0825 2.74829 15.4776 2.74872 14.4888 3.75447L6.00493 12.3788" stroke="#E30824" stroke-miterlimit="10" stroke-linecap="round" />
                                </svg>
                                <span>Choose file</span>
                                <input type="file" id="files" name="file" class="input-file">

                            </label>
                            <button type="submit" name=choice value="screen" class="link-btnn link-btnn2">Send screenshot</button>
                            <input type="hidden" name="language" value="<?= explode('/', $_SERVER['PHP_SELF'])[2]; ?>">

                        </div>
                    </form>
                    <div class="thanks-text">
                        <span>Step 2. </span>
                        We will verify the order ID you've provided to confirm your purchase. To speed up the process,
                        you can send a screenshot of your feedback to support@eurodo.es
                    </div><br /><br />
                    <div class="thanks-text">
                        <span>Step 3. Extended Delivery Time: </span>
                        Due to COVID-19, it may take up to 30-35 business days for your gift to arrive. We apologize
                        for the inconvenience and are taking all necessary steps to resolve this situation.
                    </div>
                </div>
                <p class="main-desc main-desc-extra review-txt review-txt444">Most valuable reviews for the community have 3 things in common:</p>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Write at least 2 sentences:</span> Short reviews that only say things like "I love it" or "I hate it" aren't very useful to other customers. Please write a couple of sentences explaining what you liked or disliked about the product.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Include one or more images:</span> Yes, we know it's a cliché, but a picture really is worth a thousand words. Even if it's just a quick photo shot using your phone, it can help other customers understand what they're buying and how the product looks like.</span>
                </div>
                <div class="review-txt-container review-txt-container33 d-flex">
                    <span class="review-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                            <path d="M4.09108 12L0 8L1.36338 6.66697L4.09108 9.33394L13.6366 0L15 1.33392L4.09108 12Z" fill="#E30824" />
                        </svg>
                    </span>
                    <span class="reviews-last-txt"><span>Be honest:</span> We don't like fake, biased reviews. So most importantly please keep your review honest.</span>
                </div>
            </div>
            <img src='<?= $baseURL . "/img/immmg3.png" ?>' class="fluid-img footer-left-img" alt="">
        </div>
    </div>