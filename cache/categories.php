<title><?=$title?>.Розділи</title>
<div class="content">
        <div class="content__page">
            <div class="page">
                <div class="page__page-title">
                    <h2 class="page-title">Категорії</h2>
                </div>
                <div class="pagе__categories">
                    <div class="categories">
                    <?php foreach ($categories as $category)
                        echo output('category', ['name' => $category['name'], 'topic_last_title' => $category['title'], 'last_post_date' => $category['MaxDate'], 'nickname' => $category['nickname'], 'amount_of_topics' => $category['amount_of_topics'], 'amount_of_posts' => $category['amount_of_posts']]);
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>