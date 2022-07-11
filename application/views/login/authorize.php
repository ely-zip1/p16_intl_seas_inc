<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $title; ?> &mdash; Imperial Oil</title>

    <!-- favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/gif">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/ionicons/css/ionicons.min.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/backgroundTransition.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/particleStyle.css" />
    <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/backgroundTransition.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/particleBackground.js"></script>

    <!-- CSS Libraries -->
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

    <!-- Template CSS -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/chocolat/dist/css/chocolat.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login_reg.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style1.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.custom.86080.js"></script>
</head>

<body class="body-login" id="page">

    <div class="login-reg-bg"></div>

    <section class="login_section">
        <div class="login_form">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card login_card">


                        <div class="card-body login_card_body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="login-brand">
                                        <a href="<?= base_url(); ?>">
                                            <img src="<?= base_url(); ?>assets/img/Imperial_Oil.svg" alt="logo"
                                                width="200px">
                                        </a>
                                        <br>
                                        <span class="login-brand-group">Verify Login</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 text-center">
                                    <span class="">A verification code has been sent to your email.</span>
                                </div>
                            </div>

                            <?php
                            if ($this->session->flashdata('error') != null) { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        Invalid code.
                                    </div>
                                </div>
                            </div>

                            <?php
                            }
                            ?>

                            <!-- <form method="POST" action="#" class="needs-validation" novalidate=""> -->
                            <?php echo form_open('authorize'); ?>
                            <div class="form-group">
                                <label for="auth_code" class="log_reg_label">Code:</label>
                                <input id="auth_code logreg_input" type="text" class="form-control <?php if (strlen(form_error('auth_code')) > 0) {
                                                                                                        echo "is-invalid";
                                                                                                    } ?>"
                                    name="auth_code" tabindex="1" autofocus
                                    value="<?= set_value('auth_code', '', true) ?>" required>
                                <div class="invalid-feedback">
                                    <?php echo form_error('auth_code'); ?>
                                </div>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-lg btn-block btn_login" tabindex="4">
                                    Continue
                                </button>
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
                <span class="all-rights-reserved">© Copyright 2003-2022 Imperial Oil Limited. All Rights Reserved
                </span>
            </div>
        </div>
    </div>


</body>


<?php $this->load->view('dist/_partials/js'); ?>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="<?php echo base_url(); ?>assets/js/countrypicker.js"></script>

</html>