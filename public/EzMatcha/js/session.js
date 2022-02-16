$(document).ready(function(){

    $('.product-btn').on('click', function(e){
        e.preventDefault();
        let value = $(this).data('value');
        let href = $(this).attr('href');
        $.ajax({
            url: href,
            method: 'get',
            dataType: false,
            data: {id_product: value},
            success: function(result) {
                window.location.pathname = href;
            }    

        })
    })

    $('.dumbbell-btn').on('click', function(e){
        e.preventDefault();
        let value = $(this).data('value');
        let href = $(this).data('href');
        $.ajax({
            url: $(this).data('url'),
            method: 'get',
            dataType: false,
            data: {id_prodvar: value},
            success: function(result) {
                window.location.pathname = href;
            }    

        })
    })

})