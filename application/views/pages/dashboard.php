<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');
?>

<!-- Main Content -->
<div class="main-content">


    <section class="section">
        <div class="section-header">
            <h1>DASHBOARD</h1>
            <!-- <?= print_r($this->session->get_userdata()); ?> -->
        </div>

        <?php if (isset($is_verified)) {
            if ($is_verified == false) { ?>

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="alert alert-danger" role="alert">
                    Please <a href="<?= base_url(); ?>verification" class="alert-link">verify your account</a> before
                    making any transactions.
                </div>
            </div>
        </div>

        <?php }
        } ?>

        <div class="section-body">



            <!-- #region dashboard row 2 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="account-summary-box">
                        <div class="row account-summary-top">
                            <div class="col-md-4">
                                <img src="https://img.icons8.com/color/96/000000/bank-building.png" />
                            </div>
                            <div class="col-md-8">
                                <span class="summary-label">ACCOUNT BALANCE</span><br>
                                <span class="summary-value">
                                    $ <?php if (isset($account_balance)) echo $account_balance; ?>
                                </span>
                            </div>
                        </div>
                        <div class="row account-summary-bottom">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <a href="<?= base_url(); ?>withdraw">MAKE WITHDRAWAL</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="account-summary-box">
                        <div class="row account-summary-top">
                            <div class="col-md-4">
                                <img src="https://img.icons8.com/color/96/000000/money-transfer.png" />
                            </div>
                            <div class="col-md-8">
                                <span class="summary-label">ACTIVATION FUNDS</span><br>
                                <span class="summary-value">
                                    <?php if (isset($activation_fund)) echo $activation_fund; ?>
                                </span>
                            </div>
                        </div>
                        <div class="row account-summary-bottom">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <a href="<?= base_url(); ?>plans">MAKE DEPOSIT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #endregion -->

            <!-- #region dashboard row 3 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="account-summary-box">
                        <div class="row account-summary-top">
                            <div class="col-md-4">
                                <img src="https://img.icons8.com/color/96/000000/money-transfer.png" />
                            </div>
                            <div class="col-md-8">
                                <span class="summary-label">ACTIVE DEPOSIT</span><br>
                                <span class="summary-value">
                                    <?php if (isset($active_deposit)) echo $active_deposit; ?>
                                </span>
                            </div>
                        </div>
                        <div class="row account-summary-bottom justify-content-center">
                            <div class="col-md-10">
                                <div class="row d-flex justify-content-between">
                                    <span class="bottom-small-label">Last Deposit:</span>
                                    <span class="bottom-small-value">
                                        <?php if (isset($last_deposit)) echo $last_deposit; ?>
                                    </span>
                                </div>
                                <div class="row divider"></div>

                                <div class="row d-flex justify-content-between">
                                    <span class="bottom-small-label">Total Deposit:</span>
                                    <span class="bottom-small-value">
                                        <?php if (isset($total_deposit)) echo $total_deposit; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="account-summary-box">
                        <div class="row account-summary-top">
                            <div class="col-md-4">
                                <img src="https://img.icons8.com/color/96/000000/atm.png" />
                            </div>
                            <div class="col-md-8">
                                <span class="summary-label">TOTAL WITHDRAWAL</span><br>
                                <span class="summary-value">
                                    <?php if (isset($total_withdrawals)) echo $total_withdrawals; ?>
                                </span>
                            </div>
                        </div>
                        <div class="row account-summary-bottom justify-content-center">
                            <div class="col-md-10">
                                <div class="row d-flex justify-content-between">
                                    <span class="bottom-small-label">Last Withdrawal:</span>
                                    <span class="bottom-small-value">
                                        <?php if (isset($last_withdrawal)) echo $last_withdrawal; ?>
                                    </span>
                                </div>
                                <div class="row divider"></div>

                                <div class="row d-flex justify-content-between">
                                    <span class="bottom-small-label">Pending Withdrawal:</span>
                                    <span class="bottom-small-value">
                                        <?php if (isset($pending_withdrawals)) echo $pending_withdrawals; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #endregion -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-details d-flex justify-content-center text-center">
                        <div class="detail-cell">
                            <div class="">
                                <div class="img-container">
                                    <img src="https://img.icons8.com/bubbles/100/000000/test-account.png" />
                                </div>
                            </div>
                            <div class="col-sm-auto mt-2 user-info">
                                <span class="user-detail-label">Username:</span><br>
                                <span class="user-detail-value"><?= $this->session->username; ?></span>
                            </div>
                        </div>

                        <div class="detail-cell">
                            <div class="">
                                <div class="img-container">
                                    <img src="https://img.icons8.com/bubbles/100/000000/calendar.png" />
                                </div>
                            </div>
                            <div class="col-sm-auto mt-2 user-info">
                                <span class="user-detail-label">Registration Date:</span><br>
                                <span
                                    class="user-detail-value"><?= date('M-j-Y', strtotime($this->session->date_registered)); ?></span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="affiliate-link-group">
                        <span>Your Referral Link:</span>
                        <a href="<?php echo base_url(); ?>my/ref/<?php echo $username; ?>" class="affiliate-link"
                            id="affiliate-link">
                            <span><?php echo base_url() . "my/ref/" . $username; ?></span>
                        </a>
                        <button type="button" id="TextToCopy" class="copy-button" data-toggle="modal"
                            data-target=".modal-copy-success">
                            <i class="far fa-copy"></i>
                        </button>
                    </div>

                </div>
            </div>

        </div>

    </section>
</div>
<?php $this->load->view('templates/footer'); ?>