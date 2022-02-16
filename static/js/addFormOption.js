function initFieldAppend(id) {
    const form = $(`#${id}`)
    form.find('.js-product-add').on('click', function () {
        let index = parseInt(form.find('.js-product-number').last()[0].textContent)
        index++

        form.find('.js-product-list').append(append)
    })
    $(document).on('click', `#${id} .btn.btn--icon-only.btn--outline-red`, function () {
        $(this).closest('.js-product-item').remove()
    })
    // TODO: this
    //const fields = form.find('input[type="text"]:not([data-required="false"])')
}

$(document).ready(function () {
    initFieldAppend('productsForm')
    initFieldAppend('giftsForm')
})

$(document).ready(function () {
    $('[data-type="options"]').each(function () {
        const options = $(this)
        $(this).find('input[type="checkbox"]').on('change', function () {
            let checkbox = $(this)
            let optionName = $(this).parent().find('.checkbox__text')[0].textContent;
            let sendName = $(this).parent().find('.checkbox__text').data('name');
            let parentName = $(this).parent().find('.checkbox__text').data('parent');
            options.next().find('.js-product-item').each(function () {
                if (checkbox.is(':checked')) {
                    if($(this).find(`[data-attr="${optionName}"]`).length) return;
                    $(this).find('.form-product-variations__col').last().append(`
                                        <div style="margin-top: 10px" data-attr="${optionName}" class="form-item">
                                            <div class="form-item__title">${optionName}</div>
                                            <div class="input">
                                                <div class="input__body">
                                                  <input data-required="true" name="${sendName+parentName}[]" class="input__input" type="text" placeholder="${optionName}">
                                                </div>
                                            </div>
                                        </div>`)
                } else {
                    $(this).find('.form-product-variations__col').last().find(`[data-attr="${optionName}"]`).remove()
                }
            })
        })
        $(this).find('input[type="checkbox"]').each(function () {
            $(this).trigger('change')
        })
    })
    $(document).on('click', '.js-product-add', function () {
        let index = parseInt($(this).closest('.js-product-section').find('.js-product-item').last().find('.js-product-number')[0].textContent);
        let parent_asin = $(this).closest('.js-product-section').find('#parent_asin').val()
        let present_parent_asin = $(this).closest('.js-product-section').find('#present_parent_asin').val()
        index++;
        $(this).closest('.js-product-section').find('.js-product-list').append(`<div class="product-section-variations__item js-product-item">
                                  <div class="form-product-variations">
                                    <div class="form-product-variations__number js-product-number">${index}</div>
                                    <div class="form-product-variations__body">
                                      <div class="form-product-variations__row">
                                        <div class="form-product-variations__col" style="margin-bottom: -20px">
                                          <div class="form-item">
                                            <div class="form-item__title">ASIN</div>
                                                  <div class="input">
                                                    <div class="input__body">
                                                      <input ${$(this).closest('.js-product-section').attr('data-present') === "false" ? 'data-required="true"' : '' } data-asin='true' class="input__input" name="${$(this).closest('.js-product-section').attr('data-present') === "false" ? '' : 'present_' }ASIN[${$(this).closest('.js-product-section').attr('data-present') === "false" ? parent_asin : present_parent_asin }][]" type="text" placeholder="ASIN">
                                                      <input class="input__input" type="hidden" name="${$(this).closest('.js-product-section').attr('data-present') === "false" ? '' : 'present_' }parent_ASIN[${$(this).closest('.js-product-section').attr('data-present') === "false" ? parent_asin : present_parent_asin }][]" value="${$(this).closest('.js-product-section').attr('data-present') === "false" ? parent_asin : present_parent_asin }">
                                                    </div>
                                                  </div>
                                          </div>
                                          <div class="form-item">
                                            <div class="form-item__title">URL картинки</div>
                                                  <div class="input">
                                                    <div class="input__body">
                                                      <input data-required="true" name="${$(this).closest('.js-product-section').attr('data-present') === "false" ? '' : 'present_' }img[${$(this).closest('.js-product-section').attr('data-present') === "false" ? parent_asin : present_parent_asin }][]" class="input__input _img" type="text" placeholder="http://">
                                                    </div>
                                                  </div>
                                          </div>
                                          <div class="form-item">
                                            <div class="form-item__title">&nbsp;</div>
                                                  <button class="btn btn--icon-only btn--outline-red" type="button">
                                                          <svg class="icon icon--minus ">
                                                            <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                                          </svg>
                                                  </button>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-product-variations__row">
                                        <div class="form-product-variations__col">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-product-variations__img">
                                      <div class="form-product-variations__img-title">Предпросмотр ${$(this).closest('.js-product-section').attr('data-present') === "false" ? 'товара' : 'подарка' }</div><img src="/static/images/form-product__img.png" alt="product img">
                                    </div>
                                  </div>
                          </div>`)
        $('[data-type="options"]').each(function () {
            $(this).find('input[type="checkbox"]').each(function () {
                $(this).trigger('change')
            })
        })
    });
    $(document).on('click', '.btn.btn--icon-only.btn--outline-red', function (){
        $(this).closest('.js-product-item').remove();
    })
    $('.form').on('submit', function (e){
        e.preventDefault();
        const fields = $(this).find('input[type="text"][data-required="true"]')
        let status = 0;
        let fields_count = 0;
        fields.each(function (){
            $(this).closest('.form-item').find('.err_block').remove()
            if(!this.value) {
                fields_count++
                status = status-1
                $(this).closest('.form-item').append(`
                                                        <div class="err_block">
                                                            <span class="err_block_header">Ошибка</span>
                                                            <span class="err_block_text">Поле <br/> обязательно</span>
                                                        </div>`)
            } else {
                fields_count++
                status += 1
                $(this).closest('.form-item').find('.err_block').remove()
                
            }
        })
        if(status==fields_count){
          
          var json;
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
                } else if(json.opinion) {
                  $('#opinion').find('.err_block').remove()
                  $('#opinion').append( `<div class="err_block">
                                              <span class="err_block_header">Ошибка</span>
                                              <span class="err_block_text">Такая ссылка уже существует</span>
                                          </div>`);
              }else if(json.asin){
                let inputs = $('.js-product-item').find('input[data-asin="true"]').filter(function(){return this.value==json.asin})
                inputs.closest('.form-item').find('.err_block').remove()
                inputs.closest('.form-item').append( `<div class="err_block">
                                                            <span class="err_block_header">Одинаковые ASIN</span>
                                                            <span class="err_block_text">Проверьте данные</span>
                                                    </div>`);
                
              }
            },
        });
        }
    })
})