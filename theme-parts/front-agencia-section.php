<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
            <h4 class="fw-bolder"><?php _e('The agency');?></h4>
        </div>
        <div class="col-5">
            <h4 class="fw-bolder text-right tblue"><a href="<?php
                            if (get_locale() == 'pt_PT') {
                                echo esc_url(home_url('/')) . 'agencia';
                            } else if (get_locale() == 'en_GB') {
                                echo esc_url(home_url('/')) . 'agency/';
                            } else if (get_locale() == 'fr_FR') {
                                echo esc_url(home_url('/')) . 'agence/';
                            }
                            ?>"><?php _e('Ver agência');?></a></h4>
        </div>
        <div class="col-1"></div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 col-lg-7 col-xl-7">
            <div class="pr-5">
                <h2 class="letter-08 fw-400">
                    <?php _e('Intelligent strategies that speak to today’s Consumer'); ?>
                </h2>
            </div>
            <br>
            <div class="fs-16"><?php _e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus es.');?>
                
            </div>
        </div>
    </div>
</div>