<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('templates/header');
?>

<div class="main-content">

    <section class="section">

        <div class="section-body">

            <div class="section-header section-header-custom">
                <h1>REDEEMABLE ITEMS</h1>
            </div>

            <div class="row rewards-row">
                <div class="col-lg-12">
                    <img src="<?=base_url()?>assets/img/rewards/iphone13_pro_max.png" alt="">
                </div>
            </div>

            <div class="row rewards-row">
                <div class="col-lg-12">
                    <img src="<?=base_url()?>assets/img/rewards/macbookpro_deets.png" alt="">
                </div>
            </div>

            <div class="row rewards-row">
                <div class="col-lg-12">
                    <img src="<?=base_url()?>assets/img/rewards/ipad_pro_deets.png" alt="">
                </div>
            </div>

            <div class="row rewards-row">
                <div class="col-lg-12">
                    <img src="<?=base_url()?>assets/img/rewards/apple_watch_deets.png" alt="">
                </div>
            </div>

        </div>
    </section>
</div>



<?php $this->load->view('templates/footer'); ?>