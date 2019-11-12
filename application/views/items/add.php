<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
        <h2>New Menu Item</h2>
        <hr />
        <div class="row">
            <div class="col-md-8">
                <section id="addNewItemForm">
                    <form method="post" action="<?php echo site_url('items/add/verify')?>">
                        <dl class="dl-horizontal">
                            <div class="form-group">
                                <dt>
                                    Name of Item: 
                                </dt>

                                <dd>
                                    <input class="form-control" type="text" required name="title">
                                </dd>
                            </div>

                            <div class="form-group">
                                <dt>
                                    Description: 
                                </dt>

                                <dd>
                                    <input class="form-control" type="text" required name="description">
                                </dd>
                            </div>

                            <div class="form-group">
                                <dt>
                                    Ingredients: 
                                </dt>

                                <dd>
                                    <input class="form-control" type="text" required name="ingredients">
                                </dd>
                            </div>

                            <div class="form-group">
                                <dt>
                                    Price (small): 
                                </dt>

                                <dd>
                                    <input class="form-control" type="text" required name="price-small">
                                </dd>
                            </div>

                            <div class="form-group">
                                <dt>
                                    Price (medium): 
                                </dt>

                                <dd>
                                    <input class="form-control" type="text" required name="price-medium">
                                </dd>
                            </div>

                            <div class="form-group">
                                <dt>
                                    Price (large): 
                                </dt>

                                <dd>
                                    <input class="form-control" type="text" required name="price-large">
                                </dd>
                            </div>

                            <div class="form-group">
                                <dt>
                                    Item Type: 
                                </dt>

                                <dd>
                                <select class="form-control" type="text" required name="type">
                                    <option value="hot">Hot</option>
                                    <option value="cold">Cold</option>
                                </select>
                                </dd>
                            </div>

                            <div class="form-group">
                                <dt>
                                    Picture: 
                                </dt>

                                <dd>
                                    <input type="file" name="ItemPicture" />
                                </dd>
                            </div>
                        </dl>
                        
                                              
                        
                        
                        <div class="form-group col-md-10">
                            <input class="btn btn-share" type="submit" name="submit" value="Add Item"
                                   style="background:#fa6862;margin-top:10px;padding:10px 10px 6px;
                                          color:#fff;text-transform:uppercase;"> 
                        </div>
                    </form>
                </section>
                
            </div>
            
        </div>
    </div>
</body>
</html>
    
