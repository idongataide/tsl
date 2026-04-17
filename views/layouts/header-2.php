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
        <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/logo/favico.png">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assets/img/logo/favico.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>/assets/img/logo/favico.png">
        
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
                                <!-- <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/" class="nav-link <?php echo $menu_active === 'index' ? 'active' : ''; ?>">Home</a>
                                </li>      -->

                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/home" class="nav-link">
                                        Transport Services Limited
                                    </a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">TSL Logistics Limited</a></li> 
                                <li class="nav-item"><a href="#" class="nav-link">TSL Metroline Limited</a></li> 
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