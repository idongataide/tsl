
    <section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/banner/breadcrumb/news.webp)"> 
       <div class="opacity-medium gradient-black"></div>   
         <div class="container">
            <div class="row align-items-center small-screen">
                <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                    <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                        <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Transport Services Limited</span>
                    </h1>
                    <h2 class="m-auto pb-5px pt-5px t-light fw-600 ls-minus-1px overflow-hidden">
                        <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>News room</span>
                    </h2>
                </div> 
            </div>
        </div>
    </section>

    <section class="position-relative overlap-height">
        <div class="container overlap-gap-section">
            <div class="row mb-6 sm-mb-40px appear anime-complete">
                <div class="col-lg-6 md-mb-25px">
                   <h3 class="mb-0 fw-600 text-dark-gray w-85 lg-w-100 ls-minus-2px">Be Informed with Our Latest Updates</h3>
                </div>
                <div class="col-lg-5 offset-lg-1">
                   <p class="w-95 md-w-100">Stay updated with the latest insights and developments. Discover current events, trends, and stories that matter. Dive into detailed reports and analyses to keep you informed and engaged.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $news = $data['news'];
                foreach ($news as $key => $newsList) {
                ?>
                <div class="col-12 col-lg-4 blog-standard md-mb-50px sm-mb-40px pe-25px lg-pe-15px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>  
                    <!-- start blog details  -->
                    <!-- start blog item -->
                    <div class="col-12 mb-3">
                        <div class="card border-0 no-border-radius box-shadow-double-large">
                            <div class="blog-image">
                                <a href="<?php echo base_url(); ?>/news/news_details/<?=$newsList['id']?>"><img class="w-100" src="<?=$newsList['coverImage']?>" alt="News Image"></a>
                            </div>
                            <div class="card-body p-10 bg-white sm-p-8 last-paragraph-no-margin">
                                <div class="entry-meta mb-10px fs-16 text-dark-gray">
                                    <span><i class="feather icon-feather-user"></i><a href="<?php echo base_url(); ?>/news/news_details/<?=$newsList['id']?>" class="text-dark-gray fw-500">Admin</a></span>
                                    <span><i class="feather icon-feather-calendar"></i><a href="<?php echo base_url(); ?>/news/news_details/<?=$newsList['id']?>" class="text-dark-gray fw-500"><?=$newsList['publishedDate']?></a></span>
                                </div>
                                <a href="<?php echo base_url(); ?>/news/news_details/<?=$newsList['id']?>" class="text-dark-gray card-title mb-20px alt-font fw-600 fs-22 lh-32 d-block">
                                   <?= substr($newsList['heading'], 0, 50) . '...' ?>
                                </a>
                                <p><?= substr($newsList['body'], 0, 100) . '...' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

        </div>
    </section>

<?php include 'layouts/brands.php'?>
