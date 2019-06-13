<title>{{$title}} - Домашня</title>
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
<div class="content">
    <div class="content__page">
        <div class="page">
            <div class="page__page-title">
                <h2 class="page-title">Цікаві теми</h2>
            </div>
            <div class="page__popular">
                <div class="popular"><?php
                    foreach ($topics as $topic) {
                        echo output('topic', ['directory_id' => $topic['directory_id'], 'directory_name' => $topic['name'], 'topic_id' => $topic['id'], 'user_avatar' => $topic['avatar'], 'title_topic' => $topic['title'], 'user_name' => $topic['nickname'], 'topic_date' => $topic['datetime'], 'post_amount' => $topic['amount_of_posts'], 'views_amount' => $topic['amount_of_views'], 'topic_text' => $topic['text']]);
                    } ?>
                </div>
            </div>

            <div class="page__more-popular-button">
                <a href="{{ROUTE_PATH}}/community/popular-topics/1"><button formmethod="post" formaction="{{ROUTE_PATH}}/community/popular-topics/1" class="more-popular-button">Більше популярних</button></a>
            </div>
            <div class="page__categories-home">
                <div class="categories-home">
                    <div class="categories-home__categories-home-title">
                        <div class="categories-home-title">Обери розділ</div>
                    </div>
                    <div class="categories-home__categories-cards">
                        <div class="categories-cards">
                            <?php foreach ($categories as $category)
                                echo output('category2', ['id_topic' => $category['id_topic'],
                                    'imgs' => $imgs[$category['id'] - 1],
                                    'id' => $category['id'],
                                    'name' => $category['name'],
                                    'topic_last_title' => $category['title'],
                                    'last_post_date' => $category['MaxDate'],
                                    'nickname' => $category['nickname'],
                                    'amount_of_topics' => $category['amount_of_topics'],
                                    'amount_of_posts' => $category['amount_of_posts']]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>