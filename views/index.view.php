
<?php require "partials/header.view.php"; ?>
<h1>Latest events</h1>
<div class="row">
    <?php foreach ($events as $event):?>
    <div class="card col-md-4">
        <!-- <img class="card-img-top" src="<?= $product->image ?>" alt="Card image cap"> -->
        <div class="card-body">
            <h5 class="card-title"><?= $event->title ?></h5>
            <p class="card-text"><?= $event->description ?></p>
            <a href="/concert?id=<?= $event->id ?>" class="btn btn-primary">Show</a> 
        </div>
    </div>
    <?php endforeach; ?>

</div>

<?php require "partials/footer.view.php" ?>
