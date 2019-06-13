<div class="content">
    <div class="content__page">
        <div class="page">
            <div class="page__page-title">
                <h1 class="page-title">Особистий кабінет</h1>
                <div class="page__exit-button"><a href="{{ROUTE_PATH}}/logout" class="exit-button">Вийти</a></div>
            </div>
            <div class="page__user-info-block">
                <div class="user-info-block">
                    <div class="user-info-block__edit-info">
                        <div class="edit-info">
                            <div class="edit-info__edit-button">
                                <a class="edit-button">
                                    <span class="edit-button__icon"><i class="fas fa-pen-square"></i></span>
                                    <span class="edit-button__text">Редагувати</span>
                                </a>
                                <a class="edit-button_cancel">
                                    <span class="edit-button__icon"><i class="fas fa-times-circle"></i></span>
                                    <span class="edit-button__text">Відминити</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-info-block__user-avatar">
                        <a href="#" class="user-avatar">
                            <img src="img/user-avatar.png" alt="">
                        </a>
                        <div class="user-avatar__avatar-edit">
                            <form action="">
                                <div class="avatar-edit">
                                    <label for="file-upload" class="avatar-edit__custom-file-upload">
                                        <div class="custom-file-upload">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span class="custom-file-upload__text">Загрузить файл</span>

                                    </label>
                                    <input id="file-upload" class="avatar-edit__file-upload" type="file">
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="user-info-block__user-info-main">
                    <div class="user-info-main">
                        <div class="user-info-main__username-info">
                            <div class="username-info">username</div>
                        </div>
                        <div class="user-info-main__group-info">
                            <span class="group-info-text">Група:</span>
                            <span class="group-info">Admin</span>
                        </div>
                        <div class="user-info-main__email-info">
                            <span class="email-info__text">Email:</span>
                            <span class="email-info">user-email@mail.com</span>
                        </div>
                        <div class="user-info-main__change-email">
                            <div class="change-email">
                                <form action="" type="post">
                                    <input type="text" name="" id="" class="text-field text-field_small">
                                    <input type="submit" value="Змінити" class="change-button">
                                </form>
                            </div>

                        </div>
                        <div class="user-info-main__date-reg-info">
                            <span class="date-reg-info__text">Дата реєстрації:</span>
                            <span class="date-reg-info">11 червня 2019</span>
                        </div>
                        <div class="user-info-main__bio-info">
                            <span class="bio-info__text">Біографія:</span>
                            <span class="bio-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                </span>

                        </div>
                        <div class="user-info-main__change-bio">
                            <div class="change-bio">
                                <form action="" type="post">
                                        <textarea rows="5" cols="50" name="text"
                                                  class="change-bio__textarea"></textarea>
                                    <input type="submit" value="Змінити" class="change-button">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="page__user-info-rating">
                <div class="user-info-rating">
                    <div class="user-info-rating__rating-item">
                        <div class="rating-item">
                            <div class="rating-item__text">Ваш загальний рейтинг</div>
                            <div class="rating-item_num">9</div>
                        </div>
                    </div>
                    <div class="user-info-rating__rating-item">
                        <div class="rating-item">
                            <div class="rating-item__text">Постів з позитивною відміткою</div>
                            <div class="rating-item_num">5</div>
                        </div>
                    </div>
                    <div class="user-info-rating__rating-item">
                        <div class="rating-item">
                            <div class="rating-item__text">Постів з негативною відміткою</div>
                            <div class="rating-item_num">3</div>
                        </div>
                    </div>

                </div>
                <div class="user-info-rating__users-votes">
                    <div class="users-votes">
                        <div class="user-votes__votes-title">
                            <div class="votes-title">Оцінки ваших постів від інших користувачів</div>
                        </div>
                        <div class="users-votes__user-vote">
                            <div class="user-vote">
                                <div class="user-vote__user-avatar">
                                    <div class="user-avatar">
                                        <img src="img/user-avatar.jpg" alt="">
                                    </div>
                                </div>
                                <div class="user-vote__vote-message">
                                    <div class="vote-message">
                                        <span class="vote-message__username">username</span>
                                        <span class="vote-message__text">оцінив ваш пост</span>
                                        <span class="vote-message__est"><i class="fas fa-thumbs-up"></i></span>
                                        <span class="vote-message__est-topic">
                                                <span class="est-topic">
                                                    <span class="est-topic__text">в темі:</span>
                                                    <a href="#" class="est-topic__title">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor
                                                        dolore
                                                        ...
                                                    </a>
                                                </span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="users-votes__user-vote">
                            <div class="user-vote">
                                <div class="user-vote__user-avatar">
                                    <div class="user-avatar">
                                        <img src="img/user-avatar.jpg" alt="">
                                    </div>
                                </div>
                                <div class="user-vote__vote-message">
                                    <div class="vote-message">
                                        <span class="vote-message__username">username</span>
                                        <span class="vote-message__text">оцінив ваш пост</span>
                                        <span class="vote-message__est"><i class="fas fa-thumbs-down"></i></span>
                                        <span class="vote-message__est-topic">
                                                <span class="est-topic">
                                                    <span class="est-topic__text">в темі:</span>
                                                    <a href="#" class="est-topic__title">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor
                                                        dolore
                                                        ...
                                                    </a>
                                                </span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="page__user-recent-topics">
                <div class="user-recent-topics__title-recent-topics">
                    <div class="title-recent-topics">Ваші недавні теми</div>
                </div>
                <div class="user-recent-topics">
                    <div class="user-recent-topics__topic">
                        <div class="topic topic_recent">
                            <div class="topic__user-avatar topic__user-avatar_recent">
                                <a href="#" class="user-avatar">
                                    <img src="img/user-avatar.png" alt="">
                                </a>
                            </div>
                            <div class="topic__topic-content recent-topic__topic-content">
                                <div class="recent-topic__title-topic_recent">
                                    <a href="#" class=" title-topic title-topic_recent">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit</a>
                                </div>

                                <div class="topic__info-stat topic__info-stat_recent">
                                    <div class="info-stat">
                                        <div class="info-stat__fl-stat">
                                            <div class="fl-stat">
                                                    <span class="fl-stat__topic-author">
                                                        <a href="#" class="topic-author">Tommy</a>
                                                    </span>
                                                <span class="fl-stat__delimeter">|</span>
                                                <span class="fl-stat__topic-post-date">12 травня 2019</span>
                                            </div>
                                        </div>
                                        <div class="info-stat__fr-stat">
                                            <div class="fr-stat">
                                                    <span class="fr-stat__post-amount">256
                                                        <i class="far fa-comment-dots"></i>
                                                    </span>
                                                <span class="fr-stat__delimeter">|</span>
                                                <span class="fr-stat__views-amount">1231<i class="far fa-eye"></i>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="topic-content__text-topic topic-content__text-topic_recent">
                                    <p class="text-topic text-topic_recent">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quLorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...is
                                        nostrud exercitation ullamco...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-recent-topics">
                    <div class="user-recent-topics__topic">
                        <div class="topic topic_recent">
                            <div class="topic__user-avatar topic__user-avatar_recent">
                                <a href="#" class="user-avatar">
                                    <img src="img/user-avatar.png" alt="">
                                </a>
                            </div>
                            <div class="topic__topic-content recent-topic__topic-content">
                                <div class="recent-topic__title-topic_recent">
                                    <a href="#" class=" title-topic title-topic_recent">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit</a>
                                </div>

                                <div class="topic__info-stat topic__info-stat_recent">
                                    <div class="info-stat">
                                        <div class="info-stat__fl-stat">
                                            <div class="fl-stat">
                                                    <span class="fl-stat__topic-author">
                                                        <a href="#" class="topic-author">Tommy</a>
                                                    </span>
                                                <span class="fl-stat__delimeter">|</span>
                                                <span class="fl-stat__topic-post-date">12 травня 2019</span>
                                            </div>
                                        </div>
                                        <div class="info-stat__fr-stat">
                                            <div class="fr-stat">
                                                    <span class="fr-stat__post-amount">256
                                                        <i class="far fa-comment-dots"></i>
                                                    </span>
                                                <span class="fr-stat__delimeter">|</span>
                                                <span class="fr-stat__views-amount">1231<i class="far fa-eye"></i>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="topic-content__text-topic topic-content__text-topic_recent">
                                    <p class="text-topic text-topic_recent">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quLorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...is
                                        nostrud exercitation ullamco...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-recent-topics">
                    <div class="user-recent-topics__topic">
                        <div class="topic topic_recent">
                            <div class="topic__user-avatar topic__user-avatar_recent">
                                <a href="#" class="user-avatar">
                                    <img src="img/user-avatar.png" alt="">
                                </a>
                            </div>
                            <div class="topic__topic-content recent-topic__topic-content">
                                <div class="recent-topic__title-topic_recent">
                                    <a href="#" class=" title-topic title-topic_recent">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit</a>
                                </div>

                                <div class="topic__info-stat topic__info-stat_recent">
                                    <div class="info-stat">
                                        <div class="info-stat__fl-stat">
                                            <div class="fl-stat">
                                                    <span class="fl-stat__topic-author">
                                                        <a href="#" class="topic-author">Tommy</a>
                                                    </span>
                                                <span class="fl-stat__delimeter">|</span>
                                                <span class="fl-stat__topic-post-date">12 травня 2019</span>
                                            </div>
                                        </div>
                                        <div class="info-stat__fr-stat">
                                            <div class="fr-stat">
                                                    <span class="fr-stat__post-amount">256
                                                        <i class="far fa-comment-dots"></i>
                                                    </span>
                                                <span class="fr-stat__delimeter">|</span>
                                                <span class="fr-stat__views-amount">1231<i class="far fa-eye"></i>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="topic-content__text-topic topic-content__text-topic_recent">
                                    <p class="text-topic text-topic_recent">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quLorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...is
                                        nostrud exercitation ullamco...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-recent-topics">
                    <div class="user-recent-topics__topic">
                        <div class="topic topic_recent">
                            <div class="topic__user-avatar topic__user-avatar_recent">
                                <a href="#" class="user-avatar">
                                    <img src="img/user-avatar.png" alt="">
                                </a>
                            </div>
                            <div class="topic__topic-content recent-topic__topic-content">
                                <div class="recent-topic__title-topic_recent">
                                    <a href="#" class=" title-topic title-topic_recent">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit</a>
                                </div>

                                <div class="topic__info-stat topic__info-stat_recent">
                                    <div class="info-stat">
                                        <div class="info-stat__fl-stat">
                                            <div class="fl-stat">
                                                    <span class="fl-stat__topic-author">
                                                        <a href="#" class="topic-author">Tommy</a>
                                                    </span>
                                                <span class="fl-stat__delimeter">|</span>
                                                <span class="fl-stat__topic-post-date">12 травня 2019</span>
                                            </div>
                                        </div>
                                        <div class="info-stat__fr-stat">
                                            <div class="fr-stat">
                                                    <span class="fr-stat__post-amount">256
                                                        <i class="far fa-comment-dots"></i>
                                                    </span>
                                                <span class="fr-stat__delimeter">|</span>
                                                <span class="fr-stat__views-amount">1231<i class="far fa-eye"></i>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="topic-content__text-topic topic-content__text-topic_recent">
                                    <p class="text-topic text-topic_recent">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quLorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...is
                                        nostrud exercitation ullamco...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-recent-topics">
                    <div class="user-recent-topics__topic">
                        <div class="topic topic_recent">
                            <div class="topic__user-avatar topic__user-avatar_recent">
                                <a href="#" class="user-avatar">
                                    <img src="img/user-avatar.png" alt="">
                                </a>
                            </div>
                            <div class="topic__topic-content recent-topic__topic-content">
                                <div class="recent-topic__title-topic_recent">
                                    <a href="#" class=" title-topic title-topic_recent">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing elit</a>
                                </div>

                                <div class="topic__info-stat topic__info-stat_recent">
                                    <div class="info-stat">
                                        <div class="info-stat__fl-stat">
                                            <div class="fl-stat">
                                                    <span class="fl-stat__topic-author">
                                                        <a href="#" class="topic-author">Tommy</a>
                                                    </span>
                                                <span class="fl-stat__delimeter">|</span>
                                                <span class="fl-stat__topic-post-date">12 травня 2019</span>
                                            </div>
                                        </div>
                                        <div class="info-stat__fr-stat">
                                            <div class="fr-stat">
                                                    <span class="fr-stat__post-amount">256
                                                        <i class="far fa-comment-dots"></i>
                                                    </span>
                                                <span class="fr-stat__delimeter">|</span>
                                                <span class="fr-stat__views-amount">1231<i class="far fa-eye"></i>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="topic-content__text-topic topic-content__text-topic_recent">
                                    <p class="text-topic text-topic_recent">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quLorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...is
                                        nostrud exercitation ullamco...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>