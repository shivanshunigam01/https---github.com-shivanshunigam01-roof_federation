<?php include "header.php"; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(https://rooffederation.com/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="https://rooffederation.com/">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Blogs</li>
                    </ul>
                    <h2>Blogs</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News Page Start-->
        <section class="news-page">
            <div class="container">
                <div class="row">
                    <?php $jhghj = $db->tips(); 
                    foreach($jhghj as $jhghjser) { ?>
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="<?php echo $jhghjser["image"]; ?>" alt="<?php echo $jhghjser["title"]; ?>">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="https://rooffederation.com/blog/<?php echo $jhghjser['slug']; ?>"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                             
                                        </ul>
                                        <h3 class="news-one__title"><a href="https://rooffederation.com/blog/<?php echo $jhghjser['slug']; ?>"><?php echo $jhghjser["title"]; ?></a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <div class="news-one__read-more">
                                            <?php echo substr($jhghjser["content"] , 0 , 100); ?>
                                            <a href="https://rooffederation.com/blog/<?php echo $jhghjser['slug']; ?>"> <span class="icon-right-arrow"></span> Read
                                                More</a>
                                        </div>
                                         
                                    </div> 
                                </div>
                                <div class="news-one__date">
                                    <p><?php echo $jhghjser["created"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--News Page End-->

        <?php include "footer.php"; ?>