<?php $leader = $data['$leaders']; 
var_dump($leader,'$leader');
die();
?> 

<section class="top-space-margin" style="margin-top: 90px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="alt-font fw-700 text-dark-gray ls-minus-2px mb-0"><?php echo $leader['title']; ?></h1>
                <span class="fs-18 mb-3 d-inline-block"><?php echo $leader['sub_title']; ?></span>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="offset-lg-1 col-md-8 last-paragraph-no-margin text-center text-md-start">
                        <p><?php echo $leader['p_1']; ?></p>
                        <p><?php echo $leader['p_2']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
