<?php
$this->title = 'Adda';
$user = Yii::$app->user->identity;
$info = $user->getInfo();
$avatar = $info['avatar'];
?>
<div class="main-wrapper pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="widget-area">
                    <!-- widget single item start -->
                    <div class="card card-profile widget-item p-0">
                        <div class="profile-banner">
                            <figure class="profile-banner-small">
                                <a href="profile.html">
                                    <img src="/<?=$info['image']?>" alt="">
                                </a>
                                <a href="profile.html" class="profile-thumb-2">
                                    <img src="/<?=$info['avatar']?>" alt="">
                                </a>
                            </figure>
                            <div class="profile-desc text-center">
                                <h6 class="author"><a href="profile.html"><?=$user->fullName?></a></h6>
                                <p><?=$info['add_info']?></p>
                            </div>
                        </div>
                    </div>
                    <!-- widget single item start -->

                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">page you may like</h4>
                        <div class="widget-body">
                            <ul class="like-page-list-wrapper">
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-33.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Travel The World</a></h3>
                                        <p class="list-subtitle"><a href="#">adventure</a></p>
                                    </div>
                                    <button class="like-button active">
                                        <img class="heart" src="/dist/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="/dist/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-30.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Foodcort Nirala</a></h3>
                                        <p class="list-subtitle"><a href="#">food</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="/dist/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="/dist/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-5.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                        <p class="list-subtitle"><a href="#">drama</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="/dist/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="/dist/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-29.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                        <p class="list-subtitle"><a href="#">fitness</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="/dist/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="/dist/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- widget single item end -->

                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">latest top news</h4>
                        <div class="widget-body">
                            <ul class="like-page-list-wrapper">
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-28.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">2 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-31.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">20 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-27.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">30 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-34.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">40 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-32.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">39 min ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- widget single item end -->
                </aside>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
                <!-- share box start -->
                <div class="card card-small">
                    <div class="share-box-inner">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="/<?=$info['avatar']?>" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <!-- share content box start -->
                        <div class="share-content-box w-100">
                            <form class="share-text-box">
                                <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
                                <button class="btn-share" type="submit">share</button>
                            </form>
                        </div>
                        <!-- share content box end -->

                        <!-- Modal start -->
                        <div class="modal fade" id="textbox" aria-labelledby="textbox">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Share Your Mood</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body custom-scroll">
                                        <form id="create-post-form" action="<?=Yii::$app->urlManager->createUrl('site/create-post')?>" method="POST">
                                            <input type="text" name="Post[title]" class="form-control" placeholder="<?php echo Yii::t('app','Title')?>">
                                            <br>
                                            <textarea name="Post[content]" class="share-field-big custom-scroll" placeholder="<?php echo Yii::t('app','Post content')?>"></textarea>
                                            <div class="gallery">
                                                <div class="floatLeft field-post-gallery">
                                                    <label class="upload-label">
                                                        <input type="file" class="upload-image" name="Post[gallery][]" udalit="gallery" data-field="post-gallery" accept="image/*" data-base64="true">
                                                        <span class="btn btn-app btn-danger btn-xs udalit"
                                                        <i class="ace-icon fa fa-trash-o bigger-200"></i></span>
                                                    </label>
                                                </div>
                                                <span class="btn btn-default addInput floatLeft" model="Post[gallery][]" data-field="post-gallery" son="1" data-accept="image/*" data-multiple="false" data-base64="true"><span class="glyphicon glyphicon-plus"></span></span>
                                                <div style="clear: both;"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                        <button type="button" class="post-share-btn" id="submit_post">post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>
                </div>
                <!-- share box end -->

                <!-- post status start -->
                <?php if(!empty($post)):
                    foreach ($post as $item):
                    $author = \app\models\Users::getAuthorInfo($item['created_by']);
                ?>
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#!">
                                <figure class="profile-thumb-middle">
                                    <img class="imgPreview" src="/<?=\app\widgets\helpers\Help::getAvatar($author['avatar'])?>" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author"><a href="<?=\yii\helpers\Url::to(['site/profile','slug'=>$author['username']])?>"><?=$author['name'].' '.$author['lastname']?></a></h6>
                            <span class="post-time"><?=\app\widgets\helpers\Help::getDate($item['created_at'])?></span>
                        </div>

                        <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                                <ul>
                                    <li><button>copy link to adda</button></li>
                                    <li><button>edit post</button></li>
                                    <li><button>embed adda</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post title start -->
                    <div class="post-content">
                        <p class="post-desc">
                            <?=$item['title']?>
                        </p>
                        <p class="post-desc">
                            <?=$item['content']?>
                        </p>
                        <?php if(!empty($item['image'])):
                            if(count($item['image']) == 1):?>
                            <div class="post-thumb-gallery">
                                <?php if(file_exists($item['image'][0]['path'])):?>
                                <figure class="post-thumb img-popup">
                                    <a href="/<?=$item['image'][0]['path']?>">
                                        <img src="/<?=$item['image'][0]['path']?>" alt="post image">
                                    </a>
                                </figure>
                                <?php endif;?>
                            </div>
                            <?php elseif(count($item['image']) == 2):?>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters">
                                    <?php if(file_exists($item['image'][0]['path'])):?>
                                        <div class="col-6">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="/<?=$item['image'][0]['path']?>">
                                                    <img src="/<?=$item['image'][0]['path']?>" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                    <?php endif;?>
                                    <?php if(file_exists($item['image'][1]['path'])):?>
                                        <div class="col-6">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="/<?=$item['image'][1]['path']?>">
                                                    <img src="/<?=$item['image'][1]['path']?>" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                    <?php endif;?>
                                    </div>
                                </div>
                            <?php else:?>
                            <div class="post-thumb-gallery img-gallery">
                                <div class="row no-gutters">
                                <?php if(file_exists($item['image'][0]['path'])):?>
                                    <div class="col-8">
                                        <figure class="post-thumb">
                                            <a class="gallery-selector" href="/<?=$item['image'][0]['path']?>">
                                                <img src="/<?=$item['image'][0]['path']?>" alt="post image">
                                            </a>
                                        </figure>
                                    </div>
                                <?php endif;?>
                                    <div class="col-4">
                                        <div class="row">
                                        <?php if(file_exists($item['image'][1]['path'])):?>
                                            <div class="col-12">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="/<?=$item['image'][1]['path']?>">
                                                        <img src="/<?=$item['image'][1]['path']?>" alt="post image">
                                                    </a>
                                                </figure>
                                            </div>
                                        <?php endif;?>
                                        <?php if(file_exists($item['image'][2]['path'])):?>
                                            <div class="col-12">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="/<?=$item['image'][2]['path']?>">
                                                        <img src="/<?=$item['image'][2]['path']?>" alt="post image">
                                                    </a>
                                                </figure>
                                            </div>
                                        <?php endif;?>
                                        <?php if(file_exists($item['image'][3]['path'])):?>
                                            <div class="col-12">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="/<?=$item['image'][3]['path']?>">
                                                        <img src="/<?=$item['image'][3]['path']?>" alt="post image">
                                                    </a>
                                                </figure>
                                            </div>
                                        <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif;
                            endif;
                        ?>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 201 people like this</span>
                                <strong>201</strong>
                            </button>
                            <ul class="comment-share-meta">
                                <li>
                                    <button class="post-comment">
                                        <i class="bi bi-chat-bubble"></i>
                                        <span>41</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="post-share">
                                        <i class="bi bi-share"></i>
                                        <span>07</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                    endif;
                ?>
                <!-- post status end -->

                <!-- post status start -->
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="/dist/images/profile/profile-small-9.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                            <span class="post-time">15 min ago</span>
                        </div>

                        <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                                <ul>
                                    <li><button>copy link to adda</button></li>
                                    <li><button>edit post</button></li>
                                    <li><button>embed adda</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post title start -->
                    <div class="post-content">
                        <p class="post-desc pb-0">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for
                        </p>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 206 people like this</span>
                                <strong>206</strong>
                            </button>
                            <ul class="comment-share-meta">
                                <li>
                                    <button class="post-comment">
                                        <i class="bi bi-chat-bubble"></i>
                                        <span>41</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="post-share">
                                        <i class="bi bi-share"></i>
                                        <span>07</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- post status end -->

                <!-- post status start -->
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="/dist/images/profile/profile-small-29.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author"><a href="profile.html">william henry</a></h6>
                            <span class="post-time">35 min ago</span>
                        </div>

                        <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                                <ul>
                                    <li><button>copy link to adda</button></li>
                                    <li><button>edit post</button></li>
                                    <li><button>embed adda</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post title start -->
                    <div class="post-content">
                        <p class="post-desc">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                            in their infancy.
                        </p>
                        <div class="plyr__video-embed plyr-youtube">
                            <iframe src="https://www.youtube.com/embed/WeA7edXsU40" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 112 people like this</span>
                                <strong>112</strong>
                            </button>
                            <ul class="comment-share-meta">
                                <li>
                                    <button class="post-comment">
                                        <i class="bi bi-chat-bubble"></i>
                                        <span>36</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="post-share">
                                        <i class="bi bi-share"></i>
                                        <span>08</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- post status end -->

                <!-- post status start -->
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="/dist/images/profile/profile-small-37.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author"><a href="profile.html">Kate Palson</a></h6>
                            <span class="post-time">35 min ago</span>
                        </div>

                        <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                                <ul>
                                    <li><button>copy link to adda</button></li>
                                    <li><button>edit post</button></li>
                                    <li><button>embed adda</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post title start -->
                    <div class="post-content">
                        <p class="post-desc">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                            in their infancy.
                        </p>
                        <div class="post-thumb-gallery img-gallery">
                            <div class="row no-gutters">
                                <div class="col-8">
                                    <figure class="post-thumb">
                                        <a class="gallery-selector" href="dist/images/post/post-large-2.jpg">
                                            <img src="/dist/images/post/post-2.jpg" alt="post image">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="dist/images/post/post-large-3.jpg">
                                                    <img src="/dist/images/post/post-3.jpg" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-12">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="dist/images/post/post-large-4.jpg">
                                                    <img src="/dist/images/post/post-4.jpg" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-12">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector" href="dist/images/post/post-large-5.jpg">
                                                    <img src="/dist/images/post/post-5.jpg" alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 70 people like this</span>
                                <strong>70</strong>
                            </button>
                            <ul class="comment-share-meta">
                                <li>
                                    <button class="post-comment">
                                        <i class="bi bi-chat-bubble"></i>
                                        <span>28</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="post-share">
                                        <i class="bi bi-share"></i>
                                        <span>12</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- post status end -->

                <!-- post status start -->
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="/dist/images/profile/profile-small-4.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author"><a href="profile.html">Robart Faul</a></h6>
                            <span class="post-time">40 min ago</span>
                        </div>

                        <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                                <ul>
                                    <li><button>copy link to adda</button></li>
                                    <li><button>edit post</button></li>
                                    <li><button>embed adda</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post title start -->
                    <div class="post-content">
                        <p class="post-desc pb-0">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, and a search for Many
                            desktop publishing duskam azer.
                        </p>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 250 people like this</span>
                                <strong>250</strong>
                            </button>
                            <ul class="comment-share-meta">
                                <li>
                                    <button class="post-comment">
                                        <i class="bi bi-chat-bubble"></i>
                                        <span>80</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="post-share">
                                        <i class="bi bi-share"></i>
                                        <span>10</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- post status end -->

                <!-- post status start -->
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="/dist/images/profile/profile-small-8.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author"><a href="profile.html">Halen Omaro</a></h6>
                            <span class="post-time">45 min ago</span>
                        </div>

                        <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                                <ul>
                                    <li><button>copy link to adda</button></li>
                                    <li><button>edit post</button></li>
                                    <li><button>embed adda</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post title start -->
                    <div class="post-content">
                        <p class="post-desc">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                            in their infancy.
                        </p>
                        <div class="plyr__video-embed plyr-video">
                            <iframe src="https://www.youtube.com/embed/odUtqDz4lEk" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="post-desc post-desc-secondary">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for
                        </p>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 160 people like this</span>
                                <strong>160</strong>
                            </button>
                            <ul class="comment-share-meta">
                                <li>
                                    <button class="post-comment">
                                        <i class="bi bi-chat-bubble"></i>
                                        <span>42</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="post-share">
                                        <i class="bi bi-share"></i>
                                        <span>05</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- post status end -->

                <!-- post status start -->
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="/dist/images/profile/profile-small-2.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                            <span class="post-time">50 min ago</span>
                        </div>

                        <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                                <ul>
                                    <li><button>copy link to adda</button></li>
                                    <li><button>edit post</button></li>
                                    <li><button>embed adda</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post title start -->
                    <div class="post-content">
                        <p class="post-desc">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                            in their infancy.
                        </p>
                        <div class="post-thumb-gallery img-gallery">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <figure class="post-thumb">
                                        <a class="gallery-selector" href="dist/images/post/post-large-6.jpg">
                                            <img src="/dist/images/post/post-6.jpg" alt="post image">
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="post-thumb">
                                        <a class="gallery-selector" href="dist/images/post/post-large-7.jpg">
                                            <img src="/dist/images/post/post-7.jpg" alt="post image">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 30 people like this</span>
                                <strong>30</strong>
                            </button>
                            <ul class="comment-share-meta">
                                <li>
                                    <button class="post-comment">
                                        <i class="bi bi-chat-bubble"></i>
                                        <span>65</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="post-share">
                                        <i class="bi bi-share"></i>
                                        <span>04</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- post status end -->

                <!-- post status start -->
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="/dist/images/profile/profile-small-9.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                            <span class="post-time">15 min ago</span>
                        </div>

                        <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                                <ul>
                                    <li><button>copy link to adda</button></li>
                                    <li><button>edit post</button></li>
                                    <li><button>embed adda</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post title start -->
                    <div class="post-content">
                        <p class="post-desc pb-0">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for
                        </p>
                        <div class="post-meta">
                            <button class="post-meta-like">
                                <i class="bi bi-heart-beat"></i>
                                <span>You and 320 people like this</span>
                                <strong>320</strong>
                            </button>
                            <ul class="comment-share-meta">
                                <li>
                                    <button class="post-comment">
                                        <i class="bi bi-chat-bubble"></i>
                                        <span>41</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="post-share">
                                        <i class="bi bi-share"></i>
                                        <span>07</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- post status end -->

            </div>

            <div class="col-lg-3 order-3">
                <aside class="widget-area">
                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">Recent Notifications</h4>
                        <div class="widget-body">
                            <ul class="like-page-list-wrapper">
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-9.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">5 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-35.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">10 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-15.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">18 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-6.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">25 min ago</p>
                                    </div>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-34.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                        <p class="list-subtitle">39 min ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- widget single item end -->

                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">Advertizement</h4>
                        <div class="widget-body">
                            <div class="add-thumb">
                                <a href="#">
                                    <img src="/dist/images/banner/advertise.jpg" alt="advertisement">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- widget single item end -->

                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">Friends Zone</h4>
                        <div class="widget-body">
                            <ul class="like-page-list-wrapper">
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-33.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Ammeya Jakson</a></h3>
                                        <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="/dist/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="/dist/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-30.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Jashon Muri</a></h3>
                                        <p class="list-subtitle"><a href="#">2 mutual</a></p>
                                    </div>
                                    <button class="like-button active">
                                        <img class="heart" src="/dist/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="/dist/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-5.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                        <p class="list-subtitle"><a href="#">drama</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="/dist/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="/dist/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                                <li class="unorder-list">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="/dist/images/profile/profile-small-29.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="unorder-list-info">
                                        <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                        <p class="list-subtitle"><a href="#">fitness</a></p>
                                    </div>
                                    <button class="like-button">
                                        <img class="heart" src="/dist/images/icons/heart.png" alt="">
                                        <img class="heart-color" src="/dist/images/icons/heart-color.png" alt="">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- widget single item end -->
                </aside>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJsFile('/dist/js/upload/upload.js', ['depends' => \app\assets\AppAsset::className()]);
$this->registerCssFile('/dist/js/upload/upload.css');
$this->registerJsFile('/dist/img-preview/image-preview.js', ['depends' => \app\assets\AppAsset::className()]);
$this->registerCssFile('/dist/img-preview/image-preview.css');