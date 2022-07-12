<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
            </div>


            <div class="col-lg-6">
                <div class="card card_forgot_password text-dark">

                    <div class="row brand_row">
                        <div class="col-12 text-center">
                            <div class="login-brand">
                                <a href="<?= base_url(); ?>">
                                    <img src="<?= base_url(); ?>assets/img/isi-logo.svg" alt="logo" width="200px">
                                </a>
                                <br>
                                <span class="login-brand-group">Password Reset</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- <div class="row">
                            <div class="col-12 text-center">
                                <h3 class="login-title">Forgot Password</h3> <br>
                            </div>
                        </div> -->

                        <?php if ($this->session->flashdata('reset_message') != null) {
                            echo '<div class="alert alert-info alert_reset_pass">';
                            echo $this->session->flashdata('reset_message');
                            echo '</div>';
                        } ?>
                        <?php echo form_open('Forgot_password'); ?>
                        <div class="form-group">
                            <label for="email" class="log_reg_label">Email</label>
                            <input id="email logreg_input" type="email" class="form-control <?php if (strlen(form_error('email')) > 0) {
                                                                                                echo "is-invalid";
                                                                                            } ?>" name="email"
                                tabindex="1" autofocus value="<?= set_value('email', '', true) ?>">
                            <div class="invalid-feedback">
                                <?php echo form_error('email'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-block btn_reset_password" tabindex="4">
                                Reset
                            </button>
                        </div>
                        </form>
                        <p class="login_link text-center">
                            <a href="<?= base_url(); ?>">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>