<div class="page">
<div class="page-domain">
    <h1 class="h1 margin--b-40">Какой домен вы хотите прикрепить к вашим акциям?</h1>
    <form class="form page-domain__form" action="/admin/domain" method="post">
    <div class="form-item margin--b-24">
        <div class="form-item__title">Введите имя домена </div>
            <div class="input">
                <div class="input__body">
                <input class="input__input" required name="name" type="text" placeholder="mydomainname.com">
                </div>
            </div>
    </div>
    <div class="form-item margin--b-48">
        <div class="form-item__title">Укажите вашу почту, что бы мы прислали вам инструкцию </div>
            <div class="input">
                <div class="input__body">
                <input class="input__input" required name="mail" type="text" placeholder="email@domain.com">
                </div>
            </div>
    </div><button class="btn"  type='submit'><span class="btn__text">Далее</span></button>
    </form>
</div>
</div>
<script src="/static/js/form.js"></script>