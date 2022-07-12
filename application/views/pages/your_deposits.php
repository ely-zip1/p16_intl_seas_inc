<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/header');
?>
<div class="main-content">

    <section class="section">
        <div class="section-body">

            <div class="section-header section-header-custom">
                <h1>DEPOSIT HISTORY</h1>
            </div>

            <!-- <div class="row deposit-row"> -->


            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="card card_pending_withdraw">
                        <div class="card-body ">
                            <img src="<?php echo base_url(); ?>assets/img/banking/125-piggy-bank-3.png" alt="">
                            <h4>TOTAL DEPOSIT:</h4>
                            <h1> <?php echo '$ ' . $total_details; ?></h1>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-12">
                    <div class="card bg-info text-dark card_total_deposit">
                        <div class="card-body">
                            <h4>Total Deposit: <?php echo $total_details; ?></h4>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row deposit-row">
                <div class="col-12">
                    <div class="card card_deposits_basic">
                        <div class="card-header">
                            <h4>HANDYMAX PLAN</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-striped table-sm table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Payment Mode</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Remaining days</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($plan1_deposit_data)) {
                                        foreach ($plan1_deposit_data as $row) { ?>
                                    <tr>
                                        <td>$ <?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['mode']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['days_remaining']; ?></td>
                                    </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row deposit-row">
                <div class="col-12">
                    <div class="card card_deposits_mega">
                        <div class="card-header">
                            <h4>SUPRAMAX PLAN</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-striped table-sm table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Payment Mode</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Remaining days</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($plan2_deposit_data)) {
                                        foreach ($plan2_deposit_data as $row) { ?>
                                    <tr>
                                        <td>$ <?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['mode']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['days_remaining']; ?></td>
                                    </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row deposit-row">
                <div class="col-12">
                    <div class="card card_deposits_vip">
                        <div class="card-header">
                            <h4>AFRAMAX PLAN</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-striped table-sm table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Payment Mode</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Remaining days</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($plan3_deposit_data)) {
                                        foreach ($plan3_deposit_data as $row) { ?>
                                    <tr>
                                        <td>$ <?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['mode']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['days_remaining']; ?></td>
                                    </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row deposit-row">
                <div class="col-12">
                    <div class="card card_deposits_vip">
                        <div class="card-header">
                            <h4>SUEZMAX PLAN</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-striped table-sm table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Payment Mode</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Remaining days</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($plan3_deposit_data)) {
                                        foreach ($plan3_deposit_data as $row) { ?>
                                    <tr>
                                        <td>$ <?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['mode']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['days_remaining']; ?></td>
                                    </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php $this->load->view('templates/footer'); ?>