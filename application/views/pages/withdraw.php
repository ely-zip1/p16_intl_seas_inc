<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/header');
?>
<div class="main-content">

    <section class="section">
        <!-- <div class="section-header section-header-custom">
            <h1>Make a Withdrawal</h1>
        </div> -->
        <div class="section-body">

            <div class="section-header section-header-custom">
                <h1>WITHDRAWAL</h1>
            </div>

            <div class="row">
                <div class="col-lg-6 offset-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-has-icon withdrawal_alert">
                                <div class="alert-icon"><i class="far fa-bell"></i></div>
                                <div class="alert-body">
                                    <div class="withdrawal_note">
                                        Requests are processed within <strong>24-36</strong> hours with
                                        <strong>5%</strong>
                                        processing fee. Minimum withdrawal is <strong>$20</strong>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="withdraw-box">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card_balance_summary">
                                            <div class="summary-one text-center">
                                                <h6>Withdrawable Amount</h6>
                                                <h3> <?php echo '$ ' . $account_balance; ?></h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="card_withdrawal">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <?php echo form_open('withdraw'); ?>
                                                    <div class="form-row">
                                                        <div class="form-group col-12 withdraw-form" hidden>
                                                            <label for="plan_option">Source of Fund</label>
                                                            <select class="form-control" name="withdrawal_source">
                                                                <option <?php if ($selected_source == 'account_balance') {
                                                                            echo 'selected';
                                                                        } ?> value="account_balance">Account Balance
                                                                </option>
                                                                <option <?php if ($selected_source == 'bonus') {
                                                                            echo 'selected';
                                                                        } ?> value="bonus">Lifestyle Rewards</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                <?php echo form_error('withdrawal_source'); ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-lg-12 withdraw-form">
                                                            <label for="plan_option">Mode</label>
                                                            <select class="form-control" name="plan_payment_mode">
                                                                <option <?php if ($selected_mode == 'mode1') {
                                                                            echo 'selected';
                                                                        } ?> value="mode1">Bank</option>
                                                                <option <?php if ($selected_mode == 'mode2') {
                                                                            echo 'selected';
                                                                        } ?> value="mode2">Bitcoin</option>
                                                                <option <?php if ($selected_mode == 'mode3') {
                                                                            echo 'selected';
                                                                        } ?> value="mode3">Ethereum</option>
                                                                <option <?php if ($selected_mode == 'mode4') {
                                                                            echo 'selected';
                                                                        } ?> value="mode4">Ripple (XRP)</option>
                                                                <option <?php if ($selected_mode == 'mode5') {
                                                                            echo 'selected';
                                                                        } ?> value="mode5">Tron (TRX)</option>
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

                                                        <div class="form-group col-12 withdraw-form">
                                                            <label for="withdraw_amount">Amount (USD)</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control 
                                                    <?php if (strlen(form_error('withdraw_amount')) > 0) {
                                                        echo "is-invalid";
                                                    } ?>" name="withdraw_amount" id="deposit-amount" autofocus
                                                                    placeholder="$ 0.00"
                                                                    value="<?php if (isset($withdraw_amount)) echo $withdraw_amount; ?>">
                                                                <div class="invalid-feedback deposit-error">
                                                                    <?php echo form_error('withdraw_amount'); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-12">
                                                            <label for="deposit_amount"
                                                                style="visibility: hidden;">Submit</label>
                                                            <button type="submit"
                                                                class="btn btn-block btn-lg withdraw_button"
                                                                name="deposit-submit-button">WITHDRAW</button>
                                                        </div>
                                                    </div>

                                                </div>

                                                <?php echo form_close(); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php $this->load->view('templates/footer'); ?>