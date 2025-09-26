<?php                      
    $dept = $data['dept'];   
    $deptJobs = $data['deptJobs'];   
?>
<section class="ipad-top-space-margin overflow-hidden bg-very-light-gray p-0 page-title-big-typography">
    <div class="container">
        <div class="row justify-content-center one-half-screen overflow-visible">
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center align-items-md-start text-center text-md-start page-title-extra-small sm-pt-50px sm-pb-50px" data-anime='{ "el": "childs", "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <h1 class="ls-0px fw-600 text-dark-gray d-inline-block text-decoration-line-bottom-medium border-color-base-color mb-25px">TSL Career</h1>
                <span class="text-dark-gray fs-50 md-fs-45 sm-fs-70 fw-700 ls-minus-1px xs-ms-0 fancy-text-style-4"> <?= $dept['name']?>  </span>
                <a href="javascript:history.back()" class="btn btn-sm btn-primary fw-400 mt-5">Go Back</a>
            </div>
            <div class="col-md-8">
                <div class="outside-box-right-20 sm-outside-box-left-20 h-100 sm-h-300px xs-h-250px cover-background" style="background-image: url('<?php echo base_url(); ?>/assets/img/dept.webp');"></div>
            </div>
        </div>
    </div>
</section>


<section class="position-relative">
    <div class="container">
        <div class="row" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-lg-10 md-mb-50px">
                <!-- start details  -->
                <div class="col-lg-8">
                  <h3 class="text-dark-gray fw-600 ls-minus-05px d-inline-block mb-5px"><?= $dept['name']?></h3>
                </div>
                <div class="col-12">
                    <!-- <img src="<?= $dept['image']?>" alt="" class="w-30 border-radius-6px mb-2"> -->
                    <p><?= $dept['description']?></p>
                    
                </div>
                <!-- end details -->
            </div>
            <!-- start sidebar -->
            
            <!-- end sidebar -->
        </div>
    </div>
</section>



<section class="bg-light position-relative overlap-height">
    <!-- <div class="position-absolute- left-minus-200px top-25-" data-bottom-top="transform: translateY(-80px)" data-top-bottom="transform: translateY(80px)">
        <img src="<?php echo base_url(); ?>/assets/img/careers/demo-elearning-bg-04.webp" alt="">
    </div> -->
    <div class="container overlap-gap-section">
        <div class="row align-items-center mb-4">
            <div class="col-xl-6 lg-mb-30px text-center text-xl-start">
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-2">Available Positions</h3>
            </div>
            <div class="col-xl-6 tab-style-04 text-center text-xl-end">
                <!-- filter navigation -->
                <ul class="portfolio-filter fw-500 nav nav-tabs justify-content-center justify-content-xl-end border-0">
                    <li class="nav active"><a data-filter="*" href="#">All</a></li>
                </ul>
                <!-- end filter navigation --> 
            </div>
        </div> 
        <div class="row">
            <div class="col-12 filter-content p-md-0">
                <ul class="portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>

                   
                    <!-- Start dynamic job listing -->
                        <?php if (!empty($deptJobs)): ?>
                            <?php foreach ($deptJobs as $job): ?>
                                <li class="grid-item design transition-inner-all">
                                    <div class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">                                
                                        <div class="bg-white position-relative">
                                            <div class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                                <span class="d-block mb-10px">
                                                    <a href="#" class="text-dark-gray text-uppercase fs-15 fw-600 services-text"><?= $job['department']; ?></a>
                                                </span>
                                                <div class="d-flex align-items-center mb-5px">
                                                    <a href="#" class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90"><?= $job['title']; ?></a>
                                                </div>
                                                <p class="text-dark-gray"><?= substr(strip_tags($job['description']), 0, 100); ?>...</p> <!-- Short description -->
                                            </div> 
                                            <div class="d-flex justify-content-center align-items-center ps-35px pe-35px xl-ps-25px xl-pe-25px pt-15px pb-20px">
                                                <div class="me-auto">
                                                    <i class="feather icon-feather-map-pin text-dark-gray d-inline-block me-5px"></i><span class="fs-16 text-dark-gray fw-500"><?= $job['location']; ?></span>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-link-gradient expand btn-extra-large text-dark-gray d-table d-lg-inline-block xl-mb-15px md-mx-auto">View Details<span class="bg-dark-gray"></span></a>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="text-center text-muted fs-18">No jobs currently available.</p>
                        <?php endif; ?>
                        <!-- End dynamic job listing -->


                </ul>
            </div>
        </div>
    </div>
</section>
