<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/waffle-forum/styles/fonts.css">
    <link rel="stylesheet" href="/waffle-forum/styles/main.css">
    <link href="/waffle-forum/fonts/fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
    <script src="/waffle-forum/scripts/jquery-3.4.1.js" defer></script>
    <script src="/waffle-forum/scripts/main.js" defer></script>
    <title>Популярні теми</title>
</head>

<body class="body">
<header class="header">
    <div class="header__content">
        <div class="header__logo">
            <a href="#" class="logo-link"><img src="/waffle-forum/img/logo-fnl-white.png" class="logo" alt="Лого Waffle forum"></a>
        </div>
        <div class="header__nav_drop">
            <nav class="nav_drop__button">
                <div class="block-users-buttons">
                    <div class="nav__sign-in-button_drop">
                        <div class="sign-in-button_drop">
                            <i class="fas fa-user"></i>
                            <a href="#" class="sign-in-button-text">Вхід</a>
                        </div>
                    </div>
                    <div class="nav__registration-button_drop">
                        <a href="#" class="registration-button_drop"><i class="fas fa-user-plus"></i>Реєстрація</a>
                    </div>
                    <div class="nav__search-button_drop">


                        <a href="#" class="search-button_drop"><i class="fas fa-search"></i>Пошук</a>

                    </div>
                    <div class="nav__locale_drop">
                        <div class="locale_drop">
                            <i class="fas fa-globe"></i>
                            <a href="#" class="locale__text">УКР</a>
                        </div>
                    </div>
                </div>


                <button class="button__burger"><i class="fas fa-bars"></i></button>
                <button class="button__cross"><i class="fas fa-times"></i></button>
                <div class="nav__menu_drop">
                    <div class="menu_drop__logo_drop"><img src="/img/logo-fnl-white.png" alt="" class="logo_drop"></div>
                    <ul class="menu_drop">
                        <li class="menu__item_drop"><a href="#" class="menu__link_drop">Головна</a></li>
                        <li class="menu__item_drop"><a href="#" class="menu__link_drop">Про нас</a></li>
                        <li class="menu__item_drop"><a href="#" class="menu__link_drop">Блог</a></li>
                        <li class="menu__item_drop"><a href="#" class="menu__link_drop">Завантаження</a></li>
                        <li class="menu__item_drop "><a href="#" class="menu__link_drop menu__link_active_drop">Спільнота</a></li>
                    </ul>
                </div>
            </nav>

        </div>
        <div class="header__nav">
            <ul class="nav__menu">
                <li class="menu__item"><a href="#" class="menu__link">Головна</a></li>
                <li class="menu__item"><a href="#" class="menu__link">Про нас</a></li>
                <li class="menu__item"><a href="#" class="menu__link">Блог</a></li>
                <li class="menu__item"><a href="#" class="menu__link">Завантаження</a></li>
                <li class="menu__item menu__item_active"><a href="#" class="menu__link">Спільнота</a></li>
            </ul>
            <div class="nav__sign-in-button">
                <div class="sign-in-button">
                    <i class="fas fa-user"></i>
                    <a href="#" class="sign-in-button-text">Вхід</a>
                </div>
            </div>
            <div class="nav__registration-button">
                <a href="#" class="registration-button"><i class="fas fa-user-plus"></i>Реєстрація</a>
            </div>
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
<div class="start-main">
    <div class="container">
        <div class="container__main-text">
            <h1 class="main-text">Waffle<br>commuity</h1>
            <h2 class="main-subtext">дискусії починаються тут</h2>
        </div>
        <div class="container__search">
            <div class="search">
                <form action="">
                    <input type="text" name="search__field" id="" class="search__field"
                           placeholder="введіть ваш запит..."></input>
                    <button type="submit" class="search__button clearfix"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container__community-menu">
    <div class="community-menu-block_drop">
        <button class="community-menu__button-down_drop"><i class="fas fa-chevron-down"></i><span
                    class="button_drop__text">Forum menu</span></button>
        <button class="community-menu__button-up_drop"><i class="fas fa-chevron-up"></i><span class="button_drop__text">Forum menu</span>
        </button>
        <nav class=" community-menu_drop">
            <li class="community-menu__item_drop"><a href="#" class="community-menu__link_drop">Домашня</a></li>
            <li class="community-menu__item_drop"><a href="http://localhost/waffle-forum/categories" class="community-menu__link_drop">Категорії</a></li>
            <li class="community-menu__item_drop"><a href="http://localhost/waffle-forum/popular-topics/1" class="community-menu__link_drop community-menu__link_drop_active">Популярні</a></li>
            <li class="community-menu__item_drop"><a href="#" class="community-menu__link_drop">Недавні</a></li>
        </nav>
    </div>
    <nav class="community-menu">
        <li class="community-menu__item"><a href="#" class="community-menu__link">Домашня</a></li>
        <li class="community-menu__item"><a href="http://localhost/waffle-forum/categories" class="community-menu__link">Категорії</a></li>
        <li class="community-menu__item"><a href="http://localhost/waffle-forum/popular-topics/1" class="community-menu__link community-menu__link_active">Популярні</a></li>
        <li class="community-menu__item"><a href="#" class="community-menu__link">Недавні</a></li>
    </nav>
</div>