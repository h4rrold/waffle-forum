<title>{{$title}} - {{urldecode($directory_name)}}</title>
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
                <h2 class="page-title">{{$directory_name}}</h2>
            </div>
            <?php if (isset($_COOKIE['session_id']) && isset($_SESSION['logged-user']) && ($_COOKIE['session_id'] == session_id())) : ?>
                <div class="page__button-create page__button-create_topic">
                    <a href='{{ROUTE_PATH}}/community/categories/{{$directory_id}}/{{$directory_name}}/create-topic'class="button-create">Створити тему</a>
                </div>
            <?php endif;?>

            <div class="page__popular">
                <div class="popular"><?php
                    foreach ($topics as $topic) {
                        echo output('topic', ['directory_id' => $directory_id, 'directory_name' => $directory_name, 'topic_id' => $topic['id'], 'user_avatar' => $topic['avatar'], 'title_topic' => $topic['title'], 'user_name' => $topic['nickname'], 'topic_date' => $topic['datetime'], 'post_amount' => $topic['amount_of_posts'], 'views_amount' => $topic['amount_of_views'], 'topic_text' => $topic['text']]);
                    } ?></div>
            </div>
<!--            <div class="page__topic-amount-display">-->
<!--                <span class="topic-amount-display">Відображено<span-->
<!--                        class="topic-amount-display__text">{{$first}}-{{$second}}</span>тем</span>-->
<!--            </div>-->
<!--            <div class="page__next-button">-->
<!--                <form action="{{$page + 1}}" method="post">-->
<!--                    <input class="next-button" type="submit" value="Наступна">-->
<!--                </form>-->
            </div>
        </div>
    </div>
</div>

