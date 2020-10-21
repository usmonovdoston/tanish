<?php
/* @var $this \yii\web\View */
?>
<div class="main-wrapper">
    <!-- profile banner area start -->
    <div class="profile-banner-large bg-img" data-bg="dist/images/banner/profile-banner.jpg">
    </div>
    <!-- profile banner area end -->

    <!-- profile menu area start -->
    <div class="profile-menu-area secondary-navigation-style bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="profile-picture-box">
                        <figure class="profile-picture">
                            <a href="#">
                                <img src="/dist/images/profile/profile-1.jpg" alt="profile picture">
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 offset-lg-1">
                    <div class="profile-menu-wrapper">
                        <div class="main-menu-inner header-top-navigation">
                            <nav>
                                <ul class="main-menu">
                                    <li class="active"><a href="#">timeline</a></li>
                                    <li><a href="about.html">about</a></li>
                                    <li><a href="photos.html">photos</a></li>
                                    <li><a href="friends.html">friends</a></li>
                                    <li><a href="about.html">more</a></li>
                                    <!-- <li class="d-inline-block d-md-none"><a href="profile.html">edit profile</a></li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 d-none d-md-block">
                    <div class="profile-edit-panel">
                        <button class="edit-btn">edit profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- profile menu area end -->

    <!-- sendary menu start -->
    <div class="menu-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                        <div class="page-title-inner">
                            <h4 class="page-title">friends (1250)</h4>
                        </div>
                        <div class="filter-menu">
                            <button class="active" data-filter="*">all</button>
                            <button data-filter=".recently">recently</button>
                            <button data-filter=".relative">relative</button>
                            <button data-filter=".collage">collage</button>
                            <button data-filter=".request">request</button>
                        </div>
                        <div class="post-settings-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="post-settings arrow-shape">
                                <ul>
                                    <li><button>edit profile</button></li>
                                    <li><button>activity log</button></li>
                                    <li><button>embed adda</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sendary menu end -->

    <!-- photo section start -->
    <div class="friends-section mt-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-box friends-zone">
                        <div class="row mt--20 friends-list">
                            <div class="col-lg-3 col-sm-6 recently request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-1.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Kate Midiltoin</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative">
                                <div class="friend-list-view">
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
                                        <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently collage request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-7.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">william henry</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-22.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Kate Midiltoin</a></h6>
                                        <button class="add-frnd">friend request sent</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-10.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Omio Morganik</a></h6>
                                        <button class="add-frnd">friend request sent</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-13.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">william henry</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 collage request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-18.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">erik jonson</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-25.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">peter looks</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-16.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">jhon doe</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-12.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">william henry</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently collage">
                                <div class="friend-list-view">
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
                                        <h6 class="author"><a href="profile.html">william henry</a></h6>
                                        <button class="add-frnd">friend request sent</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-17.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">musa kollins</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-11.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">petter jhon</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 request collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-20.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">henry william</a></h6>
                                        <button class="add-frnd">friend request sent</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently relative">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-32.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">cristian paul</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative collage request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-31.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">willson merry</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 request recently">
                                <div class="friend-list-view">
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
                                        <h6 class="author"><a href="profile.html">jhonsina boss</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-26.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">william jowel</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-19.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">ashim pual</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-23.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Barak Obama</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-1.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Kate Midiltoin</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative">
                                <div class="friend-list-view">
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
                                        <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently collage request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-7.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">william henry</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-22.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Kate Midiltoin</a></h6>
                                        <button class="add-frnd">friend request sent</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-10.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Omio Morganik</a></h6>
                                        <button class="add-frnd">friend request sent</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-13.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">william henry</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 collage request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-18.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">erik jonson</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-25.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">peter looks</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-16.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">jhon doe</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-12.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">william henry</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently collage">
                                <div class="friend-list-view">
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
                                        <h6 class="author"><a href="profile.html">william henry</a></h6>
                                        <button class="add-frnd">friend request sent</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-17.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">musa kollins</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-11.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">petter jhon</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 request collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-20.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">henry william</a></h6>
                                        <button class="add-frnd">friend request sent</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently relative">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-32.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">cristian paul</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative collage request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-31.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">willson merry</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 request recently">
                                <div class="friend-list-view">
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
                                        <h6 class="author"><a href="profile.html">jhonsina boss</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-26.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">william jowel</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 relative collage">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-19.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">ashim pual</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 recently request">
                                <div class="friend-list-view">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="/dist/images/profile/profile-small-23.jpg" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Barak Obama</a></h6>
                                        <button class="add-frnd">add friend</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- photo section end -->
</div>
