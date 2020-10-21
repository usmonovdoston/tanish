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
                            <a href="profile.html">
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
                            <h4 class="page-title">photos (120)</h4>
                        </div>
                        <div class="filter-menu">
                            <button class="active" data-filter="*">all</button>
                            <button data-filter=".timeline">timeline</button>
                            <button data-filter=".upload">upload</button>
                            <button data-filter=".folder">folder</button>
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
    <div class="photo-section mt-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-box">
                        <div class="content-body">
                            <div class="row mt--30 photo-filter">
                                <div class="col-sm-6 col-md-4 timeline upload folder">
                                    <div class="photo-group active">
                                        <div class="gallery-toggle">
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-blank.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">create folder</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 folder">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-7.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-8.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-9.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-7.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Adda Timeline (79)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 upload">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-8.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-6.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-2.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-8.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Upload (134)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 folder">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-1.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-5.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-10.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-1.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Office Hangout (12)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 upload">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-2.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-8.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-11.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-2.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Dream Land (24)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 timeline">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-3.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-6.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-4.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-3.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Travel Zone (34)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 timeline">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-4.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-9.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-6.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-4.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Pure Nature (17)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 folder">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-5.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-7.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-2.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-5.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Family Tour (37)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 upload">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-6.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-5.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-8.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-6.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Chill Zone (06)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 folder">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-10.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-8.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-6.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-10.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Food Fun (21)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 upload">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-9.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-4.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-2.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-9.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Kitchen Cook (09)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 timeline">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                <img src="/dist/images/photos/photo-11.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-7.jpg" alt="Photo Gallery">
                                                <img src="/dist/images/photos/photo-1.jpg" alt="Photo Gallery">
                                            </div>
                                            <div class="gallery-overlay">
                                                <img src="/dist/images/photos/photo-11.jpg" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Gardening (05)</h3>
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
    </div>
    <!-- photo section end -->
</div>
