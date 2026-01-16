<section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/banner/breadcrumb/gallery.jpg)"> 
 <div class="opacity-light gradient-black"></div>   
    <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-lg-7 col-sm-12 position-relative page-title-extra-small">
                <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Transport Services Limited</span>
                </h1>
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>Our Gallery</span>
                </h2>
                <!-- <p class="text-white">A leading provider of customized logistics and transportation solution in Nigeria</p> -->
            </div> 
        </div>
    </div>
</section>

<section class="bg-midnight-blue"> 
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php
                $gallery = $data['gallery'];

                if (!empty($gallery)) {
                ?>
                    <ul class="image-gallery-style-03 gallery-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                        <li class="grid-sizer"></li>

                        <?php foreach ($gallery as $key => $item) { ?> 
                            <!-- start gallery item -->
                            <li class="grid-item transition-inner-all">
                                <div class="gallery-box overflow-hidden">
                                    <a href="<?= $item['image']; ?>"
                                       data-group="lightbox-group-gallery-item-3"
                                       title="<?= $item['title']; ?>">
                                        <div class="position-relative gallery-image bg-base-color">
                                            <img src="<?= $item['image']; ?>" alt="">
                                            <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                                <i class="feather icon-feather-plus icon-medium text-white"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div> 
                                <p class="text-white"><?= $item['title']; ?></p>
                            </li>
                        <?php } ?>

                    </ul>
                <?php
                } else {
                ?>
                    <div class="text-center py-5">
                        <h4 class="text-white fw-600 mb-2">No gallery images available</h4>
                        <p class="text-white opacity-7 mb-0">Please check back later.</p>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
