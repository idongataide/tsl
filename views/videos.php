

<section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/banner/breadcrumb/gallery.jpg)"> 
 <div class="opacity-light gradient-black"></div>   
    <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-lg-7 col-sm-12 position-relative page-title-extra-small">
                <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Transport Services Limited</span>
                </h1>
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>Video Gallery</span>
                </h2>
                <p class="text-white">View our latest video clips showcasing the company's journey and achievements</p>
            </div> 
        </div>
    </div>
</section>

    
    
    <section class="bg-gradient-very-light-gray ps-6 pe-6 lg-ps-2 lg-pe-2">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-sm-2">
                <?php
                $videos = $data['videos']; 
                foreach ($videos as $key => $video) {
                    $parsed_url = parse_url($video['link']);
                    parse_str($parsed_url['query'], $query_params);
                    $video_id = $query_params['v']; 
                    $embed_url = "https://www.youtube.com/embed/" . $video_id; 
                ?>
                    <div class="col text-center fit-videos md-mb-50px sm-mb-30px mb-4">
                        <iframe 
                            width="560" 
                            height="315" 
                            src="<?= $embed_url; ?>?autoplay=1&rel=0&showinfo=0" 
                            allowfullscreen="">
                        </iframe>
                        <div class="text-dark-gray fs-18 fw-600 mt-4"><?= $video['title']; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    
    