<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Martha's Brew</title>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/prettify.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/superfish.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/apps-reset.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/default-theme.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/blog.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/PagedList.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Rochester&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/site.css" rel="stylesheet" />
    
    <style>
        .navbar-brand {
            color: #fa6862;
            padding: 5px 5px;
            font-size: 36px;
            line-height: 35px;
            font-weight:500;
            margin: 5px 30px 5px 0px;
        }

        .tags ul li {
            border: 1px solid gray;
        }

        .hideIt {
            display: none;
        }

        .navigation.sticky-nav ul.nav>li>a {
            height: 60px;
        }
    </style>
</head>
<body class="blog-body">
    <div class="navigation clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar navbar-static-top">
                        <div class="navbar-header">
                        
                            <button type="button" class="navbar-toggle" style="background:white; color:black;" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="blue-text"><i class="fa fa-bars"></i></span>
                            </button>
                            <h3 class="navbar-brand" style="font-family: 'Rochester', cursive;">Martha's Brew Shop</h3>
                        </div>
                        <?php $msg = ""; ?>
                        <div class="navbar-collapse collapse ddsmoothmenu">
                            <ul class="nav navbar-nav top-nav sf-menu">
                                <li><a href="<?php echo base_url(); ?>index.php">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/about">About</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/items">Order</a></li>
                                
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <?php if(!$this->session->userdata('logged_in')) : ?>
                                    <li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/register">Register</a></li>
                                <?php endif; ?>
                                <?php if($this->session->userdata('logged_in')) : ?>
                                    <li><a href="<?php echo base_url(); ?>index.php/logout">Logout</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Flash messages -->
                        <?php if($this->session->flashdata('user_registered')): ?>
                            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('item_added')): ?>
                            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('item_added').'</p>'; ?>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('item_updated')): ?>
                            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('item_updated').'</p>'; ?>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('login_failed')): ?>
                            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
                        <?php endif; ?> 
                        <?php if($this->session->flashdata('user_logged_in')): ?>
                            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_logged_in').'</p>'; ?>
                        <?php endif; ?> 
                        <?php if($this->session->flashdata('user_logged_out')): ?>
                            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_logged_out').'</p>'; ?>
                        <?php endif; ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    