<div class="row">
    <div class="section-title">
        <h1 class="section-heading">Menu Items</h1>
        <h2 class="section-subheading-nobg">We have both cold and hot beverages!</h2>
    </div>
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-body">
                <h1 class="text-center"><span>Our Hot Beverages</span></h1>

                <?php foreach($items as $item) : ?>
                    <?php if ($item['type'] == 'hot') { ?>
                        <hr />
                        <h3><?php echo $item['title']; ?></h3>
                        <?php echo $item['description']; ?><br />
                        <span>Price:  $<?php echo $item['price']; ?>
                        
                    <?php } ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-body">
                <h1 class="text-center"><span>Our Cold Beverages</span></h1>

                <?php foreach($items as $item) : ?>
                    <?php if ($item['type'] == 'cold') { ?>
                        <hr />
                        <h3><?php echo $item['title']; ?></h3>
                        <?php echo $item['description']; ?><br />
                        <span>Price:  $<?php echo $item['price']; ?>
                        
                    <?php } ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>
