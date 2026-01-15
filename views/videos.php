<section class="bg-gradient-very-light-gray ps-6 pe-6 lg-ps-2 lg-pe-2">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-sm-2">

            <?php
            $videos = $data['videos'];

            if (!empty($videos)) {
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
                            allowfullscreen>
                        </iframe>
                        <div class="text-dark-gray fs-18 fw-600 mt-4">
                            <?= $video['title']; ?>
                        </div>
                    </div>
            <?php
                }
            } else {
            ?>
                <div class="col-12 text-center py-5">
                    <h4 class="text-dark-gray fw-600 mb-2">No videos available now</h4>
                    <p class="text-medium-gray mb-0">Please check back later for updates.</p>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
