<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
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
                            <input class="btn btn-primary" type="submit" name="submit" value="Login"> 
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>
</html>