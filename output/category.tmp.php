<div class="categories__category">
    <div class="category">
        <div class="category__category-content">
            <div class="category-content__title-category">
                <a href="{{ROUTE_PATH}}/community/categories/{{$id}}/{{$name}}" class="title-catagory">{{$name}}</a>
            </div>
            <div class="category-content__info-stat">
                <div class="info-stat-category">
                    <div class="info-stat__last-post-topic">
                        <div class="last-post-topic">Останнє в:
                            <!--Підставити ссилку в href--><a href="{{ROUTE_PATH}}/community/categories/{{$id}}/{{$name}}/{{$id_topic}}/{{$topic_last_title}}/1" class="last-post-topic__text">{{$topic_last_title}}</a>
                        </div>
                    </div>
                    <div class="info-stat-category__post-info">
                        <div class="post-info__last-post-topic-author">
                            <div class="last-post-topic-author nowrap">від<span class="last-post-topic-author__text"> <a href="#" class="topic-author">{{$nickname}}</a></span>
                                <span class="stat__delimeter">|</span>
                            </div>
                        </div>

                        <div class="post-info__last-post-topic-date nowrap">
                            <span class="last-post-topic-date">{{$last_post_date}}</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="category-content__category-description">
                <div class="category-description__text">Дізнатися як саме використовувати забезпечення Waffle для своїх проектів або поділитися своїм досвідом використання ви зможете саме тут!
                </div>
            </div>
            <div class="category-content__info-stat-bottom">
                <div class="info-stat-bottom">
                                            <span class="info-stat-bottom__topic-amount">
                                                <span class="topic-amount">{{$amount_of_topics}}</span>тем
                                            </span>
                    <span class="stat__delimeter">|</span>
                    <span class="info-stat-bottom__post-amount">
                                                    <span class="post-amount">{{$amount_of_posts}}</span>повідомлень
                                            </span>
                </div>
            </div>
        </div>
    </div>
</div>