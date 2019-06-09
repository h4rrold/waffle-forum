 <div class="popular__topic">
            <div id="idTopic" class="topic">
                <div class="topic__user-avatar">
                    <a href="#" class="user-avatar">
                        <img src="{{$user_avatar}}" alt="">
                    </a>
                </div>
                <div class="topic__topic-content">
                    <div class="topic-content__title-topic">
                        <a href="http://localhost/waffle-forum/community/categories/{{$directory_id}}/{{$directory_name}}/{{$topic_id}}/{{$title_topic}}" class="title-topic">{{$title_topic}}</a>
                    </div>

                    <div class="topic-content__info-stat">
                        <div class="info-stat">
                            <div class="info-stat__fl-stat">
                                <div class="fl-stat">
                                                    <span class="fl-stat__topic-author">
                                                        <a href="#" class="topic-author">{{$user_name}}</a>
                                                    </span>
                                    <span class="fl-stat__delimeter">|</span>
                                    <span class="fl-stat__topic-post-date">{{$topic_date}}</span>
                                </div>
                            </div>
                            <div class="info-stat__fr-stat">
                                <div class="fr-stat">
                                                <span class="fr-stat__post-amount">{{$post_amount}}
                                                    <i class="far fa-comment-dots"></i>
                                                </span>
                                    <span class="fr-stat__delimeter">|</span>
                                    <span class="fr-stat__views-amount">{{$views_amount}}<i class="far fa-eye"></i>
                                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topic-content__text-topic">
                        <p class="text-topic">{{$topic_text}}</p>
                    </div>
                    <div class="topic-content__read-more"><a href="#" class="read-more">Читати детальніше</a>
                    </div>
                </div>
            </div>
        </div>