<div class="container">
    <h2><?= $title; ?></h2>  
    <hr />
    <?php echo validation_errors(); ?>
    <div class="row">
        <div class="col-md-8">
            <section id="registerForm">
                
                <?php echo form_open('index.php/users/register'); ?>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label>Zipcode</label>
                        <input class="form-control" type="text" name="zipcode" placeholder="Zipcode">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-share" type="submit" name="submit" value="Register"
                                style="background:#fa6862;margin-top:10px;padding:10px 10px 6px;
                                        color:#fff;text-transform:uppercase;"> 
                    </div>

                    <?php echo form_close(); ?>
                    <a href="<?php echo base_url(); ?>index.php" class="col-md-9">Back to Home Page</a>
                </section>
                
            </div>
            
        </div>
    </div>
</body>
</html>
    
