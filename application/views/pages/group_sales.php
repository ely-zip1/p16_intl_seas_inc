<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('templates/header');
?>

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="section-header section-header-custom">
                <h1>MONTHLY BONUS</h1>
            </div>

            <div class="row">
                <div class="col-lg-12 monthly-bonus-image">
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="total-bonus-title">Total Bonus</span>
                                    <h1 class="total-bonus-value"><sup>$</sup><?=$total_bonus;?></h1>
                                </div>
                                <div class="col-md-6">
                                    <?php if(isset($total_bonus)){
                                        if($total_bonus > 0){ ?>

                                    <img src="<?= base_url();?>assets/img/total_bonus_artwork.svg" alt="" width="300px"
                                        class="total-bonus-artwork float-right">

                                    <?php }else{ ?>

                                    <img src="<?= base_url();?>assets/img/no_bonus_artwork.svg" alt="" width="300px"
                                        class="total-bonus-artwork float-right">

                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="card card-group-bonus">
                        <div class="card-body">
                            <h3 class="card-title">Bonus History</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Month</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($bonus_history)){
                                        foreach($bonus_history as $bonus){ ?>

                                    <tr>
                                        <td><?=$bonus['month_name'];?></td>
                                        <td><strong>$<?=$bonus['amount'];?></strong></td>
                                    </tr>

                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
</div>



<?php $this->load->view('templates/footer'); ?>