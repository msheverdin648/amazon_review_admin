$(document).ready(function () {
    // File name
    $('input[type="file"]').each(function() {
        var $input = $(this),
            $label = $('.choose--file span'),
            labelVal = $label.html();

        $input.on('change', function(element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.html(fileName) : $label.html(labelVal);
        });
    });
    
    // Lang switch
    var baseUrl = 'http://euro.do/sport';
    $('.lang').on('change', function(){
        var lang = $(this).val();
        window.location.replace(baseUrl + lang);
    });
    
    // Choose category
    $('.product-item a').on('click', function(){
        var category = $(this).data('category');
        localStorage.setItem('category', category);
    });
    $('.sport-form .form-btn').on('click', function(){
        window.location.replace(localStorage.getItem('category'));
    });
    
    // Page replace
    $('.stars label:nth-child(6), .stars label:nth-child(8), .stars label:nth-child(10)').on('click', function(){
        window.location.replace('index30_de.html');
    });
    $('.stars label:nth-child(2), .stars label:nth-child(4), .send-again').on('click', function(){
        window.location.replace('index40_de.html');
    });
    $('.review-page .link-btnn').on('click', function(){
        window.location.replace('index41_de.html');
    });
});