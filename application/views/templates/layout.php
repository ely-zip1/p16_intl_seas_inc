<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body onload="set_interval()" onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()"
    onscroll="reset_interval()" class="layout-2">
    <div class="body-background"></div>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="<?php echo base_url(); ?>" class="navbar-brand sidebar-gone-hide">
                    <img src="<?= base_url(); ?>assets/img/Imperial_Oil_white.svg" alt="logo" width="100px"
                        class="header-logo">
                </a>
                <a href="#" class="nav-link sidebar-gone-show hamburger-menu" data-toggle="sidebar">
                    <i class="fas fa-bars"></i>
                </a>

                <form class="form-inline ml-auto">

                </form>

                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img src="https://img.icons8.com/cotton/64/000000/user-male-circle.png" />
                            <div class="d-sm-none d-lg-inline-block"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                            <a href="<?php echo base_url(); ?>dashboard" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Dashboard
                            </a>
                            <a href="<?php echo base_url(); ?>account_settings" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url() ?>logout" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>