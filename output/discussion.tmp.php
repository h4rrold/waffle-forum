<title>{{$title}} - {{$title_topic}}</title>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/waffle-forum/community/categories/getCurrentlyVotedPosts',
            dataType: 'JSON',
            method: 'POST',
            success: function(data) {
                for(let key in data) {
                    let post = $('[data-post_id = '+data[key]['post_id']+']');
                    $(post).find('.rate-post').hide();
                    $(post).find('.rate-post_result').show();
                }
            }
        })
    });
</script>
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
            <li class="community-menu__item_drop"><a href="{{ROUTE_PATH}}/community/recent-topics/1" class="community-menu__link_drop">Недавні</a></li>
        </nav>
    </div>
    <nav class="community-menu">
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/home" class="community-menu__link">Домашня</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/categories" class="community-menu__link">Категорії</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/popular-topics/1" class="community-menu__link community-menu__link_active">Популярні</a></li>
        <li class="community-menu__item"><a href="{{ROUTE_PATH}}/community/recent-topics/1" class="community-menu__link">Недавні</a></li>
    </nav>
</div>
<div class="content">
        <div class="content__page">
            <div class="page">
                <div class="page__discussion-path">
                    <span class="page__discussion-path__text"><a href="{{ROUTE_PATH}}/community/categories">Категорії</a><i class="fas fa-chevron-right"></i><a href="{{ROUTE_PATH}}/community/categories/{{$directory_id}}/{{$directory_name}}">{{$directory_name}}</a></span>
                </div>
                <div class="pagе__discussion">
                    <div class="discussion">
                        <div class="discussion__topic">
                            <div id="idTopic" class="topic">
                                <div class="topic__user-avatar">
                                    <a href="#" class="user-avatar">
                                         <img src="{{$avatar}}" alt="">
                                    </a>
                                </div>
                                <div class="topic__topic-content">
                                    <div class="topic-content__title-topic">
                                        <div class="title-topic">{{$title_topic}}</div>
                                    </div>
                                    <div class="topic-content__info-stat">
                                        <div class="info-stat">
                                            <div class="info-stat__fl-stat">
                                                <div class="fl-stat">
                                                    <span class="fl-stat__topic-author">
                                                        <a href="#" class="topic-author">{{$nickname}}</a>
                                                    </span>
                                                    <span class="fl-stat__delimeter">|</span>
                                                    <span class="fl-stat__group-author">Користувач</span>
                                                    <span class="fl-stat__delimeter">|</span>
                                                    <span class="fl-stat__topic-post-date">{{$datetime}}</span>
                                                </div>
                                            </div>
                                            <div class="info-stat__fr-stat">
                                                <div class="fr-stat">
                                                    <span class="fr-stat__post-amount">{{$amount_of_posts}}<i class="far fa-comment-dots"></i></span>
                                                    <span class="stat__delimeter">|</span>
                                                    <span class="fr-stat__views-amount">{{$amount_of_views}}<i class="far fa-eye"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic-content__text-topic">
                                        <p class="text-topic">{{$text}}</p>
                                    </div>              
                                </div>
                            </div>
                        </div>
                        <form action="{{ROUTE_PATH}}/community/categories/{{$directory_id}}/{{$directory_name}}/{{$id}}/{{$title_topic}}/{{$amount_of_posts}}/sending" method="post">
                <div class="page__editor">
                    <textarea name="post_text" id="editor" class="" rows="10" cols="10" style="resize: none" ></textarea>
                </div>
                        <?php if (isset($_COOKIE['session_id']) && isset($_SESSION['logged-user']) && ($_COOKIE['session_id'] == session_id())) : ?>
                            <div class="page__send-post-button">

                                    <input type="submit" name="send" class="send-post-button" value="Відправити">

                            </div>
                        </form>
                        <?php else:?>
                            <div class="page__sign-in-proposition-button">
                                </form>
                                <form action="{{ROUTE_PATH}}/login" method="post">
                                    <input type="submit" class="sign-in-proposition-button" value="Увійти, щоб залишити коментар">
                                </form>
                            </div>
                        <?php endif;?>

                    <?php
                    foreach ($posts as $post){
                        echo output('post', $post);
                    }
                    ?>
                    </div>              
                </div>
                <div class="page__topic-amount-display">
                <span class="topic-amount-display">Відображено<span
                            class="topic-amount-display__text">{{$first}}-{{$second}}</span>тем</span>
                </div>
                <div class="page__post-page-nav">
                    <div class="post-page-nav">
                        <?php if ($id_page != 1) : ?>
                        <a href="{{ROUTE_PATH}}/community/categories/{{$directory_id}}/{{$directory_name}}/{{$id}}/{{$title_topic}}/1" class="post-page-nav__item">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                        <a href="{{ROUTE_PATH}}/community/categories/{{$directory_id}}/{{$directory_name}}/{{$id}}/{{$title_topic}}/{{$id_page - 1}}" class="post-page-nav__item">
                                <i class="fas fa-angle-left"></i>
                        </a>
                        <?php endif;?>
                        <?php if ($id_page < $count) : ?>
                            </a>
                            <a href="{{ROUTE_PATH}}/community/categories/{{$directory_id}}/{{$directory_name}}/{{$id}}/{{$title_topic}}/{{$id_page + 1}}" class="post-page-nav__item">
                                <i class="fas fa-angle-right"></i>
                            </a>
                            <a href="{{ROUTE_PATH}}/community/categories/{{$directory_id}}/{{$directory_name}}/{{$id}}/{{$title_topic}}/999999" class="post-page-nav__item">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
                
                
                
            </div>              
        </div>
    </div>
