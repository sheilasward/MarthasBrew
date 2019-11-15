<div class="container body-content">
    <div>&emsp;</div>
    <div class="row">
        <div class="section-title">
            <h1 class="section-heading"><?php echo $item['title']; ?> </h1>
            <div>&emsp;</div>
            <h4><?php echo $item['description']; ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

<h2><?php echo $item['title']; ?><h2>
<div class="">
    <?php echo $item['description']; ?>
</div>
<hr>
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>index.php/items/edit/<?php echo $item['id']; ?>">Edit</a>
<?php echo form_open('index.php/items/delete/'.$item['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>

