<?php include "header.php"; 
$id = $_GET['id'];
$ids = substr($id, 0, -4);  
$launch_property = $db->tips->where("slug", $ids);
    foreach( $launch_property as $slid_pic) {  
    }
    ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="https://rooffederation.com/">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active"><?php echo $slid_pic["title"]; ?></li>
                    </ul>
                    <h2><?php echo $slid_pic["title"]; ?></h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="<?php echo $slid_pic["image"]; ?>" alt="">
                                <div class="news-details__date">
                                    <p><?php echo $slid_pic["created"]; ?></p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    
                                </ul>
                                <h3 class="news-details__title"><?php echo $slid_pic["title"]; ?></h3>
                                <?php echo $slid_pic["content"]; ?>
                            </div>
                             
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <div class="sidebar-shape-1"
                                    style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                                <h3 class="sidebar__title">Latest Blogs</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    
                                    <?php $jghjh = $db->tips(); 
                                    foreach($jghjh as $jghjhgdyt) { ?>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="<?php echo $jghjhgdyt["image"]; ?>" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i> By admin</span>
                                                <a href="https://rooffederation.com/blog/<?php echo $jghjhgdyt["slug"]; ?>/"><?php echo $jghjhgdyt["title"]; ?></a>
                                            </h3>
                                        </div>
                                    </li>
                                    <?php } ?>
                                     
                                </ul>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News details End-->

       <?php include "footer.php"; ?>