<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/header');
?>
<div class="main-content">

    <section class="section">
        <div class="section-header section-header-custom">
            <h1 style="margin: auto;">MARKETING PLAN</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="img-box">
                        <img src="<?= base_url(); ?>assets/img/mkt_plan/1.JPG" alt="" class="market-plan-img">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="img-box">
                        <img src="<?= base_url(); ?>assets/img/mkt_plan/2.JPG" alt="" class="market-plan-img">
                    </div>
                </div>

                <!-- <div class="col-lg-4">
                    <div class="img-box">
                        <img src="<?= base_url(); ?>assets/img/mkt_plan/3.JPG" alt="" class="market-plan-img">
                    </div>
                </div> -->


                <div class="col-lg-4">
                    <div class="img-box">
                        <img src="<?= base_url(); ?>assets/img/mkt_plan/4.JPG" alt="" class="market-plan-img">
                    </div>
                </div>


                <!-- <div class="col-lg-4">
                    <div class="img-box">
                        <img src="<?= base_url(); ?>assets/img/mkt_plan/5.JPG" alt="" class="market-plan-img">
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</div>


<?php $this->load->view('templates/footer'); ?>