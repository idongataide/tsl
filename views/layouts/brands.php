
   <section class="pt-0 mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 text-center mb-1" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="text-dark-gray fw-700 fs-15 text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray"> Our trusted client network</span>
                    </div>
                </div>
                <div class="row position-relative clients-style-08 mt-25px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 800, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "pauseOnMouseEnter": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                       <div class="swiper-wrapper marquee-slide">
                            <!-- start client items -->
                            <?php
                            for ($i = 1; $i <= 16; $i++) {
                                $imageNumber = str_pad($i, 2, '0', STR_PAD_LEFT);
                                ?>
                                <div class="swiper-slide">
                                    <a href="#"><img src="<?php echo base_url(); ?>/assets/img/brand/<?php echo $imageNumber; ?>.webp" alt="Brand <?php echo $i; ?>" /></a>
                                </div>
                            <?php } ?>
                            <!-- end client items -->
                        </div>

                    
                    </div>  
                </div>
            </div>
        </section>