function initFieldProdAppend(id) {
    const form = $(`#${id}`)
    form.find('.js-product-add').on('click', function (){
        let index = parseInt(form.find('.js-product-number').last()[0].textContent)
        index++
        const append = `<div class="product-section__item js-product-item">
                                <div class="form-product">
                                    <div class="form-product__number js-product-number">${index}</div>
                                    <div class="form-product__body">
                                        <div class="form-product__row">
                                            <div class="form-product__col-12">
                                                <div class="form-item">
                                                    <div class="form-item__title">Название товара для отзыва</div>
                                                    <div class="input">
                                                        <div class="input__body">
                                                            <input data-required="true" class="input__input " name=name[] type="text" placeholder="Название товара">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-product__row">
                                            <div class="form-product__col">
                                                <div class="form-item">
                                                    <div class="form-item__title">ASIN товара, если есть</div>
                                                    <div class="input form-product__w-asin--lg">
                                                        <div class="input__body">
                                                            <input ${form.find('.js-product-list').attr('data-present') === "false" ? 'data-required="true"' : '' } class="input__input" data-asin='true' name="ASIN[]" type="text" placeholder="ASIN товара">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-item">
                                                    <div class="form-item__title">URL картинки</div>
                                                    <div class="input form-product__w-img-url">
                                                        <div class="input__body">
                                                            <input data-required="true" name="img[]" class="input__input _img" type="text" placeholder="http://">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-item">
                                                    <div class="form-item__title">Вариация?</div>
                                                    <div class="checkbox _checked">
                                                        <label>
                                                            <input type="hidden" class="_hidden" name="variate[]" value="0">
                                                            <input type="checkbox"><span></span>
                                                            <div class="checkbox__text">Да</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-product__col">
                                                <div class="form-item">
                                                    <div class="form-item__title">&nbsp;</div>
                                                    <button class="btn btn--icon-only btn--outline-red form-product__delete" type="button">
                                                        <svg class="icon icon--minus ">
                                                            <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-product__img">
                                        <div class="form-product__img-title">Предпросмотр товара</div>
                                        <img src="/static/images/form-product__img.png" alt="product img">
                                    </div>
                                </div>
                            </div>`
        form.find('.js-product-list').append(append)
    })
    $(document).on('click', `#${id} .btn.btn--icon-only.btn--outline-red`, function (){
        $(this).closest('.js-product-item').remove()
    })
}
function initFieldPresAppend(id) {
    const form = $(`#${id}`)
    form.find('.js-product-add').on('click', function (){
        let index = parseInt(form.find('.js-product-number').last()[0].textContent)
        index++
        const append = `<div class="product-section__item js-product-item">
                                <div class="form-product">
                                    <div class="form-product__number js-product-number">${index}</div>
                                    <div class="form-product__body">
                                        <div class="form-product__row">
                                            <div class="form-product__col-12">
                                                <div class="form-item">
                                                    <div class="form-item__title">Название подарка для отзыва</div>
                                                    <div class="input">
                                                        <div class="input__body">
                                                            <input data-required="true" class="input__input" name=present_name[] type="text" placeholder="Название подарка">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-product__row">
                                            <div class="form-product__col">
                                                <div class="form-item">
                                                    <div class="form-item__title">ASIN подарка, если есть</div>
                                                    <div class="input form-product__w-asin--lg">
                                                        <div class="input__body">
                                                            <input ${form.find('.js-product-list').attr('data-present') === "false" ? 'data-required="true"' : '' } class="input__input" name="present_ASIN[]" data-asin="true" type="text" placeholder="ASIN подарка">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-item">
                                                    <div class="form-item__title">URL картинки</div>
                                                    <div class="input form-product__w-img-url">
                                                        <div class="input__body">
                                                            <input data-required="true" name="present_img[]" class="input__input _img" type="text" placeholder="http://">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-item">
                                                    <div class="form-item__title">Вариация?</div>
                                                    <div class="checkbox _checked">
                                                        <label>
                                                            <input type="hidden" class="_hidden" name="present_var[]" value="0">
                                                            <input type="checkbox"><span></span>
                                                            <div class="checkbox__text">Да</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-product__col">
                                                <div class="form-item">
                                                    <div class="form-item__title">&nbsp;</div>
                                                    <button class="btn btn--icon-only btn--outline-red form-product__delete" type="button">
                                                        <svg class="icon icon--minus ">
                                                            <use xlink:href="/static/images/icons.svg#icon--minus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-product__img">
                                        <div class="form-product__img-title">Предпросмотр подарка</div>
                                        <img src="/static/images/form-product__img.png" alt="product img">
                                    </div>
                                </div>
                            </div>`
        form.find('.js-product-list').append(append)
    })
    $(document).on('click', `#${id} .btn.btn--icon-only.btn--outline-red`, function (){
        $(this).closest('.js-product-item').remove()
    })
}

$(document).ready(function (){
    initFieldProdAppend('productsForm')
    initFieldPresAppend('giftsForm')
    $('.form').on('submit', function (e){
        e.preventDefault()
        const fields = $(this).find('input[data-required="true"]')
        let status = 0;
        let fields_count = 0;
        fields.each(function (){
            $(this).closest('.form-item').find('.err_block').remove()
            if(!this.value) {
                if($(this).attr('data-select') === 'true') {
                    fields_count++
                    status = status-1
                    $(this).parent().append(` <div class="err_block">
                                                            <span class="err_block_header">Ошибка</span>
                                                            <span class="err_block_text">Поле <br/> обязательно</span>
                                                        </div>`)
                } else {
                    fields_count++
                    status += 1
                    $(this).closest('.form-item').append(`
                                                        <div class="err_block">
                                                            <span class="err_block_header">Ошибка</span>
                                                            <span class="err_block_text">Поле <br/> обязательно</span>
                                                        </div>`)
                }
            } else {
                $(this).closest('.form-item').find('.err_block').remove()
            }
        })
        if(status==fields_count && status==0){
          
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


