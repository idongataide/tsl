<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title> <?php echo @$data['page_title'] ?: 'TSL - Index'; ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Hardonsoft">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="A leading provider of customized logistics and transportation solution in Nigeria.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/fav.webp">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assets/img/fav.webp">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>/assets/img/fav.webp">
        
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/vendors.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icon.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/demos/branding-agency/branding-agency.css">
        <style>
            .header-with-topbar .nav-link.active {
                color: #a21615 !important;
                font-weight: 600 !important;
            }
        </style>
    </head>
    <body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#1d1d1d">
        <!-- start header -->
        <header class="header-with-topbar sticky">        
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white header-reverse glass-effect  responsive-sticky" data-header-hover="light">
            <!-- <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky"> -->
                <div class="container-fluid">
                    <div class="col-auto col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>/">
                            <img src="<?php echo base_url(); ?>/assets/img/logo/logo-01.webp" alt="" class="default-logo">
                            <img src="<?php echo base_url(); ?>/assets/img/logo/logo-01.webp" alt="" class="alt-logo">
                            <img src="<?php echo base_url(); ?>/assets/img/logo/logo-01.webp" alt="" class="mobile-logo"> 
                        </a>
                    </div>
                    <div class="col-auto menu-order position-static">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav"> 
                            <ul class="navbar-nav fw-600">
                               <?php
                                $menu_active = @$data['menu_active'] ?? '';
                                $career_menu_active = @$data['career_menu_active'] ?? '';
                                ?>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/" class="nav-link <?php echo $menu_active === 'index' ? 'active' : ''; ?>">Home</a>
                                </li>
                                <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="<?php echo base_url(); ?>/about" class="nav-link <?php echo $menu_active === 'about' ? 'active' : ''; ?>">Who we are</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                        <li><a href="<?php echo base_url(); ?>/about">About Us</a></li>
                                        <li><a href="<?php echo base_url(); ?>/about/leadership">Our Leadership</a></li>                                       
                                        <li><a href="<?php echo base_url(); ?>/about/gallery">Gallery</a></li>                                       
                                        <li><a href="<?php echo base_url(); ?>/about/videos">Videos</a></li>                                       
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="<?php echo base_url(); ?>/services" class="nav-link <?php echo $menu_active === 'services' ? 'active' : ''; ?>">What we do</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                        <li><a href="<?php echo base_url(); ?>/services/oil_gas">Oil and Gas Transportation</a></li>
                                        <li><a href="<?php echo base_url(); ?>/services/transport">Freight Transportation</a></li>
                                        <li><a href="<?php echo base_url(); ?>/services/freight">Freight Forwarding and Brokerage</a></li>  
                                        <li><a href="<?php echo base_url(); ?>/services/fleets">Dedicated Fleet services</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="<?php echo base_url(); ?>/about" class="nav-link">Companies</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                        <li><a target="_blank" href="tml.tsllimited.com">TSL Metroline</a></li>
                                        <li><a target="_blank" href="https://tsllogisticsltd.com/">">TSL Logistics</a></li>                                       
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="<?php echo base_url(); ?>/hse" class="nav-link <?php echo $menu_active === 'hse' ? 'active' : ''; ?>">HSEQ </a></li> 
                                <li class="nav-item"><a href="<?php echo base_url(); ?>/sustainability" class="nav-link <?php echo $menu_active === 'sustainability' ? 'active' : ''; ?>">Sustainability</a></li> 
                                <li class="nav-item dropdown submenu">
                                    <a href="<?php echo base_url(); ?>/careers" class="nav-link <?php echo $menu_active === 'careers' ? 'active' : ''; ?>">Careers</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink7" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink7"> 
                                        <div class="d-lg-flex mega-menu m-auto">
                                            <ul class="col">  
                                                <li class="sub-title">Available Positions</li>
                                                <li><a href="<?php echo base_url(); ?>/careers/available_positions" class="<?php echo $career_menu_active === 'available_positions' ? 'active' : ''; ?>">All Jobs</a></li>                                               
                                            </ul>
                                            <ul class="col">  
                                                <li class="sub-title">Life at TSL</li>
                                                <li><a href="<?php echo base_url(); ?>/careers#bemore" class="<?php echo $career_menu_active === 'bemore' ? 'active' : ''; ?>">Be More</a></li>                                             
                                                <li><a href="<?php echo base_url(); ?>/careers#diversity" class="<?php echo $career_menu_active === 'diversity' ? 'active' : ''; ?>">Diversity and Inclusiveness</a></li>                                             
                                            </ul>
                                            <ul class="col">  
                                                <li class="sub-title">Discover your ideal career</li>
                                                <li><a href="<?php echo base_url(); ?>/careers/discover_careers" class="<?php echo $career_menu_active === 'discover_careers' ? 'active' : ''; ?>">Join our Team</a></li>                                             
                                                <li><a href="#" class="<?php echo $career_menu_active === 'tips' ? 'active' : ''; ?>">Tips to apply</a></li>                                             
                                            </ul>
                                            <ul class="col">  
                                                <li class="sub-title">Starting your career</li>
                                                <li><a href="<?php echo base_url(); ?>/careers/starting_career" class="<?php echo $career_menu_active === 'starting_career' ? 'active' : ''; ?>">STEP Graduate Trainee Programme</a></li>                                             
                                                <li><a href="#" class="<?php echo $career_menu_active === 'internships' ? 'active' : ''; ?>">Internships</a></li>                                             
                                            </ul>
                                            
                                            <ul class="col">  
                                                <li class="sub-title">Experienced Hires</li>
                                                <li><a href="<?php echo base_url(); ?>/careers/experienced_hires" class="<?php echo $career_menu_active === 'experienced_hires' ? 'active' : ''; ?>">Discover working at TSL</a></li>                                             
                                                                                       
                                            </ul>
                                            <ul class="col">  
                                                <li class="sub-title">Drivers</li>
                                                <li><a href="<?php echo base_url(); ?>/careers/drivers" class="<?php echo $career_menu_active === 'drivers' ? 'active' : ''; ?>">Our Drivers</a></li>                                             
                                                                                       
                                            </ul>
                                        </div> 
                                    </div>
                                </li>
                                <li class="nav-item"><a href="<?php echo base_url(); ?>/news" class="nav-link <?php echo $menu_active === 'news' ? 'active' : ''; ?>">News</a></li> 
                                <!-- <li class="nav-item"><a href="<?php echo base_url(); ?>/faq" class="nav-link <?php echo $menu_active === 'faq' ? 'active' : ''; ?>">FAQ</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                        <div class="header-icon"> 
                            <div class="header-button">                                
                                <a href="<?php echo base_url(); ?>/contact" class="btn btn-large btn-primary btn-switch-text btn-box-shadow fw-400">
                                    <span> 
                                        <span class="btn-double-text" data-text="Contact Us">Contact Us</span> 
                                        <span><i class="feather icon-feather-arrow-right"></i></span>
                                    </span>
                                </a>  
                            </div>
                        </div>  
                    </div>
                </div>
            </nav>
        </header>