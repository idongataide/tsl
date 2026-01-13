<?php
$jobs = $data['jobs'] ?? [];
$departments = isset($data['departments']) ? $data['departments'] : [];
?>

<section class="page-title-big-typography breadcrumbs bg-dark-gray ipad-top-space-margin cover-background md-py-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/careers/hero-5.webp)"> 
    <div class="opacity-medium gradient-black"></div>   
    <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#fff", "#fff", "#fff", "#fff", "#fff"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
    <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-lg-12 col-sm-12 position-relative page-title-extra-small">
                <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>TSL Career</span>
                </h1>
                <h2 class="m-auto pb-5px pt-5px t-light fw-600 ls-minus-1px overflow-hidden">
                    <span class="d-inline-block" data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 200 }'>Available Positions</span>
                </h2>
                <p class="text-white opacity-8 mt-3 mb-0">Find your perfect role and join our team of professionals</p>
            </div> 
        </div>
    </div>
</section>

<section class="bg-light position-relative overlap-height">
    <div class="position-absolute left-minus-200px top-25" data-bottom-top="transform: translateY(-80px)" data-top-bottom="transform: translateY(80px)">
        <img src="<?php echo base_url(); ?>/assets/img/careers/demo-elearning-bg-04.webp" alt="">
    </div>
    <div class="container overlap-gap-section">
        <div class="row align-items-center mb-4">
            <div class="col-xl-4 lg-mb-30px text-center text-xl-start">
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-2">Available Positions</h3>
                <p class="text-dark-gray mb-0"><?= count($jobs) ?> open position<?= count($jobs) !== 1 ? 's' : '' ?> available</p>
            </div>
            <div class="col-xl-8 tab-style-04 text-center text-xl-end">
                <!-- Desktop View: Tab Navigation -->
                <ul class="portfolio-filter fw-500 nav nav-tabs justify-content-center justify-content-xl-end border-0 d-none d-lg-flex">
                    <li class="nav active"><a data-filter="*" href="#" class="active">All Departments</a></li>
                    <?php foreach ($departments as $dept): ?>
                        <li class="nav">
                            <a data-filter=".dept-<?= strtolower(str_replace(' ', '-', $dept)) ?>" href="#">
                                <?= htmlspecialchars($dept) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                
                <!-- Mobile/Tablet View: Dropdown Select -->
                <div class="d-block d-lg-none mt-3">
                    <div class="styled-select">
                        <select id="departmentFilter" class="form-select form-select-lg border-radius-6px shadow-sm py-3">
                            <option value="*" selected>All Departments</option>
                            <?php foreach ($departments as $dept): ?>
                                <option value=".dept-<?= strtolower(str_replace(' ', '-', $dept)) ?>">
                                    <?= htmlspecialchars($dept) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="select-arrow">
                            <i class="feather icon-feather-chevron-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <?php if (!empty($jobs)): ?>
        <div class="row">
            <div class="col-12 filter-content p-md-0">
                <ul class="portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    
                    <!-- Start dynamic job listings -->
                    <?php foreach ($jobs as $job): ?>
                        <li class="grid-item design transition-inner-all dept-<?= strtolower(str_replace(' ', '-', $job['department'])) ?>">
                        <div class="services-box-style-06 border-radius-6px hover-box overflow-hidden box-shadow-large">                                
                            <div class="bg-white position-relative">
                                <div class="ps-35px pe-35px pt-30px pb-30px border-bottom border-color-transparent-dark-very-light xl-ps-25px xl-pe-25px">
                                    <span class="d-block mb-10px">
                                        <span class="text-dark-gray fs-12 fw-400 services-text"><?= htmlspecialchars($job['department']) ?></span>
                                    </span>
                                    <div class="d-flex align-items-center mb-5px">
                                        <a href="<?= base_url() ?>/careers/job_details/<?= $job['id'] ?>" class="text-dark-gray fw-600 fs-19 md-fs-18 lh-28 w-90">
                                            <?= htmlspecialchars($job['title']) ?>
                                        </a>
                                    </div>
                                    <div class="mb-10px">
                                        <span class="badge <?= strtolower($job['location']) === 'remote' ? 'bg-success' : 'bg-danger' ?>">
                                            <?= ucfirst($job['location']) ?>
                                        </span>
                                    </div>
                                    <p class="text-dark-gray fs-15 mb-0"><?= substr(strip_tags($job['description']), 0, 100) ?>...</p>                                         
                                </div> 
                                <div class="d-flex justify-content-center align-items-center ps-35px pe-35px xl-ps-25px xl-pe-25px pt-15px pb-20px">
                                    <div class="me-auto">
                                        <i class="feather icon-feather-calendar text-dark-gray d-inline-block me-5px"></i>
                                        <span class="fs-16 text-dark-gray fw-500">Closes: <?= $job['closureDate'] ?></span>
                                    </div>
                                    <div>
                                        <a href="<?= base_url() ?>/careers/job_details/<?= $job['id'] ?>" class="text-dark-gray d-table d-lg-inline-block xl-mb-15px md-mx-auto">
                                            View <i class="feather icon-feather-arrow-right ms-5px"></i>
                                        </a>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                    <!-- End dynamic job listings -->
                    
                </ul>
            </div>
        </div>
        <?php else: ?>
        <!-- No jobs available message -->
        <div class="row">
            <div class="col-12 text-center py-5">
                <div class="alert alert-info d-inline-block border-radius-6px p-5">
                    <div class="mb-3">
                        <i class="feather icon-feather-briefcase fs-60 text-dark-gray opacity-6"></i>
                    </div>
                    <h4 class="text-dark-gray fw-600 mb-3">No Open Positions Available</h4>
                    <p class="text-dark-gray mb-4">We don't have any open positions at the moment, but we're always looking for talented individuals.<br>Please check back later for new opportunities or follow us on social media for updates.</p>
                    <a href="javascript:history.back()" class="btn btn-primary btn-rounded">Go Back</a>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Additional info -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="alert alert-light border-radius-6px p-4 d-inline-block">
                    <p class="mb-2 text-dark-gray"><i class="feather icon-feather-info me-2"></i>Can't find a suitable position? Send us your CV anyway at <a href="mailto:careers@tsllimited.com" class="text-primary fw-600">careers@tsllimited.com</a></p>
                    <p class="mb-0 text-dark-gray">We keep all applications on file for future opportunities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.badge.bg-success {
    background-color: #28a745 !important;
    color: white !important;
}

.badge.bg-primary {
    background-color: #007bff !important;
    color: white !important;
}

.services-box-style-06 {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.services-box-style-06:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
}

.border-radius-6px {
    border-radius: 6px;
}

.alert-info {
    background-color: rgba(13, 110, 253, 0.1);
    border: 1px solid rgba(13, 110, 253, 0.2);
}

.alert-light {
    background-color: rgba(248, 249, 250, 0.8);
    border: 1px solid rgba(222, 226, 230, 0.8);
}

/* Department Filter Styling */
.portfolio-filter {
    gap: 8px;
}

.portfolio-filter .nav {
    margin: 0 4px;
}

.portfolio-filter .nav a {
    background: white;
    border: 1px solid #e0e0e0;
    border-radius: 30px;
    padding: 5px 10px;
    color: #555;
    font-weight: 500;
    transition: all 0.3s ease;
    text-decoration: none;
    display: block;
    font-size: 14px;
}
.portfolio-filter .nav a:hover {
    background: #1c0f0f;
    border-color: #ff3333;
    color: #ff3333;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(255, 51, 51, 0.15);
}

.portfolio-filter .nav.active a {
    background: linear-gradient(135deg, #8b0000, #b30000);
    border-color: #ff3333;
    color: white;
    box-shadow: 0 4px 15px rgba(255, 51, 51, 0.25);
}

/* Styled Select Dropdown */
.styled-select {
    position: relative;
    max-width: 350px;
    margin: 0 auto;
}

.styled-select .form-select {
    appearance: none;
    background: white;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: 500;
    color: #333;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    cursor: pointer;
    transition: all 0.3s ease;
}

.styled-select .form-select:focus {
    border-color: #007bff;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.25);
    outline: none;
}

.styled-select .form-select option {
    padding: 10px;
    font-size: 15px;
}

.select-arrow {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: #007bff;
    font-size: 18px;
}

/* Department badges in job cards */
.services-text {
    display: inline-block;
    padding: 6px 12px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 20px;
    color: #495057 !important;
    font-size: 13px !important;
    letter-spacing: 0.5px;
}

/* Filter Animation */
.grid-item {
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.grid-item.hidden {
    opacity: 0;
    transform: scale(0.9);
    height: 0;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

/* Responsive adjustments */
@media (max-width: 1199px) {
    .portfolio-filter .nav a {
        padding: 8px 18px;
        font-size: 14px;
    }
}

@media (max-width: 991px) {
    .portfolio-filter {
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .portfolio-filter .nav {
        margin-bottom: 8px;
    }
}
</style>

<script>
// Department filter functionality
document.addEventListener('DOMContentLoaded', function() {
    // Desktop tab filter
    const tabFilters = document.querySelectorAll('.portfolio-filter .nav a');
    tabFilters.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all tabs
            tabFilters.forEach(t => {
                t.parentElement.classList.remove('active');
                t.classList.remove('active');
            });
            
            // Add active class to clicked tab
            this.parentElement.classList.add('active');
            this.classList.add('active');
            
            // Filter items
            const filterValue = this.getAttribute('data-filter');
            filterItems(filterValue);
        });
    });
    
    // Mobile dropdown filter
    const mobileFilter = document.getElementById('departmentFilter');
    if (mobileFilter) {
        mobileFilter.addEventListener('change', function() {
            filterItems(this.value);
            
            // Update desktop tabs to match
            tabFilters.forEach(tab => {
                if (tab.getAttribute('data-filter') === this.value) {
                    tab.parentElement.classList.add('active');
                    tab.classList.add('active');
                } else {
                    tab.parentElement.classList.remove('active');
                    tab.classList.remove('active');
                }
            });
        });
    }
    
    function filterItems(filterValue) {
        const items = document.querySelectorAll('.grid-item');
        const grid = document.querySelector('.portfolio-wrapper');
        
        // Add loading animation
        grid.classList.add('grid-loading');
        
        setTimeout(() => {
            items.forEach(item => {
                if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
                    item.classList.remove('hidden');
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        item.classList.add('hidden');
                    }, 300);
                }
            });
            
            // Remove loading class
            setTimeout(() => {
                grid.classList.remove('grid-loading');
            }, 500);
        }, 100);
    }
    
    // Initialize Isotope for smooth filtering (if available)
    if (typeof Isotope !== 'undefined') {
        const iso = new Isotope('.portfolio-wrapper', {
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
            transitionDuration: '0.5s'
        });
        
        // Update Isotope on filter change
        document.querySelectorAll('.portfolio-filter .nav a').forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                const filterValue = this.getAttribute('data-filter');
                iso.arrange({ filter: filterValue });
            });
        });
        
        if (mobileFilter) {
            mobileFilter.addEventListener('change', function() {
                iso.arrange({ filter: this.value });
            });
        }
    }
});
</script>