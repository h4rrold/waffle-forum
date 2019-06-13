<title>{{$title}} - Головна</title>
<div class="start-main">
    <div class="container">
        <div class="container__main-text">
            <h1 class="main-text">Waffle<br>commuity</h1>
            <h2 class="main-subtext">дискусії починаються тут</h2>
        </div>
        <div class="container__search">
            
                <form action="">
                <div class="search">
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
        <button class="community-menu__button-drop"><i class="fas fa-chevron-down"></i><span
                class="button_drop__text">Forum menu</span></button>
        <!--<button class="community-menu__button-up_drop"><i class="fas fa-chevron-up"></i><span class="button_drop__text">Forum menu</span>-->
        </button>
        <nav class=" community-menu_drop">
            <li class="community-menu__item_drop"><a href="{{ROUTE_PATH}}/community/home" class="community-menu__link_drop">Домашня</a></li>
            <li class="community-menu__item_drop"><a href="{{ROUTE_PATH}}/community/categories" class="community-menu__link_drop">Категорії</a></li>
            <li class="community-menu__item_drop"><a href="{{ROUTE_PATH}}/community/popular-topics/1" class="community-menu__link_drop community-menu__link_drop_active">Популярні</a></li>
            <li class="community-menu__item_drop"><a href="{{ROUTE_PATH}}/community/recent-topics/1" class="community-menu__link_drop">Недавні</a></li>
        </nav>
    </div>
    <nav class="community-menu">
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/home" class="community-menu__link">Домашня</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/categories" class="community-menu__link">Категорії</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/popular-topics/1" class="community-menu__link community-menu__link_active">Популярні</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/recent-topics/1" class="community-menu__link">Недавні</a></li>
    </nav>
</div>