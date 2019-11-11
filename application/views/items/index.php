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

<div class="row">
    <?php foreach($items as $item) : ?>
        
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail <?php echo $item['type']; ?>">
                    <img src="<?php echo base_url(); ?>/assets/images/SaltedCaramelMocha.jpg" alt="...">
                    <div class="caption">
                        <h3><?php echo $item['title']; ?></h3>
                        <a href="#">More Info</a>
                        <p><a href="#" class="btn btn-primary" role="button">Add To Cart</a> <a href="#" >Customize</a></p>
                    </div>
                </div>
            </div>

    <?php endforeach; ?>
</div>

