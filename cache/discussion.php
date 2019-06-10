<div class="content">
        <div class="content__page">
            <div class="page">
                <div class="page__discussion-path">
                    <span class="page__discussion-path__text">Категорії<i class="fas fa-chevron-right"></i><?=$directory_name?></span>
                </div>
                <div class="pagе__discussion">
                    <div class="discussion">
                        <div class="discussion__topic">
                            <div id="idTopic" class="topic">
                                <div class="topic__user-avatar">
                                    <a href="#" class="user-avatar">
                                         <img src="<?=$avatar?>" alt="">
                                    </a>
                                </div>
                                <div class="topic__topic-content">
                                    <div class="topic-content__title-topic">
                                        <div class="title-topic"><?=$title_topic?></div>
                                    </div>
                                    <div class="topic-content__info-stat">
                                        <div class="info-stat">
                                            <div class="info-stat__fl-stat">
                                                <div class="fl-stat">
                                                    <span class="fl-stat__topic-author">
                                                        <a href="#" class="topic-author"><?=$nickname?></a>
                                                    </span>
                                                    <span class="fl-stat__delimeter">|</span>
                                                    <span class="fl-stat__group-author">Користувач</span>
                                                    <span class="fl-stat__delimeter">|</span>
                                                    <span class="fl-stat__topic-post-date"><?=$datetime?></span>
                                                </div>
                                            </div>
                                            <div class="info-stat__fr-stat">
                                                <div class="fr-stat">
                                                    <span class="fr-stat__post-amount"><?=$amount_of_posts?><i class="far fa-comment-dots"></i></span>
                                                    <span class="stat__delimeter">|</span>
                                                    <span class="fr-stat__views-amount"><?=$amount_of_views?><i class="far fa-eye"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic-content__text-topic">
                                        <p class="text-topic"><?=$text?></p>
                                    </div>              
                                </div>
                            </div>
                        </div>
                        
                <div class="page__editor">
                    <textarea name="" id="editor" class="" rows="10" cols="10" style="resize: none" ></textarea>
                </div>
                        <?php if (isset($_COOKIE['session_id']) && ($_COOKIE['session_id'] == session_id())) : ?>

                        <?php else:?>
                            <div class="page__sign-in-proposition-button">
                                <form action="" type="post">
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
                            class="topic-amount-display__text"><?=$first?>-<?=$second?></span>тем</span>
                </div>
                <div class="page__post-page-nav">
                    <div class="post-page-nav">
                        <?php if ($id_page != 1) : ?>
                        <a href="http://localhost/waffle-forum/community/categories/<?=$directory_id?>/<?=$directory_name?>/<?=$id?>/<?=$title_topic?>/1" class="post-page-nav__item">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                        <a href="http://localhost/waffle-forum/community/categories/<?=$directory_id?>/<?=$directory_name?>/<?=$id?>/<?=$title_topic?>/<?=$id_page - 1?>" class="post-page-nav__item">
                                <i class="fas fa-angle-left"></i>
                        </a>
                        <?php endif;?>
                        <?php if ($id_page < $count) : ?>
                            </a>
                            <a href="http://localhost/waffle-forum/community/categories/<?=$directory_id?>/<?=$directory_name?>/<?=$id?>/<?=$title_topic?>/<?=$id_page + 1?>" class="post-page-nav__item">
                                <i class="fas fa-angle-right"></i>
                            </a>
                            <a href="http://localhost/waffle-forum/community/categories/<?=$directory_id?>/<?=$directory_name?>/<?=$id?>/<?=$title_topic?>/999999" class="post-page-nav__item">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
                
                
                
            </div>              
        </div>
    </div>
