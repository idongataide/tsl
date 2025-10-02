

<section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/banner/breadcrumb/fleet.webp)"> 
    <div class="opacity-medium gradient-black"></div>   
    <div class="container">
            <div class="row align-items-center small-screen">
                <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                    <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                        <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>Transport Services Limited </span>
                    </h1>
                    <h2 class="m-auto pb-5px pt-5px t-light fw-600 ls-minus-1px overflow-hidden">
                        <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>Freight Transportation</span>
                    </h2>
                </div> 
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="position-sticky top-50px">
                        <?php include 'sidebar.php'?>                        
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "string": ["Freight Transportation"], "duration": 500, "delay": 200, "speed": 10, "easing": "easeOutQuad" }'></h4>
                    <p data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>At TSL, we take pride in delivering best-in-class freight transportation
                        solutions through operational excellence and a commitment to safety. With a
                        fleet of over 800 premium European OEM trucks, featuring an average age of
                        5 years and streamlined maintenance processes, we ensure maximum uptime
                        and reliability. Our highly trained workforce, supported by state-of-the-art
                        journey management systems and IT capabilities, guarantees safe, on-time,
                        and in-full deliveries.
                    </p>
                    <img src="<?php echo base_url(); ?>/assets/img/service/5a.webp" class="mt-30px mb-30px md-mt-15px border-radius-6px" alt="">
                    <p data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Through our diversified client base, tailored cargo solutions, and advanced
                        logistics technology, we drive asset utilization and help optimize supply chain
                        efficiency. With a focus on continuous improvement and safety, we are
                        dedicated to exceeding industry standards and providing exceptional value to
                        our customers.
                    </p>

                            <p class="w-95 md-w-100">
                                TSL offers a comprehensive range of transportation solutions—ensuring flexibility and reliability for various cargo types. Explore our services below:
                            </p>

                            <div class="row justify-content-center">
                                <?php
                                $services = [
                                    [
                                        'title' => 'Dry Van Trucking',
                                        'image' => base_url() . '/assets/img/service/dryvan.jpg',
                                        'desc'  => 'Provides secure, enclosed transport for goods that require protection from weather and external elements, such as containerized products, heavy sacks, and palletized freight.'
                                    ],
                                    [
                                        'title' => 'Flatbed Trucking',
                                        'image' => base_url() . '/assets/img/service/1.jpg',
                                        'desc'  => 'Offers open-air transport for larger, irregularly shaped or oversized cargo, allowing easy loading and unloading.'
                                    ],
                                    [
                                        'title' => 'Side Body & Tautliners',
                                        'image' => base_url() . '/assets/img/services/tautliners.jpg',
                                        'desc'  => 'Deliver versatile options for general cargo, combining accessibility and protection with flexible side-loading capabilities.'
                                    ],
                                    [
                                        'title' => 'Temperature-Controlled Transport',
                                        'image' => base_url() . '/assets/img/services/temperature.jpg',
                                        'desc'  => 'Maintains optimal conditions for perishable and sensitive goods, ensuring freshness and integrity from origin to destination.'
                                    ],
                                ];

                                foreach ($services as $service) {
                                ?>
                                <div class="col-12 col-lg-6 blog-standard md-mb-50px sm-mb-40px pe-25px lg-pe-15px" 
                                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div class="col-12 mb-3">
                                        <div class="card border-0 no-border-radius box-shadow-double-large">
                                            <div class="blog-image">
                                                <img class="w-100" src="<?=$service['image']?>" alt="<?=$service['title']?>">
                                            </div>
                                            <div class="card-body p-10 bg-white sm-p-8 last-paragraph-no-margin">
                                                <a href="#" class="text-dark-gray card-title mb-20px alt-font fw-600 fs-22 lh-32 d-block">
                                                    <?=$service['title']?>
                                                </a>
                                                <p><?=$service['desc']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12 text-center">
                                    <p class="w-95 mx-auto">
                                        All services are supported by advanced logistics technology, optimizing routes for 
                                        <strong>“Safely On Time and In Full” (SOTIF)</strong> deliveries. 
                                        Our highly trained drivers ensure that every shipment—whether enclosed, open, heavy-duty, or temperature-sensitive—reaches its destination securely and efficiently.
                                    </p>
                                </div>
                            </div>
                </div>
            </div>
        </div> 
    </section>

