<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    <link href="<?php echo base_url(); ?>/assets/css/site.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h2>Log In</h2>

        <div class="row">
            <div class="col-md-8">
                <section id="loginForm">
                    <h4>Use a local account to log in.</h4>
                    <br />
                    <form method="post" action="<?php echo site_url('admin/login/verify')?>">
                        <div class="form-group col-md-10">
                            <input class="form-control" type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group col-md-10">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group col-md-10">
                            <input class="btn btn-share" type="submit" name="submit" value="Login"
                                   style="background:#fa6862;margin-top:10px;padding:10px 10px 6px;
                                          color:#fff;text-transform:uppercase;">
                        </div>
                    </form>
                </section>
                <a href="<?php echo base_url(); ?>index.php" class="col-md-10">Back to Home Page</a>
            </div>
            
        </div>
    </div>
</body>
</html>