
<?php require "partials/header.view.php";?>

<div class="max-width">
    <div class=" single ">

    <h5 class="col-12"><?= $events->artist ?></h5> 
        <div class="row reset d-flex justify-content-center ">
            <div class="img col-lg-5 col-md-12 reset d-flex justify-content-center align-items-center">
                <img class="card-img-top" src="storage/<?= $events->image ?>" alt="Artist image">
            </div>
            <div class="card-body col-lg-6 col-md-12 ">
                <div>
                <h3> &nbsp; <?= $events->date_time?></h3>
                    <h6>About:</h6>
                    <p><?= $events->long_desc?></p>
                </div>
                <a href="/concert/tickets?id=<?= $events->venues_id ?>"  class="btn">See tickets</a>
            </div>
        </div>
    </div>
</div>

<?php require "partials/footer.view.php" ?>
