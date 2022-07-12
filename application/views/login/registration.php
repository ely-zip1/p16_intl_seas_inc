<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $title; ?> &mdash; International Seaways, Inc.</title>

    <!-- favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/gif">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/ionicons/css/ionicons.min.css">



    <?php
    if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") {
    ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <?php
    } ?>


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login_reg.css">

</head>

<body class="body-login">
    <video autoplay muted loop class="homeVideoBackground">
        <source src="<?= base_url('assets/img/corporate_profile.webm') ?>" type="video/mp4">
    </video>

    <section class="login_section">
        <div class="login_form">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card registration_card">
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="login-brand">
                                    <a href="<?= base_url(); ?>">
                                        <img src="<?= base_url(); ?>assets/img/isi-logo.svg" alt="logo" width="200px">
                                    </a>
                                    <br>
                                    <span class="login-brand-group">Registration</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body login_card_body">
                            <!-- <div class="row">
                                <div class="col-12 text-center">
                                    <h3 class="reg-title">SIGN UP</h3>

                                </div>
                            </div> -->


                            <?php echo form_open('registration'); ?>

                            <div class="form-group">
                                <label for="username" class="log_reg_label">Username:
                                </label>
                                <input id="reg-username logreg_input" type="text"
                                    value="<?= set_value('username', '', true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('username')) > 0) {
                                                                                                                                                                        echo "is-invalid";
                                                                                                                                                                    } ?>"
                                    name="username" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('username'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fullname" class="log_reg_label">Full Name: <small class="text-muted">(First
                                        name,
                                        Middle initial, Last name)</small>
                                </label>
                                <input id="fullname logreg_input" type="text"
                                    value="<?= set_value('fullname', '', true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('fullname')) > 0) {
                                                                                                                                                                    echo "is-invalid";
                                                                                                                                                                } ?>"
                                    name="fullname" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('fullname'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="log_reg_label">Password:
                                </label>
                                <input id="reg-password logreg_input" type="password"
                                    class="form-control login_input <?php if (strlen(form_error('password')) > 0) {
                                                                                                                            echo "is-invalid";
                                                                                                                        } ?>" name="password" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" class="log_reg_label">Confirm Password:
                                </label>
                                <input id="confirm_password logreg_input" type="password"
                                    value="<?= set_value('confirm_password', '', true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('confirm_password')) > 0) {
                                                                                                                                                                                        echo "is-invalid";
                                                                                                                                                                                    } ?>"
                                    name="confirm_password" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('confirm_password'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="log_reg_label">Email:
                                </label>
                                <input id="email logreg_input" type="text" value="<?= set_value('email', '', true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('email')) > 0) {
                                                                                                                                                            echo "is-invalid";
                                                                                                                                                        } ?>"
                                    name="email" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm_email" class="log_reg_label">Confirm Email:
                                </label>
                                <input id="confirm_email logreg_input" type="text"
                                    class="form-control login_input <?php if (strlen(form_error('confirm_email')) > 0) {
                                                                                                                        echo "is-invalid";
                                                                                                                    } ?>" name="confirm_email" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('confirm_email'); ?>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="beneficiary" class="log_reg_label">Beneficiary (Full Name):
                                </label>
                                <input id="beneficiary logreg_input" type="text"
                                    class="form-control login_input <?php if (strlen(form_error('beneficiary')) > 0) {
                                                                                                                        echo "is-invalid";
                                                                                                                    } ?>" name="beneficiary" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('beneficiary'); ?>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="referral" class="log_reg_label">Referral code:
                                </label>
                                <input id="referral logreg_input" type="text"
                                    value="<?= set_value('referral', $referral_code, true) ?>"
                                    class="form-control login_input <?php if (strlen(form_error('referral')) > 0) {
                                                                                                                                                                                echo "is-invalid";
                                                                                                                                                                            } ?>"
                                    name="referral" autofocus required />
                                <div class="invalid-feedback">
                                    <?php echo form_error('referral'); ?>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-lg btn-block btn_login">Create
                                        Account</button>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <span class="login-link">
                                        Already a member?
                                        <a href="<?= base_url('login'); ?>">Login</a>
                                    </span>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <div class="section footer-section text-center">
        <div class="row">
            <div class="col-12">
                <span class="all-rights-reserved">© 2022 International Seaways, Inc. All Rights Reserved.
                </span>
            </div>
        </div>
    </div>
</body>

<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="<?php echo base_url(); ?>assets/js/countrypicker.js"></script>

</html>