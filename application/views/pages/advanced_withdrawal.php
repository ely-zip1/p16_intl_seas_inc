<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/header');
?>

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="section-header section-header-custom">
                <h1>ADVANCE WITHDRAWAL</h1>
            </div>
            <div class="content-area">
                <div class="row terms-row justify-content-center">
                    <div class="col-lg-6 term-text ">
                        <?php if (isset($is_received)) if ($is_received) { ?>

                        <div class="alert alert-success" role="alert">
                            <?= $this->session->flashdata('advanced_withdrawal_status'); ?>
                        </div>

                        <?php
                        } else { ?>

                        <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('advanced_withdrawal_status'); ?>
                        </div>

                        <?php
                        }
                        ?>
                        <!-- <p>Amico Members Advance Withdrawal is subject to terms and conditions applied</p> -->
                        <!-- <p>ESSO and SYNERGY plan holders are entitled for 40% ISI Advance Withdrawal and it is
                            appplicable within 48 hours from the purchase of the said packages. The advance withdrawal
                            payment will be deducted
                            from your daily Shares. The gross amount is subject to 10% processing fee.
                        </p> -->
                        <div class="alert alert-info alert-has-icon">
                            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
                            <div class="alert-body">
                                <div class="alert-title">Apply for Advance Withdrawal</div>
                                SUPRAMAX, AFRAMAX, and SUEZMAX plan holders are entitled for 40% ISI Advance Withdrawal
                                and it is
                                appplicable within 48 hours from the purchase of the said packages. The advance
                                withdrawal
                                payment will be deducted
                                from your daily Shares. The gross amount is subject to 10% processing fee.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row loan-form-row  justify-content-center">
                    <div class="col-lg-6 loan-form-column">
                        <?php if ($capital_count == 0) { ?>
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> You do not have investments qualified for
                            advanced
                            withdrawal.
                        </div>
                        <?php } ?>
                        <?php echo form_open('advanced_withdrawal'); ?>

                        <div class="form-group">
                            <label for="fullname">Client's Name</label>
                            <input type="text" class="form-control form-control-sm" required name="fullname"
                                value="<?= $fullname; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control form-control-sm" required name="username"
                                value="<?= $username; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="capital-invested">Capital Invested</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text capital-dollar-sign">$</span>
                                <select class="form-control form-select" id="inputGroupSelect01" required
                                    name="capital">
                                    <?php
                                    // print_r($investment_list);
                                    foreach ($investment_list as $investment) { ?>

                                    <option value="<?= $investment->id; ?>">
                                        <?= number_format($investment->amount, 2, '.', ','); ?></option>

                                    <?php    }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="amount">Amount Applied for
                                <small class="text-muted">(Max: 40% of the capital invested.)</small>
                            </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                </div>
                                <input type="number" class="form-control <?php if (strlen(form_error('amount')) > 0) {
                                                                                echo "is-invalid";
                                                                            } ?>" placeholder="0.00"
                                    aria-label="amount" required aria-describedby="basic-addon1" name="amount"
                                    autocomplete="off">
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('amount'); ?>
                            </div>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required
                                name="agree-checkbox">
                            <label class="form-check-label" for="exampleCheck1"><small>By ticking the box, you agree to
                                    the terms and conditions
                                    applied
                                    in the loan.</small></label>
                        </div>
                        <br>
                        <button type="submit" class="btn float-right adv-withdrawal-button">Submit</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>
</div>



<?php $this->load->view('templates/footer'); ?>