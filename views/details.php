<?php $leader = $data['lead']; ?> 
<div class="" style="background:#fff5f38c">
    <section class="top-space-margin  background-position-center-top position-relative lg-overflow-hidden"  style="background-image: url(<?php echo base_url(); ?>/assets/images/demo-marketing-dot.svg)">
     <div id="particles-03" data-particle="true" data-particle-options='{"particles": {"number": {"value": 5,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#a21615", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}' class="position-absolute h-100 top-0 left-0 z-index-minus-1"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="alt-font fw-700 text-dark-gray ls-minus-2px mb-0">
                        <?php echo htmlspecialchars($leader['title'], ENT_QUOTES, 'UTF-8'); ?>
                    </h3>
                     <span class="fs-18 mb-3 d-inline-block" style="color:#a21615">
                        <?php echo htmlspecialchars($leader['sub_title'], ENT_QUOTES, 'UTF-8'); ?>
                    </span>  
                    <a href="javascript:history.back();">
                        <div style="display: flex !important; width: 150px; margin:auto; align-items: center; justify-content: center;" class="bg-white border border-color-extra-medium-gray box-shadow-extra-large fw-700 text-dark-gray text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">
                            <i class="feather icon-feather-arrow-left me-2"></i> Go Back
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="pt-0- bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-10 m-auto last-paragraph-no-margin text-md-start-">
                        <p><?php echo htmlspecialchars($leader['p_1'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p><?php echo htmlspecialchars($leader['p_2'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p><?php echo htmlspecialchars($leader['p_3'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
