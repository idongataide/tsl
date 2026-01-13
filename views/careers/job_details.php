<?php
$job = $data['job'] ?? [];
?>

<section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/careers/hero-4.webp)"> 
    <div class="opacity-medium gradient-black"></div>   
    <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>TSL Career</span>
                </h1>
                <h2 class="m-auto pb-5px pt-5px t-light fw-600 ls-minus-1px overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>
                        <?= htmlspecialchars($job['title'] ?? 'Job Details') ?>
                    </span>
                </h2>
                <div class="text-white mt-3">
                    <span class="badge bg-primary me-2"><?= htmlspecialchars($job['department'] ?? '') ?></span>
                    <span class="badge bg-secondary me-2"><?= ucfirst($job['location'] ?? '') ?></span>
                    <span class="badge bg-info">Ref: <?= $job['reference'] ?? '' ?></span>
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="position-relative">
    <div class="container">
        <div class="row justify-content-center" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-lg-7 md-mb-50px">
                <!-- start job details  -->
                <div class="col-12">
                    <div class="col-12 p-0 tab-style-04 mt-45px">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 last-paragraph-no-margin">
                                <span class="fs-18 text-dark-gray fw-600 ls-minus-05px d-inline-block mb-5px">Job Description</span>
                                <div class="job-description">
                                    <?= $job['description'] ?? '<p class="text-muted">No description available.</p>' ?>
                                </div>
                                
                                <?php if (!empty($job['requirements'])): ?>
                                <div class="mt-30px mb-30px md-mt-10px d-inline-block w-100">
                                    <span class="fs-18 text-dark-gray fw-600 ls-minus-05px d-inline-block mb-10px">Requirements</span>
                                    <div class="job-requirements">
                                        <?= $job['requirements'] ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!empty($job['skills'])): ?>
                                <div class="mt-30px mb-30px md-mt-10px d-inline-block w-100">
                                    <span class="fs-18 text-dark-gray fw-600 ls-minus-05px d-inline-block mb-10px">Required Skills</span>
                                    <div class="job-skills">
                                        <?= $job['skills'] ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!empty($job['benefits'])): ?>
                                <div class="mt-30px mb-30px md-mt-10px d-inline-block w-100">
                                    <span class="fs-18 text-dark-gray fw-600 ls-minus-05px d-inline-block mb-10px">Benefits & Perks</span>
                                    <div class="job-benefits">
                                        <?= $job['benefits'] ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end details -->
            </div>
            <!-- start sidebar -->
            <aside class="col-lg-5 ps-60px lg-ps-30px md-ps-15px">
                <div class="position-sticky top-150px lg-position-relative lg-top-0px">
                    <div class="border-radius-6px overflow-hidden bg-tranquil">
                        <div class="p-35px lg-p-25px">
                            <ul class="p-0 mb-20px list-style-02">
                                <li class="border-bottom border-color-extra-medium-gray pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-building fs-20"></i></span>
                                        <span class="fw-600">Department</span>
                                    </span>
                                    <span class="ms-auto"><?= htmlspecialchars($job['department'] ?? 'N/A') ?></span>
                                </li>
                                <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-clock-history fs-20"></i></span>
                                        <span class="fw-600">Date Posted</span>
                                    </span>
                                    <span class="ms-auto"><?= $job['datePosted'] ?? 'N/A' ?></span>
                                </li>
                                <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-calendar-x fs-20"></i></span>
                                        <span class="fw-600">Closure Date</span>
                                    </span>
                                    <span class="ms-auto"><?= $job['closureDate'] ?? 'N/A' ?></span>
                                </li>
                                <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-geo-alt fs-20"></i></span>
                                        <span class="fw-600">Location</span>
                                    </span>
                                    <span class="ms-auto"><?= ucfirst($job['location'] ?? 'N/A') ?></span>
                                </li>
                                <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-file-text fs-20"></i></span>
                                        <span class="fw-600">Reference</span>
                                    </span>
                                    <span class="ms-auto"><?= $job['reference'] ?? 'N/A' ?></span>
                                </li>
                                <!-- <li class="border-bottom border-color-extra-medium-gray pt-15px pb-15px">
                                    <span class="text-dark-gray">
                                        <span class="me-5px"><i class="bi bi-people fs-20"></i></span>
                                        <span class="fw-600">Applications</span>
                                    </span>
                                    <span class="ms-auto"><?= $job['application_count'] ?? '0' ?></span>
                                </li>                               -->
                            </ul>
                            <a href="<?=$job['link']?>" target="blank" class="btn btn-extra-large btn-base-color btn-rounded btn-switch-text fw-600 left-icon w-100">
                                <span>
                                    <span><i class="feather icon-feather-send"></i></span>
                                    <span class="btn-double-text" data-text="Apply Now">Apply Now</span>
                                </span>
                            </a>
                            <div class="text-center mt-3">
                                <a href="javascript:history.back()" class="">
                                    <i class="feather icon-feather-arrow-left me-2"></i>Back to Jobs
                                </a>
                            </div>
                            <div class="elements-social social-icon-style-02 mt-20px">
                                <ul class="small-icon dark text-center">
                                    <li class="sm-mb-0"><a class="facebook" href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="sm-mb-0"><a class="twitter" href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li class="sm-mb-0"><a class="linkedin" href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li class="sm-mb-0"><a class="whatsapp" href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- end sidebar -->
        </div>
    </div>
</section>

<?php if (!empty($data['relatedJobs'])): ?>
<section class="bg-light position-relative overlap-height">
    <div class="position-absolute left-minus-200px top-25" data-bottom-top="transform: translateY(-80px)" data-top-bottom="transform: translateY(80px)">
        <img src="<?php echo base_url(); ?>/assets/img/careers/demo-elearning-bg-04.webp" alt="">
    </div>
    <div class="container overlap-gap-section">
        <div class="row align-items-center mb-4">
            <div class="col-xl-6 lg-mb-30px text-center text-xl-start">
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-2">Related Positions</h3>
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
                    
                    <?php foreach ($data['relatedJobs'] as $relatedJob): ?>
                        <?php if ($relatedJob['id'] != $job['id']): ?>
                        <li class="grid-item design transition-inner-all">
                            <div class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">                                
                                <div class="bg-white position-relative">
                                    <div class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                        <span class="d-block mb-10px">
                                            <a href="#" class="text-dark-gray text-uppercase fs-15 fw-600 services-text"><?= htmlspecialchars($relatedJob['department']) ?></a>
                                        </span>
                                        <div class="d-flex align-items-center mb-5px">
                                            <a href="<?= base_url() ?>/careers/job_details/<?= $relatedJob['id'] ?>" class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">
                                                <?= htmlspecialchars($relatedJob['title']) ?>
                                            </a>
                                        </div>
                                        <p class="text-dark-gray fs-15"><?= substr(strip_tags($relatedJob['description']), 0, 80) ?>...</p>                                           
                                    </div> 
                                    <div class="d-flex justify-content-center align-items-center ps-35px pe-35px xl-ps-25px xl-pe-25px pt-15px pb-20px">
                                        <div class="me-auto">
                                            <i class="feather icon-feather-map-pin text-dark-gray d-inline-block me-5px"></i>
                                            <span class="fs-16 text-dark-gray fw-500"><?= ucfirst($relatedJob['location']) ?></span>
                                        </div>
                                        <div>
                                            <a href="<?= base_url() ?>/careers/job_details/<?= $relatedJob['id'] ?>" class="btn btn-link-gradient expand btn-extra-large text-dark-gray d-table d-lg-inline-block xl-mb-15px md-mx-auto">
                                                View Details<span class="bg-dark-gray"></span>
                                            </a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<style>
.job-description p,
.job-requirements p,
.job-skills p,
.job-benefits p {
    margin-bottom: 15px;
    line-height: 1.6;
}

.job-description ul,
.job-requirements ul,
.job-skills ul,
.job-benefits ul {
    padding-left: 20px;
    margin-bottom: 15px;
}

.job-description li,
.job-requirements li,
.job-skills li,
.job-benefits li {
    margin-bottom: 8px;
    position: relative;
    padding-left: 10px;
}
</style>