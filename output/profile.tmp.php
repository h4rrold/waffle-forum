<div class="content">
    <div class="content__page">
        <div class="page">
            <div class="page__page-title">
                <h1 class="page-title">Особистий кабінет
                    <span class="page-title__username-profile"><span class="username-profile">{{$nickname}}</span></span>
                </h1>
            </div>
            <div class="page__user-info-block">
                <div class="user-info-block">
                    <div class="user-info-block__user-avatar">
                        <a href="#" class="user-avatar">
                            <img src="img/user-avatar.png" alt="">
                        </a>
                    </div>
                    <div class="user-info-block__user-info-main">
                        <div class="user-info-main">
                            <div class="user-info-main__username-info">
                                <div class="username-info">{{$nickname}}</div>
                            </div>
                            <div class="user-info-main__group-info">
                                <span class="group-info-text">Група:</span>
                                <span class="group-info">{{$name}}</span>
                            </div>
                            <div class="user-info-main__email-info">
                                <span class="email-info__text">Email:</span>
                                <span class="email-info">{{$name}}</span>
                            </div>

                            <div class="user-info-main__date-reg-info">
                                <span class="date-reg-info__text">Дата реєстрації:</span>
                                <span class="date-reg-info">{{$registration_date}}</span>
                            </div>
                            <div class="user-info-main__bio-info">
                                <span class="bio-info__text">Біографія:</span>
                                <span class="bio-info">{{$bio}}
                                </span>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="page__user-info-rating">
                    <div class="user-info-rating">
                        <div class="user-info-rating__rating-item">
                            <div class="rating-item">
                                <div class="rating-item__text">Загальний рейтинг користувача</div>
                                <div class="rating-item_num">{{$rating}}</div>
                            </div>
                        </div>
                        <div class="user-info-rating__rating-item">
                            <div class="rating-item">
                                <div class="rating-item__text">Постів з позитивною відміткою</div>
                                <div class="rating-item_num">{{$positive}}</div>
                            </div>
                        </div>
                        <div class="user-info-rating__rating-item">
                            <div class="rating-item">
                                <div class="rating-item__text">Постів з негативною відміткою</div>
                                <div class="rating-item_num">{{$negative}}</div>
                            </div>
                        </div>

                    </div>
                    <div class="user-info-rating__users-votes">
                        <div class="users-votes">
                            <div class="user-votes__votes-title">
                                <div class="votes-title">Оцінки постів від інших користувачів</div>
                            </div>
                            <?php foreach ($other_votes as $key): ?>
                                <div class="users-votes__user-vote">
                                    <div class="user-vote">
                                        <div class="user-vote__user-avatar">
                                            <div class="user-avatar">
                                                <img src="<?=$key['avatar']?>" alt="">
                                            </div>
                                        </div>
                                        <div class="user-vote__vote-message">
                                            <div class="vote-message">
                                                <span class="vote-message__username"><?=$key['nickname']?></span>
                                                <span class="vote-message__text">оцінив пост</span>
                                                <span class="vote-message__est">k
                                                <?php if($key['value'] == 1): ?>
                                                    <i class="fas fa-thumbs-up"></i>
                                                <?php else: ?>
                                                    <i class="fas fa-thumbs-down"></i>
                                                <?php endif; ?>
                                            </span>
                                                <span class="vote-message__est-topic">
                                                <span class="est-topic">
                                                    <span class="est-topic__text">в темі:</span>
                                                    <a href="" class="est-topic__title">
                                                        <?=$key['title']?>
                                                    </a>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
                <div class="page__user-recent-topics">
                    <div class="user-recent-topics__title-recent-topics">
                        <div class="title-recent-topics">Недавні теми</div>
                    </div>
                    <?php foreach($posts as $key): ?>
                    <div class="user-recent-topics">
                        <div class="user-recent-topics__topic">
                            <div class="topic topic_recent">
                                <div class="topic__user-avatar topic__user-avatar_recent">
                                    <a href="#" class="user-avatar">
                                        <img src="<?=$key['avatar']?>" alt="">
                                    </a>
                                </div>
                                <div class="topic__topic-content recent-topic__topic-content">
                                    <div class="recent-topic__title-topic_recent">
                                        <a href="#" class=" title-topic title-topic_recent"><?=$key['title']?></a>
                                    </div>

                                    <div class="topic__info-stat topic__info-stat_recent">
                                        <div class="info-stat">
                                            <div class="info-stat__fl-stat">
                                                <div class="fl-stat">
                                                    <span class="fl-stat__topic-author">
                                                        <a href="#" class="topic-author"><?=$key['nickname']?></a>
                                                    </span>
                                                    <span class="fl-stat__delimeter">|</span>
                                                    <span class="fl-stat__topic-post-date"><?=$key['datetime']?></span>
                                                </div>
                                            </div>
                                            <div class="info-stat__fr-stat">
                                                <div class="fr-stat">
                                                    <span class="fr-stat__post-amount"><?=$key['amount_of_posts']?>
                                                        <i class="far fa-comment-dots"></i>
                                                    </span>
                                                    <span class="fr-stat__delimeter">|</span>
                                                    <span class="fr-stat__views-amount"><?=$key['amount_of_views']?><i class="far fa-eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic-content__text-topic topic-content__text-topic_recent">
                                        <p class="text-topic text-topic_recent"><?=$key['text']?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</div>