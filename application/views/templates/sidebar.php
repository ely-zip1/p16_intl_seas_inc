<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand sidebar-gone-show">
            <a href="<?php echo base_url(); ?>">
                <!-- Imperial Oil -->
                <img src="<?= base_url(); ?>assets/img/Imperial_Oil.svg" alt="logo" width="100px"
                    class="mini-sidebar-brand">
            </a>
        </div>
        <ul class="sidebar-menu">
            <!-- <li class="menu-header">Dashboard</li> -->
            <!-- <li>
                <a class="nav-link sidebar-user">
                    <i class="fas fa-user-circle"></i>
                    <span>Hi, <?= $fullname; ?></span>
                </a>

            </li> -->
            <!-- <br> -->
            <li class="dropdown <?php echo $this->uri->segment(1) == 'dashboard' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>dashboard" class="nav-link">
                    <img src="https://img.icons8.com/color/48/000000/gas.png" />
                    <span>Dashboard</span>
                </a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'plans' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>plans" class="nav-link">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/initiate-money-transfer.png" />
                    <span>Deposit</span>
                </a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'withdraw' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>withdraw" class="nav-link">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/atm.png" />
                    <span>Withdraw</span>
                </a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'marketing_plan' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>marketing_plan" class="nav-link">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/blueprint.png" />
                    <span>Marketing Plan</span>
                </a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'your_referrals' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>your_referrals" class="nav-link">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/queue.png" />
                    <span>Referrals</span>
                </a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'fund_transfer' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>fund_transfer" class="nav-link">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/queue.png" />
                    <span>Money Transfer</span>
                </a>

            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'Advanced_withdrawal' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>Advanced_withdrawal" class="nav-link">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/historical.png" />
                    <span>Advance Withdrawal</span></a>

            </li>

            <li
                class="dropdown <?php echo $this->uri->segment(1) == 'your_deposits'  || $this->uri->segment(1) == 'your_withdrawals' ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/time-machine.png" />
                    <span>Transaction History</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="<?php echo $this->uri->segment(1) == 'your_deposits' ? 'active' : ''; ?>"><a
                            class="nav-link" href="<?php echo base_url(); ?>your_deposits">Deposit</a></li>
                    <li class="<?php echo $this->uri->segment(1) == 'your_withdrawals'  ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo base_url(); ?>your_withdrawals">Withdrawal</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown <?php echo $this->uri->segment(1) == 'contact_us' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>contact_us" class="nav-link">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/headset.png" />
                    <span>Help Center</span>
                </a>

            </li>

            <!-- <li class="dropdown <?php echo $this->uri->segment(1) == 'rewards' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>rewards" class="nav-link">
                    <img src="https://img.icons8.com/color/48/000000/ruby-gemstone.png" /><span>Redeemable
                        Items</span></a>

            </li> -->

            <li class="dropdown <?php echo $this->uri->segment(1) == 'about_us' ? 'active' : ''; ?>">
                <a href="https://www.imperialoil.ca/en-ca/company/about" class="nav-link">
                    <img src="https://img.icons8.com/ultraviolet/40/000000/information.png" />
                    <span>About Us</span>
                </a>

            </li>

        </ul>
    </aside>
</div>