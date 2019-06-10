<div class="content_no-margin">
        <div class="content__page-sign-in">
            <div class="page-sign-in">
                <div class="page-sign-in__page-title">
                    <h1 class="page-title_white">Вхід</h1>
                </div>
                <div class="page-sign-in__container-sign-in">
                    <div class="container-sign-in">
                        <div class="container-sign-in__sign-in-form">
                            <form action="{{ROUTE_PATH}}/log" class="sign-in-form" method="post">
                                    <div class="sign-in-form__input-item">
                                            <div class="input-item__text">Email or Nickname</div>
                                            <input type="email" name="nickoremail" id="" class="input-item">
                                        <!--навешен display для first-child--><div class="input-item__text-error">Ви ввели некоректний email</div>
                                        </div>
                                <div class="sign-in-form__input-item">
                                   <div class="input-item__text">Пароль</div>
                                    <input type="password" name="pas-in" id="" class="input-item">
                                    <div class="input-item__text-error">Ви ввели невірний пароль</div>
                                </div>
                    
                                <div class="sign-in-form__button-sign-in">
                                    <input type="submit" name="send" value="Увійти" class="button-sign-in">
                                </div>
                            </form>

                        </div>
                            <div class="container-sign-in__propose-reg">
                                <span class="propose-reg__text">Ще не маєте акаунта Waffle?</span>
                                <span class="propose-reg__reg-button-link">
                                    <a href="{{ROUTE_PATH}}/registration" class="reg-button-link">Розпочати</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>