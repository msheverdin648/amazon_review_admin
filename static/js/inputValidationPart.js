$(document).ready(function (){
    $(document).on('click', 'input, change', 'input', function (){
        $(this).closest('.form-item').find('.err_block').remove()
    })
    $(document).on('click', '.select', function (){
        if($(this).find('input').val()) {
            $(this).parent().find('.err_block').remove();
        }
    })
})
