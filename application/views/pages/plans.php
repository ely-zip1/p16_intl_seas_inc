<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/header');
?>
<!-- Main Content -->
<div class="main-content">

    <section class="section">
        <!-- <div class="section-header">
            <h1>Account Details</h1>
        </div> -->

        <div class="section-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header">
                        <h1>CHOOSE A PLAN</h1>
                    </div>
                </div>
            </div>
            <?php if (isset($is_verified)) {
                if ($is_verified == false) { ?>

            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="alert alert-warning" role="alert">
                        Please <a href="<?= base_url(); ?>verification" class="alert-link">verify your account</a>
                        before
                        making any transactions.
                    </div>
                </div>
            </div>

            <?php }
            } ?>

            <div class="row row-plans ">

                <!-- ================================================================================= -->


                <div class="col-lg-3">
                    <div class="plan-box plan-box-1">
                        <a id="package-1">
                            <img src="<?= base_url(); ?>assets/img/packages/1.JPG" alt="">
                        </a>
                        <!-- <button class="purchase-button" id="package-1">ACTIVATE NOW</button> -->
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="plan-box plan-box-2">
                        <a id="package-2">
                            <img src="<?= base_url(); ?>assets/img/packages/2.JPG" alt="">
                        </a>
                        <!-- <button class="purchase-button" id="package-2">ACTIVATE NOW</button> -->
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="plan-box plan-box-3">
                        <a id="package-3">
                            <img src="<?= base_url(); ?>assets/img/packages/3.JPG" alt="">
                        </a>
                        <!-- <button class="purchase-button" id="package-3">ACTIVATE NOW</button> -->
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="plan-box plan-box-4">
                        <a id="package-4">
                            <img src="<?= base_url(); ?>assets/img/packages/4.JPG" alt="">
                        </a>
                        <!-- <button class="purchase-button" id="package-3">ACTIVATE NOW</button> -->
                    </div>
                </div>

                <!-- ================================================================================= -->
            </div>
            <!-- <div class="row row-deposit" id="row_deposit"> -->
            <div class="row row-deposit" id="row_deposit">

                <div class="col-md-12">
                    <?php echo form_open('plans'); ?>
                    <div class="row">

                        <div class="col-sm-8 d-flex justify-content-center text-center">
                            <div class="chosen-plan-panel" id="default">
                                <!-- <h1>Please choose a Plan.</h1> -->
                                <!-- <span class="chosen-plan">NO PLAN SELECTED</span> -->
                                <!-- <p>$100 - $999</p> -->
                            </div>
                            <div class="chosen-plan-panel" id="plan-1" hidden>
                                <p class="you-selected">You Selected:</p>
                                <span class="chosen-plan">HANDYMAX PLAN</span>
                                <p class="chosen-plan-amount">$90</p>
                            </div>

                            <div class="chosen-plan-panel" id="plan-2" hidden>
                                <p class="you-selected">You Selected:</p>
                                <span class="chosen-plan">SUPRAMAX PLAN</span>
                                <p class="chosen-plan-amount">$900</p>
                            </div>

                            <div class="chosen-plan-panel" id="plan-3" hidden>
                                <p class="you-selected">You Selected:</p>
                                <span class="chosen-plan">AFRAMAX PLAN</span>
                                <p class="chosen-plan-amount">$9,000</p>
                            </div>

                            <div class="chosen-plan-panel" id="plan-4" hidden>
                                <p class="you-selected">You Selected:</p>
                                <span class="chosen-plan">SUEZMAX PLAN</span>
                                <p class="chosen-plan-amount">$90,000</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-row">
                                <!-- <div class="form-group col-md-4 deposit-form"> -->
                                <div class="form-group col-md-4 deposit-form" style="display:none;">
                                    <label for="chosen_plan" class="text-white">Choose Package</label>
                                    <select class="form-control" name="chosen_plan" id="dropdown_plan"
                                        style="border-radius:20px;">
                                        <option <?php if ($selected_plan == 'plan1') {
                                                    echo 'selected';
                                                } ?> value="plan1"><?php echo $plan1; ?></option>
                                        <option <?php if ($selected_plan == 'plan2') {
                                                    echo 'selected';
                                                } ?> value="plan2"><?php echo $plan2; ?></option>
                                        <option <?php if ($selected_plan == 'plan3') {
                                                    echo 'selected';
                                                } ?> value="plan3"><?php echo $plan3; ?></option>
                                        <option <?php if ($selected_plan == 'plan4') {
                                                    echo 'selected';
                                                } ?> value="plan4"><?php echo $plan4; ?></option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('chosen_plan'); ?>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 deposit-form">
                                    <label for="plan_option" class="text-white">Mode of Payment</label>
                                    <select class="form-control" name="plan_payment_mode"
                                        <?php if (!$is_verified) echo 'disabled'; ?>>

                                        <option <?php if ($selected_mode == 'mode17') {
                                                    echo 'selected';
                                                } ?> value="mode17">Activation Fund</option>

                                        <option <?php if ($selected_mode == 'mode7') {
                                                    echo 'selected';
                                                } ?> value="mode7">Account Balance</option>

                                        <option <?php if ($selected_mode == 'mode1') {
                                                    echo 'selected';
                                                } ?> value="mode1">Bitcoin</option>

                                        <option <?php if ($selected_mode == 'mode2') {
                                                    echo 'selected';
                                                } ?> value="mode2">Ethereum</option>

                                        <option <?php if ($selected_mode == 'mode8') {
                                                    echo 'selected';
                                                } ?> value="mode8">XRP</option>

                                        <option <?php if ($selected_mode == 'mode9') {
                                                    echo 'selected';
                                                } ?> value="mode9">TRX</option>

                                        <option <?php if ($selected_mode == 'mode10') {
                                                    echo 'selected';
                                                } ?> value="mode10">Litecoin</option>

                                        <option <?php if ($selected_mode == 'mode11') {
                                                            echo 'selected';
                                                        } ?> value="mode11">Doge Coin</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('plan_payment_mode'); ?>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 deposit-form">
                                    <label for="deposit_amount" class="text-white">Amount ($)</label>
                                    <div class="input-group">
                                        <input type="text" class="deposit-amount form-control 
                                            <?php if (strlen(form_error('deposit_amount')) > 0) {
                                                echo "is-invalid";
                                            } ?>" name="deposit_amount" id="deposit-amount"
                                            value="<?php if (isset($deposit_amount)) echo $deposit_amount; ?>"
                                            placeholder="$ 0.00" <?php if (!$is_verified) echo 'disabled'; ?>>
                                        <div class="invalid-feedback deposit-error">
                                            <?php echo form_error('deposit_amount'); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="submit-deposit btn btn-block" name="deposit-submit-button"
                                id="btnSubmit" <?php if (!$is_verified) echo 'disabled'; ?>>
                                BUY NOW
                            </button>
                            <?php echo form_close(); ?>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">

                </div>
            </div>
    </section>
</div>
<?php $this->load->view('templates/footer'); ?>