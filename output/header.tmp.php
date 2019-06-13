<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ROUTE_PATH}}/styles/formReset.css">
    <link rel="stylesheet" href="{{ROUTE_PATH}}/scripts/wysibb/theme/default/wbbtheme.css">
    <link rel="stylesheet" href="{{ROUTE_PATH}}/styles/fonts.css">
    <link rel="stylesheet" href="{{ROUTE_PATH}}/styles/main.css">
    <link href="{{ROUTE_PATH}}/fonts/fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
    <script src="{{ROUTE_PATH}}/scripts/jquery-3.4.1.js"></script>
    <script src="{{ROUTE_PATH}}/scripts/wysibb/jquery.wysibb.js"></script>
    <script src="{{ROUTE_PATH}}/scripts/main.js"></script>

</head>
<body class="body">
<header class="header">
    <div class="header__content">
        <div class="header__logo">

            <a href="{{ROUTE_PATH}}/community/home" class="logo-link"><img src="{{ROUTE_PATH}}/img/logo-fnl-white.png" class="logo"
                                               alt="Лого Waffle forum"></a>
        </div>
        <div class="header__nav_drop">
            <nav class="nav_drop__button">
                <div class="block-users-buttons">

                        <?php if (isset($_COOKIE['session_id']) && isset($_SESSION['logged-user']) && ($_COOKIE['session_id'] == session_id())) : ?>
                        <div class="user-buttons-block_signed_drop">
                        <span class="user-buttons-block_signed__user-avatar">
                            <a href="<?=ROUTE_PATH?>/profile" class="user-avatar user-avatar_header">
                                <img src="{{$_SESSION['logged-user']['avatar']}}">
                            </a>
                        </span>
                            <a href="{{ROUTE_PATH}}/cabinet" class="username">{{$_SESSION['logged-user']['nickname']}}</a>
                        </div><?php else:?>
                        <div class = "block-users-buttons_unsigned_drop">
                            <div class="nav__sign-in-button_drop">
                                <div class="sign-in-button_drop">
                                    <i class="fas fa-user"></i>
                                    <a href="{{ROUTE_PATH}}/login" class="sign-in-button-text">Вхід</a>
                                </div>
                            </div>
                            <div class="nav__registration-button_drop">
                                <a href="{{ROUTE_PATH}}/registration" class="registration-button_drop"><i
                                            class="fas fa-user-plus"></i>Реєстрація</a>
                            </div>
                        </div>
                        <?php endif;?>
                    <div class="nav__search-button_drop">
                        <a href="#" class="search-button_drop"><i class="fas fa-search"></i>Пошук</a>

                    </div>
                    <div class="nav__locale_drop">
                        <div class="locale_drop">
                      <!--  <div id="google_translate_element" style="position: relative; opacity: 0;"></div>
                            <div style="position: absolute; left: 0; top: 0; z-index: -1;">--><i class="fas fa-globe"></i><!--</div>
                            <a href="#" class="locale__text">УКР</a>
                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                            }
                            </script>

                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            -->
                        </div>  
                    </div>
                </div>

                <button class="button__burger"><i class="fas fa-bars"></i></button>
                <button class="button__cross"><i class="fas fa-times"></i></button>
                <div class="nav__menu_drop">
                    <div class="menu_drop__logo_drop"><img src="img/logo-fnl-white.png" alt="" class="logo_drop">
                    </div>
                    <ul class="menu_drop">
                        <li class="menu__item_drop"><a href="{{ROUTE_PATH}}/" class="menu__link_drop">Головна</a>
                        </li>
                        <li class="menu__item_drop"><a href="https://github.com/h4rrold/waffle-forum/blob/master/README.md" class="menu__link_drop">Про нас</a></li>
                        <li class="menu__item_drop"><a href="https://github.com/h4rrold/waffle-forum/commits/master" class="menu__link_drop">Блог</a></li>
                        <li class="menu__item_drop"><a href="https://github.com/h4rrold/waffle-forum" class="menu__link_drop">Завантаження</a></li>
                        <li class="menu__item_drop "><a href="{{ROUTE_PATH}}/community/home"
                                                        class="menu__link_drop menu__link_active_drop">Спільнота</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
        <div class="header__nav">
            <ul class="nav__menu">
                <li class="menu__item"><a href="{{ROUTE_PATH}}/" class="menu__link">Головна</a></li>
                <li class="menu__item"><a href="https://github.com/h4rrold/waffle-forum/blob/master/README.md" class="menu__link">Про нас</a></li>
                <li class="menu__item"><a href="https://github.com/h4rrold/waffle-forum/commits/master" class="menu__link">Блог</a></li>
                <li class="menu__item"><a href="https://github.com/h4rrold/waffle-forum" class="menu__link">Завантаження</a></li>
                <li class="menu__item menu__item_active"><a href="{{ROUTE_PATH}}/community/home"
                                                            class="menu__link">Спільнота</a></li>
            </ul><?php if (isset($_COOKIE['session_id']) && isset($_SESSION['logged-user']) && ($_COOKIE['session_id'] == session_id())) : ?>
            <div class="user-buttons-block_signed">
                    <span class="user-buttons-block_signed__user-avatar">

                        <a href="<?=ROUTE_PATH?>/profile" class="user-avatar user-avatar_header">

                            <img src="{{$_SESSION['logged-user']['avatar']}}">
                        </a>
                    </span>
                <a href="{{ROUTE_PATH}}/cabinet" class="username">{{$_SESSION['logged-user']['nickname']}}</a>
            </div><?php else:?>
            <div class="user-buttons-block_unsigned">
                <div class="nav__sign-in-button">
                    <div class="sign-in-button">
                        <i class="fas fa-user"></i>
                        <a href="{{ROUTE_PATH}}/login" class="sign-in-button-text">Вхід</a>
                    </div>
                </div>
                <div class="nav__registration-button">
                    <a href="{{ROUTE_PATH}}/registration" class="registration-button"><i
                                class="fas fa-user-plus"></i>Реєстрація</a>
                </div>
            </div><?php endif;?>
            <div class="nav__search-button">


                <a href="#" class="search-button"><i class="fas fa-search"></i>Пошук</a>

            </div>
            <div class="nav__locale">
                <div class="locale">
                    <i class="fas fa-globe"></i>
                    <a href="#" class="locale__text">УКР</a>
                </div>
            </div>
        </div>
    </div>

</header>
