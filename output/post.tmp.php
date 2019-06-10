<div data-post_id="{{$post_id}}" class="discussion__post">
    <div class="post">
        <div class="post__user-avatar">
            <a href="" class="user-avatar">
                <img src="{{$avatar}}">
            </a>
        </div>
        <div class="post__post-content">
            <div class="post-content__info-stat-post">
                <div class="info-stat-post">
                                            <span class="info-stat-post__post-author">
                                                    <a href="#" class="post-author">{{$nickname}}</a>
                                            </span>
                    <span class="stat__delimeter">|</span>
                    <span class="info-stat-post__group-author">Користувач</span>
                    <span class="stat__delimeter">|</span>
                    <span class="info-stat-post__post-date">{{$datetime}}</span>
                </div>
                <div class="post-content_post-text">
                    <p class="post-text">{{$text}}</p>
                </div>
                <div class="post-content__rate-post">
                    <div data-user_id="{{$user_id}}" class="rate-post">
                        <span class="rate-post__text">Чи був цей коментар корисний?</span>
                        <button class="rate-post__button" data-inc="1">Так</button>
                        <button class="rate-post__button" data-inc="-1">Ні</button>
                    </div>
                    <div class="rate-post_result">
                        <span class="rate-post__text_result">Дякуємо за ваш відгук!</span>
                        <div class="rate-post__stat-post_result">
                            <i class="fas fa-thumbs-up"></i>
                            <span class="stat-post__positive">{{$pluses}}</span>
                            <span class="stat__delimeter">|</span>
                            <i class="fas fa-thumbs-down"></i>
                            <span class="stat-post__negative">{{$minuses}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>