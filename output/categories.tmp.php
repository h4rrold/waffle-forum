<title>{{$title}} - Розділи</title>
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
            <li class="community-menu__item_drop"><a href="{{ROUTE_PATH}}/community/categories" class="community-menu__link_drop community-menu__link_drop_active">Категорії</a></li>
            <li class="community-menu__item_drop"><a href="{{ROUTE_PATH}}/community/popular-topics/1" class="community-menu__link_drop ">Популярні</a></li>
            <li class="community-menu__item_drop"><a href="{{ROUTE_PATH}}/community/recent-topics/1" class="community-menu__link_drop">Недавні</a></li>

        </nav>
    </div>
    <nav class="community-menu">
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/home" class="community-menu__link">Домашня</a></li>

        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/categories" class="community-menu__link community-menu__link_active">Категорії</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/popular-topics/1" class="community-menu__link ">Популярні</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/recent-topics/1" class="community-menu__link">Недавні</a></li>

    </nav>
</div>
<div class="content">
        <div class="content__page">
            <div class="page">
                <div class="page__page-title">
                    <h2 class="page-title">Категорії</h2>
                </div>
                <div class="pagе__categories">
                    <div class="categories">
                    <?php foreach ($categories as $category)
                        echo output('category', ['id_topic' => $category['id_topic'], 'id' => $category['id'], 'name' => $category['name'], 'description' => $category['description'], 'topic_last_title' => $category['title'], 'last_post_date' => $category['MaxDate'], 'nickname' => $category['nickname'], 'amount_of_topics' => $category['amount_of_topics'], 'amount_of_posts' => $category['amount_of_posts']]);
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>