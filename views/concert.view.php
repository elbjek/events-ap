
<?php require "partials/header.view.php"; ?>

<h1>Single concert</h1>


<div class="row"></div>

    <div class="card col-md-4">
        <!-- <img class="card-img-top" src="<?= $events->image ?>" alt="Card image cap"> -->
        <p><?= $events->date?></p>
        <p><?= $events->time?></p>
        <div class="card-body">
            <h5 class="card-title"><?= $events->title ?></h5>
            <p class="card-text"><?= $events->description ?></p>
    
            <a href="/concert/tickets?id=<?= $events->id ?>"  class="btn btn-primary">Tickets</a>
        </div>
    </div>


</div>

<?php require "partials/footer.view.php" ?>
