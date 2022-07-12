<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/header');
?>

<div class="main-content">

    <section class="section">

        <div class="section-body">

            <div class="section-header section-header-custom">
                <h1>MONEY TRANSFER</h1>
            </div>

            <?php if ($this->session->flashdata('transfer_success') != null) {
                echo '<div class="alert alert-success alert-dismissible show fade">
	        <div class="alert-body">
	          <button class="close" data-dismiss="alert">
	            <span>×</span>
	          </button>
						' . $this->session->flashdata('transfer_success') . '
	        </div>
	      </div>';
            } ?>

            <div class="row totals-row">
                <div class="col-md-6">
                    <span class="total-title">Account Balance: </span>
                    <span class="total-value">$<?= $account_balance ?></span>
                </div>
                <div class="col-md-6">
                    <span class="total-title">Activation Fund: </span>
                    <span class="total-value">$<?= $activation_fund ?></span>
                </div>
            </div>
            <div class="row row_transfer_form">

                <div class="col-md-12">
                    <div class="card">
                        <div class="transfer-form">
                            <?php echo form_open('fund_transfer'); ?>
                            <div class="form-row">
                                <div class="form-group col-md-4 deposit-form">
                                    <label for="receiver_code" class="text-white">RECEPIENT <span
                                            class="text-muted">(Username of the
                                            receiver)</span></label>
                                    <div class="input-group mb-2">
                                        <!-- <div class="input-group-prepend">
                                    <div class="input-group-text">https://coralgold.org/my/ref/</div>
                                </div> -->
                                        <input name="receiver_code" type="text" class="form-control <?php if (strlen(form_error('receiver_code')) > 0) {
                                                                                                        echo "is-invalid";
                                                                                                    } ?>"
                                            id="inlineFormInputGroup" placeholder=""
                                            value="<?php set_value('receiver_code', '', true); ?>" required>
                                        <div class="invalid-feedback deposit-error">
                                            <?php echo form_error('receiver_code'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-4  deposit-form">
                                    <label for="transfer_amount" class="text-white">Amount <span
                                            class="text-muted">($)</span></label>
                                    <input type="number" class="deposit-amount form-control <?php if (strlen(form_error('transfer_amount')) > 0) {
                                                                                                echo "is-invalid";
                                                                                            } ?>"
                                        name="transfer_amount" id="deposit-amount" placeholder="$ 0.00"
                                        value="<?php set_value('transfer_amount', '', true); ?>" required>
                                    <div class="invalid-feedback deposit-error">
                                        <?php echo form_error('transfer_amount'); ?>
                                    </div>
                                </div>

                                <div class="form-group col-md-4  deposit-form">
                                    <label for="transfer_source" class="text-white">Source </label>
                                    <select name="transfer_source" class="form-control" required>
                                        <option value="e_money" selected>Account Balance</option>
                                        <option value="act_fund">Activation Fund</option>
                                    </select>
                                    <div class="invalid-feedback deposit-error">
                                        <?php echo form_error('transfer_source'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 offset-md-9">
                                    <button type="submit" class="btn btn-block btn-lg submit-transfer"
                                        name="deposit-submit-button">SEND</button>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row p2p_history">
                <div class="col-md-12">
                    <div class="card text-dark card_fund_sent">
                        <div class="card-header">
                            <h4>SENT FUNDS</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-dark">
                                <tbody>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Recipient</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Source</th>
                                    </tr>
                                    <?php
                                    if (isset($sent_fund_history)) {
                                        foreach ($sent_fund_history as $row) { ?>
                                    <tr>
                                        <td>$ <?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['recipient']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['source']; ?></td>
                                    </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card text-dark card_fund_received">
                        <div class="card-header">
                            <h4>RECEIVED FUNDS</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-dark">
                                <tbody>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Sender</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Source</th>
                                    </tr>
                                    <?php
                                    if (isset($received_fund_history)) {
                                        foreach ($received_fund_history as $row) { ?>
                                    <tr>
                                        <td>$ <?php echo $row['amount']; ?></td>
                                        <td><?php echo $row['sender']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['source']; ?></td>
                                    </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>



<?php $this->load->view('templates/footer'); ?>