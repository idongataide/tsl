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
