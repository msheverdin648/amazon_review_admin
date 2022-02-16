$(document).ready(function() {
    // File name
    $('input[type="file"]').each(function() {
        var $input = $(this),
            $label = $('.choose span'),
            labelVal = $label.html();

        $input.on('change', function(element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.html(fileName) : $label.html(labelVal);
        });
    });
    

    // Page replace
    $('.stars label:nth-child(6), .stars label:nth-child(8), .stars label:nth-child(10)').on('click', function(){
        stars = $(this).attr('for');
        window.location.replace('review/'+stars);
    });
    $('.stars label:nth-child(2), .stars label:nth-child(4)').on('click', function(){
        let asin = document.querySelector('#asin').textContent;
        let amazonUrl = document.querySelector('#amazon-url').textContent;
        stars = $(this).attr('for');
        window.open(`https://${amazonUrl}/gp/customer-reviews/review-your-purchases?asins=${asin}`);
        window.location.replace('review/'+stars);
    });
    
    // Lang switch
    var url = document.location.href;
    url = url.split('/');
    baseUrl = url[0]+'//'+url[2]+'/'+url[3].split('-')[0];
    
    $('.lang').on('change', function(){
        var lang = $(this).val();
        
        window.location.replace(baseUrl + lang);
    });

});














