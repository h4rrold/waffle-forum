<title>{{$title}}.Популярні теми</title>
<div class="content">
    <div class="content__page">
        <div class="page">
            <div class="page__page-title">
                <h2 class="page-title">Популярні теми</h2>
            </div>
            <div class="page__popular">
                <div class="popular"><?php
                    foreach ($topics as $topic) {
                        echo output('topic', ['directory_id' => $topic['directory_id'], 'directory_name' => $topic['name'], 'topic_id' => $topic['id'], 'user_avatar' => $topic['avatar'], 'title_topic' => $topic['title'], 'user_name' => $topic['nickname'], 'topic_date' => $topic['datetime'], 'post_amount' => $topic['amount_of_posts'], 'views_amount' => $topic['amount_of_views'], 'topic_text' => $topic['text']]);
                    } ?></div>
            </div>
            <div class="page__topic-amount-display">
                <span class="topic-amount-display">Відображено<span
                            class="topic-amount-display__text">{{$first}}-{{$second}}</span>тем</span>
            </div>
            <div class="page__next-button">
<!--                <form action="{{$page + 1}}" method="post">-->
<!--                    <input class="next-button" type="submit" value="Наступна">-->
<!--                </form>-->

            <?php if ($page != 1) : ?>
                <a href="{{ROUTE_PATH}}/community/popular-topics/1" class="post-page-nav__item">
                    <i class="fas fa-angle-double-left"></i>
                </a>
                <a href="{{ROUTE_PATH}}/community/popular-topics/{{$page - 1}}" class="post-page-nav__item">
                    <i class="fas fa-angle-left"></i>
                </a>
            <?php endif;?>
            <?php if ($second < 20) : ?>
                </a>
                <a href="{{ROUTE_PATH}}/community/popular-topics/{{$page + 1}}" class="post-page-nav__item">
                    <i class="fas fa-angle-right"></i>
                </a>
                <a href="{{ROUTE_PATH}}/community/popular-topics/99999" class="post-page-nav__item">
                    <i class="fas fa-angle-double-right"></i>
                </a>
            <?php endif;?>
            </div>
        </div>
    </div>
</div>

