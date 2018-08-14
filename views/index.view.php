
<?php require "partials/header.view.php"; ?>
<h1>Latest events</h1>
<div class="row">
    <?php foreach ($events as $event):?>
    <div class="card col-md-4">
        <!-- <img class="card-img-top" src="<?= $event->img ?>" alt="Card image cap"> -->
        <div class="card-body">
            <h5 class="card-title"><?= $event->artist ?></h5>
            <p class="card-text"><?= $event->short_desc ?></p>
            <a href="/concert?id=<?= $event->id ?>" class="btn btn-primary">Show</a> 
        </div>
    </div>
    <?php endforeach; ?>

</div>

<?php require "partials/footer.view.php" ?>
