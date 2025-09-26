<?php
 $curl = curl_init();
 curl_setopt_array($curl, [
     CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/latest-news',
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_CUSTOMREQUEST => 'GET',
     CURLOPT_HTTPHEADER => [
         'Content-Type: application/json',
         'Accept: application/json',
         // 'Cache-Control: no-cache',
     ],

     CURLOPT_SSL_VERIFYHOST => false,
     CURLOPT_SSL_VERIFYPEER => false,
 ]);

 $response = curl_exec($curl);
 curl_close($curl);
 $decodedResponse = json_decode($response, true);
 
 $latest =  $decodedResponse['data'] ?? [];
 ?>

 <section class="pt-0- bg-light"> 
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center" data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">News and updates</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px mb-0">Our latest news</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-md-0">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        
                       
                      <?php
                        foreach ($latest as $key => $newsList) {
                        ?>
                        <li class="grid-item">
                            <div class="card border-0 border-radius-4px box-shadow-quadruple-large">
                                <div class="blog-image">
                                    <a href="<?php echo base_url(); ?>/news/news_details/<?=$newsList['id']?>" class="d-block">
                                        <img src="<?= $newsList['coverImage']; ?>" alt="blog-image">
                                    </a>
                                </div>
                                <div class="card-body p-13 md-p-11">
                                    <a href="<?php echo base_url(); ?>/news/news_details/<?=$newsList['id']?>" class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block">
                                        <?= substr($newsList['heading'], 0, 40) . '...' ?>
                                    </a>
                                    <p><?= substr($newsList['body'], 0, 100) . '...' ?></p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-16">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block text-dark-gray fw-600"><?= $newsList['publishedDate'] ?></span>                                           
                                        </div>
                                        <div class="like-count fs-15 fw-600">
                                            <a href="#"><i class="fa-regular fa-eye text-red"></i><span class="text-dark-gray align-middle">View</span></a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                        }
                        ?>

                        

                    </ul>
                </div>
            </div>
        </div>
    </section>