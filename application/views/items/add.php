  
    <div class="container">
        <h2><?= $title; ?></h2>  
        <hr />
        <?php echo validation_errors(); ?>
        <div class="row">
            <div class="col-md-8">
                <section id="addNewItemForm">
                    
                    <?php echo form_open_multipart('index.php/items/add'); ?>
                        <div class="form-group">
                            <label>Name of Item</label>
                            <input class="form-control" type="text" name="title" placeholder="Name of Item">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description" placeholder="Description of Item">
                        </div>
                        <div class="form-group">
                            <label>Ingredients</label>
                            <input class="form-control" type="text" name="ingredients" placeholder="Ingredients">
                        </div>
                        <div class="form-group">
                            <label>Price (small)</label>
                            <input class="form-control" type="text" name="price-small" placeholder="Price of small item">
                        </div>
                        <div class="form-group">
                            <label>Price (medium)</label>
                            <input class="form-control" type="text" name="price-medium" placeholder="Price of medium item">
                        </div>
                        <div class="form-group">
                            <label>Price (large)</label>
                            <input class="form-control" type="text" name="price-large" placeholder="Price of large item">
                        </div>
                        <div class="form-group">
                            <label>Item Type</label>
                            <select class="form-control" type="text" name="type">
                                <option value="hot">Hot</option>
                                <option value="cold">Cold</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Picture of Item</label>
                            <input type="file" name="userfile" size="20" />
                        </div>
             
                        <div class="form-group">
                            <input class="btn btn-share" type="submit" name="submit" value="Add Item"
                                   style="background:#fa6862;margin-top:10px;padding:10px 10px 6px;
                                          color:#fff;text-transform:uppercase;"> 
                        </div>
                    </form>
                </section>
                
            </div>
            
        </div>
    </div>