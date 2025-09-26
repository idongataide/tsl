<?php                      
    $news = $data['news'];   
?>

<section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?=$news['coverImage']?>)"> 
<div class="opacity-light gradient-black"></div>   
 <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Transport Service Limited</span>
                </h1>
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>News</span>
                </h2>
            </div> 
        </div>
    </div>
</section> 
<!-- Page Title Section -->
<section class="p-0 sm-pb-40px top-space-margin page-title-center-alignment">
    <div class="container">
        <div class="row align-items-center- justify-content-center mb-6">
            <div class="col-lg-10 text-center">
                <span class="fs-18 mb-30px d-inline-block sm-mb-20px">By 
                    <a href="#" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom">Admin</a> 
                    in 
                    <a href="#" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom">
                        <?=$news['categoryId']?>
                    </a> 
                    on 
                    <?=$news['publishedDate']?>
                </span>
                <h3 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0">
                    <?=$news['heading']?>
                </h3>
            </div>
        </div>
    </div>
</section>

<!-- Image Section -->
<section class="py-0 ps-13 pe-13 lg-ps-4 lg-pe-4 sm-px-0">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 one-half-screen">
                <img src="<?=$news['image']?>" class="w-100" alt="News Image">
            </div>
        </div>
    </div>
</section>

<!-- News Content Section -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-12 last-paragraph-no-margin text-center text-md-start">
                        <h3 class="alt-font fw-600 text-dark-gray">
                            <?=$news['subHeading']?>
                        </h3>
                        <?php
                            $body = $news['body'];
                            $words = explode(' ', $body);
                            $chunkedWords = array_chunk($words, 100); 

                            foreach ($chunkedWords as $index => $chunk) {
                                if ($index == 0) {
                                    echo '<p><span class="alt-font first-letter first-letter-block first-letter-round bg-secondary text-white">' . substr($chunk[0], 0, 1) . '</span>' . substr($chunk[0], 1) . ' ' . implode(' ', array_slice($chunk, 1)) . '</p>';
                                } else {
                                    echo '<p>' . implode(' ', $chunk) . '</p>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bg-light">
    <?php include 'layouts/latest-news.php'?>
</div>