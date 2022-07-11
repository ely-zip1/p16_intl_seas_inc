<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');
?>
<div class="main-content">

    <section class="section">
        <div class="section-body">

            <div class="section-header section-header-custom">
                <h1>WITHDRAWAL HISTORY</h1>
            </div>

            <div class="row deposit-row">
                <div class="col-12">
                    <div class="card withdraw_history_table">
                        <!-- <div class="card-header">
                            <h4>History</h4>
                        </div> -->
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-sm table-dark">
                                <tbody>
                                    <tr>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Source</th>
                                        <th scope="col">Mode</th>
                                        <th scope="col">Request Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    <?php
									if(isset($withdrawal_history)){
									foreach ($withdrawal_history as $row){?>
                                    <tr>
                                        <td>$ <?php echo $row['amount']; ?></td>
                                        <td>$ <?php echo $row['source']; ?></td>
                                        <td><?php echo $row['mode']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                    </tr>
                                    <?php }}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </section>
</div>

<?php $this->load->view('templates/footer'); ?>