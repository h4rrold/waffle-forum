<title><?=$title?>.Теми</title>
<div class="content">
    <div class="content__page">
        <div class="page">
            <div class="page__page-title">
                <h2 class="page-title">Теми</h2>
            </div>
            <div class="page__popular">
                <div class="popular"><?php
                    foreach ($topics as $topic) {
                        echo output('topic', ['directory_id' => $directory_id, 'directory_name' => $directory_name, 'topic_id' => $topic['id'], 'user_avatar' => $topic['avatar'], 'title_topic' => $topic['title'], 'user_name' => $topic['nickname'], 'topic_date' => $topic['datetime'], 'post_amount' => $topic['amount_of_posts'], 'views_amount' => $topic['amount_of_views'], 'topic_text' => $topic['text']]);
                    } ?></div>
            </div>
<!--            <div class="page__topic-amount-display">-->
<!--                <span class="topic-amount-display">Відображено<span-->
<!--                        class="topic-amount-display__text"><?=$first?>-<?=$second?></span>тем</span>-->
<!--            </div>-->
<!--            <div class="page__next-button">-->
<!--                <form action="<?=$page + 1?>" method="post">-->
<!--                    <input class="next-button" type="submit" value="Наступна">-->
<!--                </form>-->
            </div>
        </div>
    </div>
</div>

