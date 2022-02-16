
$(document).ready(function(){
    $('.product-variations__item').on('click', function(){
        var item = $(this).attr('class').split(' ')[1]
        if($(this).children('.checkbox').children('label').children('input').is(':checked')){
           $('.form-item.' + item).addClass('form-item--active')
           $(this).children('.checkbox').children('label').children('input').disabled = false
           
        }else{
            $('.form-item.' + item).removeClass('form-item--active')
            $(this).children('.checkbox').children('label').children('input').disabled = true
            
        }
    })
    

    $(document).on('click', '._checked', function(){
        if($(this).children('label').children('input').is(':checked')){
            $(this).children('label').children('input').siblings('._hidden').val('1')
            
        }else{
            $(this).children('label').children('input').siblings('._hidden').val('0')
            
        }
    })
    

    // if($('._checked').children('label').children('input').is(':checked')){
    //     $('._checked').children('label').children('input').siblings('._hidden').val('1')
        
    // }else{
    //     $('._checked').children('label').children('input').siblings('._hidden').val('0')
        
    // }

    
    $(document).on('click', '._desing', function(){
        if($(this).children().children().children('input').is(":checked")){
            var href = $(this).children('img').attr('src').split('/');
                href[4] = 'back';
                qr = href[5].split('?')
                href[5] = qr[0] + qr[1]
                href = href.join('/');
            
            var href2 = $(this).children('img').attr('src').split('/');
                href2[4] = 'front';
                qr2 = href2[5].split('?')
                href2[5] = qr2[0] + qr2[1]
                href2 = href2.join('/');
            
            var back_url = '/views/flyer_back.php?&img='+href;
            var front_url = '/views/flyer_front.php?&img='+href2;
            $('#front').attr('src', front_url) ;
            $('#back').attr('src', back_url) ;
        }
    })

    // if($('._desing').children().children().children('input').is(":checked")){
    //     var href = $('._desing').children('img').attr('src').split('/');
    //         href[4] = 'back';
    //         qr = href[5].split('?')
    //         href[5] = qr[0] + qr[1]
    //         href = href.join('/');
        
    //     var href2 = $('._desing').children('img').attr('src').split('/');
    //         href2[4] = 'front';
    //         qr2 = href2[5].split('?')
    //         href2[5] = qr2[0] + qr2[1]
    //         href2 = href2.join('/');
        
    //     var back_url = '/views/flyer_back.php?&img='+href;
    //     var front_url = '/views/flyer_front.php?&img='+href2;
    //     $('#front').attr('src', front_url) ;
    //     $('#back').attr('src', back_url) ;
    // }


    $(document).on('click', '._design', function(){
         if($(this).children().children().children('input').is(":checked")){
            var href = $(this).children('img').attr('src')
            $('#design').attr('src', href) ;
        }
    })

    
    $('.selected_lang').on('click', function(){
        $('.input__desc').text($(this).data('value'));
    })


    //Фильтрация языковых вариаций step2-v2
    let filter = $("[data-value]");
    
    filter.on("click", function(){
        let cat =   $(this).data('value');
        $("[data-cat]").each(function(){

            let workcat = $(this).data("cat");

            if (workcat != cat){

                $(this).addClass('hide')
                $(this).find('input').prop('disabled', true);
                
            }else{
                $(this).removeClass('hide')
                $(this).find('input').prop('disabled', false);
                $(this).find('input[data-dis]').prop('disabled', true)
               
            }

        })

    });

    $(document).on('input', '._img' , function(){
        let parent = $(this).closest('.js-product-item')
        let img = parent.find('img')
        img.attr('src', $(this).val())
        if($(this).val()==""){
            
            img.attr('src', '/static/images/form-product__img.png')
        }
    })

    

})