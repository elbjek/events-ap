
<?php require "partials/header.view.php"; ?>
<h1>Latest events</h1>
<div class="row">
    <?php foreach ($events as $event):?> 

    <?php if($event->prices_id==1):?>

    <div class="card col-md-4">
        <img class="card-img-top"  src="storage/<?= $event->image ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $event->artist ?></h5>
            <p class="card-text"><?= $event->short_desc ?></p>
            <a href="/concert?id=<?= $event->venues_id ?>" class="btn btn-primary">Show</a> 
        </div>
    </div>   

       <?php endif; ?>
     <?php endforeach; ?>


</div>

<?php require "partials/footer.view.php" ?>
