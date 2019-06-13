<title>{{$title}} - Реєстрація</title>
<script src="{{ROUTE_PATH}}/scripts/register.js"></script>
<div class="content_no-margin">
        <div class="content__page-registration">
            <div class="page-registration">
                <div class="page-registration__page-title">
                    <h1 class="page-title_white">Реєстрація</h1>
                    <h2 class="page-subtitle_white">створи свій акаунт в спільноті Waffle вже зараз!</h2>
                </div>
                <div class="page-registration__container-registration">
                    <div class="container-registration">
                        <div class="container-registration__reg-form">
                            <form action="{{ROUTE_PATH}}/reg" class="reg-form" method="post">
                                    <div class="reg-form__input-item">
                                            <div class="input-item__text">Email</div>
                                            <input type="email" name="email" class="input-item">
                                        <!--навешен display для first-child--><div class="input-item__text-error" id="email" style="display: none;">Користувач з таким E-Mail існує</div>
                                        </div>
                                <div class="reg-form__input-item">
                                   <div class="input-item__text">Нік</div>
                                    <input type="text" minlength="3" name="nick-in" class="input-item">
                                    <div class="input-item__text-error">Користувач з таким ніком існує</div>
                                </div>
                                <div class="reg-form__input-item">
                                    <div class="input-item__text">Пароль</div>
                                    <input type="password" minlength="8" name="pas-in" class="input-item">
                                    <div class="input-item__text-error">Текст помилки буде тут</div>
                                </div>
                                <div class="reg-form__input-item">
                                    <div class="input-item__text">Повторіть пароль</div>
                                    <input type="password" minlength="8" name="pas-in2" class="input-item">
                                    <div class="input-item__text-error">Паролі не збігаються</div>
                                </div>
                                <div class="reg-form__button-create">
                                    <input type="submit" value="Створити акаунт" class="button-create" name="send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>