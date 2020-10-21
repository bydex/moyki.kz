<div class="form">
    <form method="post" name="order" data-abide novalidate>
        <div class="form-title">
            Оставьте заявку на консультацию
        </div>
        <label class="form-label">Введите ваше имя:</label>
        <div class="form-field form-field--name">
            <input type="text" name="name" placeholder="Ваше имя" required/>
        </div>
        <label class="form-label">Введите контактный телефон:</label>
        <div class="form-field form-field--phone">
            <input type="text" name="phone" placeholder="+7 (___) ___-__-__" class="dev_phone_mask" required/>
        </div>
        <label class="form-label">Ваша электронная почта:</label>
        <div class="form-field form-field--email">
            <input type="email" name="email" placeholder="Ваша электронная почта" required pattern="email"/>
        </div>
        <div class="form-agreement">
            Нажимая на кнопку, вы принимаете
            <a href="javascript:;" data-open="modal-policy">
                Положение и Согласие
            </a>
            на обработку персональных данных.
        </div>
        <button type="submit" class="button button--large button--full"><i class="icon-click"></i>Оставить заявку
        </button>
    </form>
</div>