  
    <div class="container">
        <h2><?= $title; ?></h2>  
        <hr />
        <?php echo validation_errors(); ?>
        <div class="row">
            <div class="col-md-8">
                <section id="editItemForm">
                    
                    <?php echo form_open_multipart('index.php/items/update'); ?>
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                        <div class="form-group">
                            <label>Name of Item</label>
                            <input class="form-control" type="text" name="title" placeholder="Name of Item" value="<?php echo $item['title']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description" placeholder="Description of Item" value="<?php echo $item['description']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Ingredients</label>
                            <input class="form-control" type="text" name="ingredients" placeholder="Ingredients" value="<?php echo $item['ingredients']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Price (small)</label>
                            <input class="form-control" type="text" name="price-small" placeholder="Price of small item" value="<?php echo $item['price-small']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Price (medium)</label>
                            <input class="form-control" type="text" name="price-medium" placeholder="Price of medium item" value="<?php echo $item['price-medium']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Price (large)</label>
                            <input class="form-control" type="text" name="price-large" placeholder="Price of large item" value="<?php echo $item['price-large']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Item Type</label>
                            <select class="form-control" type="text" name="type">
                                <?php if ($item['type'] == 'cold') { ?>
                                    <option value="hot">Hot</option>
                                    <option value="cold" selected>Cold</option>

                                <?php } else { ?>
                                    <option value="hot" selected>Hot</option>
                                    <option value="cold">Cold</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            
                            <?php if ($item['image-url'] == NULL) { ?>
                                <label>Picture File:  Not Available</label>

                            <?php } else { 
                                $old_image_url = $item['image-url'] ?>
                                <label>Picture File:  <?php echo $item['image-url']; ?> </label>
                            <?php } ?><br>
                            <label>To change or add a picture</label>
                            <input type="file" name="userfile" size="20" />
                        </div>
             
                        <div class="form-group">
                            <input class="btn btn-share" type="submit" name="submit" value="Submit"
                                   style="background:#fa6862;margin-top:10px;padding:10px 10px 6px;
                                          color:#fff;text-transform:uppercase;"> 
                        </div>
                    </form>
                </section>
                
            </div>
            
        </div>
    </div>