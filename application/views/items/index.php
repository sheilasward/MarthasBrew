<div class="container body-content">
    <div>&emsp;</div>
    <div class="row">
        <div class="section-title">
            <h1 class="section-heading">Beverages</h1>
            <div>&emsp;</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <section>
                <div class="tags filter-nav text-center">
                    <ul>
                        <li class="filter selected" data-category="hot">HOT COFFEES</li>
                        <li class="filter" data-category="cold">COLD COFFEES</li>
                    </ul>
                </div>
                <div class="clear">
                </div>
            </section>
        </div>
    </div>

    <div id="hotCoffees" class="row">
        <?php foreach($items as $item) : ?>
            <?php if ($item['type'] == 'hot') { ?>
                <?php $itemId = $item['id']; ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <?php if ($item['image-url'] == NULL) {
                            $item['image-url'] = 'coffeePic.jpg';
                        } ?>
                        <img src="<?php echo site_url(); ?>/assets/images/<?php echo $item['image-url']; ?>">
                        <div class="caption text-center">
                            <h3><?php echo $item['title']; ?></h3>
                            <h4><a href="<?php echo site_url('index.php/items/'.$item['id']); ?>">More Info</a></h4>

                            <?php echo form_open('index.php/orders/additem'.$item['id']); ?>
                                <!-- <h4><a href="#" data-toggle="modal" data-target="#customize">Customize Order</a></h4> -->
                            
                                <!-- <a href="<?php echo site_url('index.php/items/customize'.$item['id']); ?>">Customize Order</a></h4> -->
                                <br>

                                <div class="form-group col-md-8">
                                    <select class="form-control" type="text" name="price">
                                        <option value="<?php echo $item['price-small']; ?>">Small - $<?php echo $item['price-small']; ?></option>
                                        <option value="<?php echo $item['price-medium']; ?>">Medium - $<?php echo $item['price-medium']; ?></option>
                                        <option value="<?php echo $item['price-large']; ?>">Large - $<?php echo $item['price-large']; ?></option>
                                    </select>
                                </div>

                                <div class="form-group col-md-offset-1 col-md-3">
                                    <select class="form-control" type="int" name="numberitems">
                                        <option value=1>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                        <option value=3>4</option>
                                        <option value=3>5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <h4 class="customize">Special Instructions</h4>
                                        <textarea id="editor1" class="form-control" type="text" name="specialinstructions" placeholder="Describe your customization here..."></textarea>
                                    </span>
                                </div>

                                <a href="" class="btn btn-share" style="width: 150px;" role="button">Add To Cart</a>
                            </form>
                         </div>
                    </div>
                </div>
            <?php } ?>
        <?php endforeach; ?>
    </div>

    <div id="coldCoffees" class="row hideIt">
        <?php foreach($items as $item) : ?>
            <?php if ($item['type'] == 'cold') { ?>
                <?php $itemId = $item['id']; ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <?php if ($item['image-url'] == NULL) {
                        $item['image-url'] = 'coffeePic.jpg';
                    } ?>
                    <img src="<?php echo site_url(); ?>/assets/images/<?php echo $item['image-url']; ?>">
                        <div class="caption text-center">
                            <h3><?php echo $item['title']; ?></h3>
                            <h4><a href="<?php echo site_url('index.php/items/'.$item['id']); ?>">More Info</a></h4>
                            <a href="" class="btn btn-share" style="width: 150px;" role="button">Add To Cart</a> 
                            <a href="<?php echo site_url('index.php/items/customize'.$item['id']); ?>" class="btn btn-share" style="width: 150px;" role="button">Customize Order</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php endforeach; ?>
    </div>
</div>

 <!-- Modal -->
 <div id="customize" class="modal fade" data-focus-on="input:first" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">CUSTOMIZE YOUR COFFEE, <?php $itemId ?> </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-center h4">

                            <label>Special Instructions:</label>
                            <textarea id="editor1" class="form-control" type="text" name="specialinstructions" placeholder="Describe your customization here..."></textarea>

                            <div class="form-group col-md-8">
                                    <select class="form-control" type="text" name="price">
                                        <option value="<?php echo $item['price-small']; ?>">Small - $<?php echo $item['price-small']; ?></option>
                                        <option value="<?php echo $item['price-medium']; ?>">Medium - $<?php echo $item['price-medium']; ?></option>
                                        <option value="<?php echo $item['price-large']; ?>">Large - $<?php echo $item['price-large']; ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-offset-1 col-md-3">
                                <select class="form-control" type="int" name="numberitems">
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                    <option value=3>4</option>
                                    <option value=3>5</option>
                                </select>
                            </div>

                            <a href="" class="btn btn-share" style="width: 150px;" role="button">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info closeModal" data-dismiss="modal">Close</button>
                </div>




