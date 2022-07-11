<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/header');
?>
<div class="main-content account_settings">
    <section class="section">
        <!-- <div class="section-header section-header-custom">
            <h1>Account Settings</h1>
        </div> -->
        <div class="section-body">


            <div class="section-header">
                <h1>ACCOUNT SETTINGS</h1>
            </div>

            <!-- <div class="row">
                <div class="alert alert-dark alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        Update your <?= $this->session->flashdata('update_field') ?>account.
                    </div>
                </div>
            </div> -->


            <div class="row row-accounts">


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Email</h4>
                            <div class="form-group">
                                <label for="email">Email Address
                                </label>
                                <input type="text" class="form-control form-control-sm" value="<?= $email; ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Reset Password</h4>
                            <div>
                                <div class="alert alert-success alert-dismissible" <?php if (!isset($password_update_success)) {
                                                                                        echo 'style="display: none;"';
                                                                                    } ?>>
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                            <span>×</span>
                                        </button>
                                        Password has been updated.
                                    </div>
                                </div>
                                <?php echo form_open('account_settings'); ?>
                                <!-- <form action="/action_page.php" method="get"> -->
                                <div class="form-group">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password" name="new_password"
                                        class="form-control form-control-sm <?php if (strlen(form_error('new_password')) > 0) {
                                                                                                                        echo "is-invalid";
                                                                                                                    } ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('new_password'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_new_password" class="form-label">Confirm New Password</label>
                                    <input type="password" name="confirm_new_password" value=""
                                        class="form-control form-control-sm <?php if (strlen(form_error('confirm_new_password')) > 0) {
                                                                                                                                        echo "is-invalid";
                                                                                                                                    } ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('confirm_new_password'); ?>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary  acc_settings_submit"
                                        name="account_submit" value="reset_password" tabindex="4">
                                        Update Password
                                    </button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <?php echo form_open('account_settings'); ?>

                    <div class="card">
                        <div class="card-body">
                            <h4>Bank Account</h4>
                            <div class="form-group">
                                <label for="bank_name">Bank Name
                                </label>
                                <input id="bank_name" type="text" value="<?php if (set_value('bank_name', '', true) == null) {
                                                                                echo $bank_name;
                                                                            } else {
                                                                                echo set_value('bank_name', '', true);
                                                                            } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('bank_name')) > 0) {
                                                                                                                            echo "is-invalid";
                                                                                                                        } ?>" name="bank_name" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('bank_name'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bank_account_name">Account Name
                                </label>
                                <input id="bank_account_name" type="text" value="<?php if (set_value('bank_account_name', '', true) == null) {
                                                                                        echo $bank_account_name;
                                                                                    } else {
                                                                                        echo set_value('bank_account_name', '', true);
                                                                                    } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('bank_account_name')) > 0) {
                                                                                                                                    echo "is-invalid";
                                                                                                                                } ?>" name="bank_account_name" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('bank_account_name'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bank_account_number">Account Number
                                </label>
                                <input id="bank_account_number" type="text" value="<?php if (set_value('bank_account_number', '', true) == null) {
                                                                                        echo $bank_account_number;
                                                                                    } else {
                                                                                        echo set_value('bank_account_number', '', true);
                                                                                    } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('bank_account_number')) > 0) {
                                                                                                                                    echo "is-invalid";
                                                                                                                                } ?>" name="bank_account_number" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('bank_account_number'); ?>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="bank_swift_code">Swift Code
                                </label>
                                <input id="bank_swift_code" type="text"
                                    value="<?php if (set_value('bank_swift_code', '', true) == null) {
                                                echo $bank_swift_code;
                                            } else {
                                                echo set_value('bank_swift_code', '', true);
                                            } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('bank_swift_code')) > 0) {
                                                                            echo "is-invalid";
                                                                        } ?>"
                                    name="bank_swift_code" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('bank_swift_code'); ?>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="bank_code">Bank Code
                                </label>
                                <input id="bank_code" type="text" value="<?php if (set_value('bank_code', '', true) == null) {
                                                                                echo $bank_code;
                                                                            } else {
                                                                                echo set_value('bank_code', '', true);
                                                                            } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('bank_code')) > 0) {
                                                                                                                            echo "is-invalid";
                                                                                                                        } ?>" name="bank_code" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('bank_code'); ?>
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  acc_settings_submit"
                                        name="account_submit" value="bank" tabindex="4">
                                        Update Bank
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Bitcoin</h4>
                            <div class="form-group">
                                <label for="bitcoin_account">Bitcoin Account
                                </label>
                                <input id="bitcoin_account" type="text" value="<?php if (set_value('bitcoin_account', '', true) == null) {
                                                                                    echo $bitcoin_account;
                                                                                } else {
                                                                                    echo set_value('bitcoin_account', '', true);
                                                                                } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('bitcoin_account')) > 0) {
                                                                                                                                echo "is-invalid";
                                                                                                                            } ?>" name="bitcoin_account" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('bitcoin_account'); ?>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  acc_settings_submit"
                                        name="account_submit" value="bitcoin" tabindex="4">
                                        Update BTC
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Ethereum</h4>
                            <div class="form-group">
                                <label for="ethereum_account">Ethereum Account
                                </label>
                                <input id="ethereum_account" type="text" value="<?php if (set_value('ethereum_account', '', true) == null) {
                                                                                    echo $ethereum_account;
                                                                                } else {
                                                                                    echo set_value('ethereum_account', '', true);
                                                                                } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('ethereum_account')) > 0) {
                                                                                                                                echo "is-invalid";
                                                                                                                            } ?>" name="ethereum_account" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('ethereum_account'); ?>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  acc_settings_submit"
                                        name="account_submit" value="ethereum" tabindex="4">
                                        Update ETH
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Ripple (XRP)</h4>
                            <div class="form-group">
                                <label for="ripple_account">XRP Account
                                </label>
                                <input id="ripple_account" type="text" value="<?php if (set_value('ripple_account', '', true) == null) {
                                                                                    echo $ripple_account;
                                                                                } else {
                                                                                    echo set_value('ripple_account', '', true);
                                                                                } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('ripple_account')) > 0) {
                                                                                                                                echo "is-invalid";
                                                                                                                            } ?>" name="ripple_account" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('ripple_account'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ripple_tag">XRP Tag
                                </label>
                                <input id="ripple_tag" type="text" value="<?php if (set_value('ripple_tag', '', true) == null) {
                                                                                echo $ripple_tag;
                                                                            } else {
                                                                                echo set_value('ripple_tag', '', true);
                                                                            } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('ripple_tag')) > 0) {
                                                                                                                            echo "is-invalid";
                                                                                                                        } ?>" name="ripple_tag" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('ripple_tag'); ?>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  acc_settings_submit"
                                        name="account_submit" value="ripple" tabindex="4">
                                        Update XRP
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Tron (TRX)</h4>
                            <div class="form-group">
                                <label for="tron_account">Tron Account
                                </label>
                                <input id="tron_account" type="text" value="<?php if (set_value('tron_account', '', true) == null) {
                                                                                echo $tron_account;
                                                                            } else {
                                                                                echo set_value('tron_account', '', true);
                                                                            } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('tron_account')) > 0) {
                                                                                                                            echo "is-invalid";
                                                                                                                        } ?>" name="tron_account" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tron_account'); ?>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  acc_settings_submit"
                                        name="account_submit" value="tron" tabindex="4">
                                        Update TRX
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Doge Coin</h4>
                            <div class="form-group">
                                <label for="dog_account">Doge Account
                                </label>
                                <input id="dog_account" type="text" value="<?php if (set_value('dog_account', '', true) == null) {
                                                                                echo $dog_account;
                                                                            } else {
                                                                                echo set_value('dog_account', '', true);
                                                                            } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('dog_account')) > 0) {
                                                                                                                            echo "is-invalid";
                                                                                                                        } ?>" name="dog_account" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('dog_account'); ?>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  acc_settings_submit"
                                        name="account_submit" value="dog" tabindex="4">
                                        Update Doge
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Litecoin</h4>
                            <div class="form-group">
                                <label for="litecoin_account">LTC Account
                                </label>
                                <input id="litecoin_account" type="text" value="<?php if (set_value('litecoin_account', '', true) == null) {
                                                                                    echo $litecoin_account;
                                                                                } else {
                                                                                    echo set_value('litecoin_account', '', true);
                                                                                } ?>"
                                    class="form-control form-control-sm <?php if (strlen(form_error('litecoin_account')) > 0) {
                                                                                                                                echo "is-invalid";
                                                                                                                            } ?>" name="litecoin_account" autofocus />
                                <div class="invalid-feedback">
                                    <?php echo form_error('litecoin_account'); ?>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  acc_settings_submit"
                                        name="account_submit" value="ltc" tabindex="4">
                                        Update LTC
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>

            </div>

        </div>
    </section>
</div>

<?php $this->load->view('templates/footer'); ?>