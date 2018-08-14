
<?php require "partials/header.view.php";?>

<h1>Single concert</h1>


<div class="row"></div>

    <div class="card col-md-4">
        <img class="card-img-top" src="storage/<?= $events->image ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $events->artist ?></h5>
            <p class="card-text"><?= $events->short_desc ?></p>
            <p class="card-text"><?= $events->long_desc ?></p>
            <p><?= $events->date?></p>
            <p><?= $events->time?></p>
            <a href="/concert/tickets?id=<?= $events->venues_id ?>"  class="btn btn-primary">Tickets</a>
        </div>
    </div>


</div>

<?php require "partials/footer.view.php" ?>
