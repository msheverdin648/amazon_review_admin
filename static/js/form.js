 //form submit

$(document).ready(function(){
    $('form').submit(function(event) {
        var json;
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(result) {
                json = jQuery.parseJSON(result);
                
                if (json.url) {
                    window.location.href = '/' + json.url;
                } else {
                    $('#opinion').append( `<div class="err_block">
                                                <span class="err_block_header">Ошибка</span>
                                                <span class="err_block_text">Такая ссылка уже существует</span>
                                            </div>`);
                }
            },
        });
    });

    $('.delete').on('click', function(e){
        e.preventDefault();
        if(confirm('Подтвердите удаление отзовника')){
             $.ajax({
                    url: $(this).attr('href'),
                    method: 'get',
                    dataType: false,
                    data: {opinion: $(this).data('value')},
                    success: function(result) {
                        window.location.reload();
                    }    

                })
        }
       
    })
    $('.start').on('click', function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            method: 'get',
            dataType: false,
            data: {on: '3', opinion: $(this).data('opinion')},
            success: function(result) {
                window.location.reload();
            }    

        })
       
    })
    $('.stop').on('click', function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            method: 'get',
            dataType: false,
            data: {on: '2', opinion: $(this).data('opinion')},
            success: function(result) {
                window.location.reload();
            }    

        })
       
    })

})
    