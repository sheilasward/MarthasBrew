<div class="container">
    <h2><?= $title; ?></h2>  
    <hr />
    <?php echo validation_errors(); ?>
    <div class="row">
        <div class="col-md-8">
            <section id="loginForm">

                <?php echo form_open('index.php/users/login'); ?>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-share" type="submit" name="submit" value="Login"
                                style="background:#fa6862;margin-top:10px;padding:10px 10px 6px;
                                        color:#fff;text-transform:uppercase;">
                    </div>
                <?php echo form_close(); ?>
            </section>
            <a href="<?php echo base_url(); ?>index.php">Back to Home Page</a>
        </div>
        
    </div>
</div>
