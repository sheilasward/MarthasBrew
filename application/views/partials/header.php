<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Martha's Brew</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/prettify.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/superfish.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/apps-reset.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/default-theme.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/blog.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/css/PagedList.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Rochester&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/site.css" rel="stylesheet" />
    <style>
        .navbar-brand {
            color: #fa6862;
            padding: 5px 5px;
            font-size: 36px;
            line-height: 35px;
            font-weight:500;
            margin: 5px 30px;
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
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="fa fa-bars"></span>
                            </button>
                            <h3 class="navbar-brand" style="font-family: 'Rochester', cursive;">Martha's <br />Brew Shop</h3>
                        </div>
                        <?php $msg = ""; ?>
                        <div class="navbar-collapse collapse ddsmoothmenu">
                            <ul class="nav navbar-nav top-nav sf-menu">
                                <li><a href="<?php echo base_url(); ?>index.php">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/about">About</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/items">Menu</a></li>
                                
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/register">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container body-content">