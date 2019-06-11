<title>{{$title}} - Домашня</title>
<div class="start-main">
    <div class="container">
        <div class="container__main-text">
            <h1 class="main-text">Waffle<br>commuity</h1>
            <h2 class="main-subtext">дискусії починаються тут</h2>
        </div>
        <div class="container__search">
            <div class="search">
                <form action="">
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
            <li class="community-menu__item_drop"><a href="{{ROUTE_PATH}}/community/recent" class="community-menu__link_drop">Недавні</a></li>
        </nav>
    </div>
    <nav class="community-menu">
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/home" class="community-menu__link">Домашня</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/categories" class="community-menu__link">Категорії</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/popular-topics/1" class="community-menu__link community-menu__link_active">Популярні</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/recent" class="community-menu__link">Недавні</a></li>
    </nav>
</div>
<div class="content">
    <div class="content__page">
        <div class="page">
            <div class="page__page-title">
                <h2 class="page-title">Популярні теми</h2>
            </div>
            <div class="page__popular">
                <div class="popular">
                    <div class="popular__topic">
                        <div id="idTopic" class="topic">
                            <div class="topic__user-avatar">
                                <a href="#" class="user-avatar">
                                    <img src="img/user-avatar.png" alt="">
                                </a>
                            </div>
                            <div class="topic__topic-content">
                                <div class="topic-content__title-topic">
                                    <a href="#" class="title-topic">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit</a>
                                </div>

                                <div class="topic-content__info-stat">
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
                                <div class="topic-content__text-topic">
                                    <p class="text-topic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...is nostrud exercitation ullamco...
                                    </p>
                                </div>
                                <div class="topic-content__read-more"><a href="#" class="read-more">Читати детальніше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular__topic">
                        <div id="idTopic" class="topic">
                            <div class="topic__user-avatar">
                                <a href="#" class="user-avatar">
                                    <img src="img/user-avatar.png" alt="">
                                </a>
                            </div>
                            <div class="topic__topic-content">
                                <div class="topic-content__title-topic">
                                    <a href="#" class="title-topic">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit</a>
                                </div>

                                <div class="topic-content__info-stat">
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
                                <div class="topic-content__text-topic">
                                    <p class="text-topic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco...is nostrud exercitation ullamco...
                                    </p>
                                </div>
                                <div class="topic-content__read-more"><a href="#" class="read-more">Читати детальніше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular__topic">
                        <div id="idTopic" class="topic">
                            <div class="topic__user-avatar">
                                <a href="#" class="user-avatar">
                                    <img src="img/user-avatar.png" alt="">
                                </a>
                            </div>
                            <div class="topic__topic-content">
                                <div class="topic-content__title-topic">
                                    <a href="#" class="title-topic">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit</a>
                                </div>

                                <div class="topic-content__info-stat">
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
                                <div class="topic-content__text-topic">
                                    <p class="text-topic">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation
                                        ullamco...
                                    </p>
                                </div>
                                <div class="topic-content__read-more"><a href="#" class="read-more">Читати детальніше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page__more-popular-button">
                <button class="more-popular-button">Більше популярних</button>
            </div>
            <div class="page__categories-home">
                <div class="categories-home">
                    <div class="categories-home__categories-home-title">
                        <div class="categories-home-title">Обери розділ</div>
                    </div>
                    <div class="categories-home__categories-cards">
                        <div class="categories-cards">
                            <div class="categories-cards__categories-cards-item">
                                <a href="" class="categories-cards-item">
                                    <div class="categories-cards-item__icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="categories-cards-item__card-title">
                                        <div class="card-title">Використання Waffle</div>
                                    </div>
                                    <div class="categories-cards-item__card-stat">
                                        <div class="card-stat"><span class="card-stat__amount-topics">6</span>тем та повідомлень<span class="card-stat__amount-posts">253</span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="categories-cards__categories-cards-item">
                                <a href="" class="categories-cards-item">
                                    <div class="categories-cards-item__icon">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="categories-cards-item__card-title">
                                        <div class="card-title">Кут розробника</div>
                                    </div>
                                    <div class="categories-cards-item__card-stat">
                                        <div class="card-stat"><span class="card-stat__amount-topics">6</span>тем та повідомлень<span class="card-stat__amount-posts">253</span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="categories-cards__categories-cards-item">
                                <a class="categories-cards-item">
                                    <div class="categories-cards-item__icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="categories-cards-item__card-title">
                                        <div class="card-title">Працевлаштування</div>
                                    </div>
                                    <div class="categories-cards-item__card-stat">
                                        <div class="card-stat"><span class="card-stat__amount-topics">6</span>тем та повідомлень<span class="card-stat__amount-posts">253</span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="categories-cards__categories-cards-item">
                                <a class="categories-cards-item">
                                    <div class="categories-cards-item__icon">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <div class="categories-cards-item__card-title">
                                        <div class="card-title">Досвід клієнтів</div>
                                    </div>
                                    <div class="categories-cards-item__card-stat">
                                        <div class="card-stat"><span class="card-stat__amount-topics">6</span>тем та повідомлень<span class="card-stat__amount-posts">253</span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="categories-cards__categories-cards-item">
                                <a class="categories-cards-item">
                                    <div class="categories-cards-item__icon">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="categories-cards-item__card-title">
                                        <div class="card-title">Несправності</div>
                                    </div>
                                    <div class="categories-cards-item__card-stat">
                                        <div class="card-stat"><span class="card-stat__amount-topics">6</span>тем та повідомлень<span class="card-stat__amount-posts">253</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="categories-cards__categories-cards-item">
                                <a class="categories-cards-item">
                                    <div class="categories-cards-item__icon">
                                        <i class="fas fa-lightbulb"></i>
                                    </div>
                                    <div class="categories-cards-item__card-title">
                                        <div class="card-title">Ваші пропозиції</div>
                                    </div>
                                    <div class="categories-cards-item__card-stat">
                                        <div class="card-stat">
                                            <span class="card-stat__amount-topics">6</span>тем та повідомлень<span class="card-stat__amount-posts">253</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>