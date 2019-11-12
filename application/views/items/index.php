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
                            <a href="" class="btn btn-share" style="width: 150px;" role="button">Add To Cart</a>
                            <a href="" class="btn btn-share" style="width: 150px;" role="button">Customize Order</a>
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
                            <h4><a href="<?php echo base_url(); ?>index.php/items/details?Id=<?php $itemId ?>">More Info</a></h4>
                            <a href="" class="btn btn-share" style="width: 150px;" role="button">Add To Cart</a> 
                            <a href="" class="btn btn-share" style="width: 150px;" role="button">Customize Order</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php endforeach; ?>
    </div>

</div>



