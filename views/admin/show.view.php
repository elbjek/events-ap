<?php require "views/partials/header.view.php"; ?>
<a href="/admin/events" class="btn btn-primary">Back to all</a>
<div class="form-group">
    <p>ID</p>
    <h3><?= $events[0]->id ?></h3>
</div>

<div class="form-group">
    <p>Title</p>
    <h3><?= $events[0]->title ?></h3>
</div>

<div class="form-group">
    <p>Description</p>
    <h3><?= $events[0]->description ?></h3>
</div>
<div class="form-group">
    <p>date</p>
    <h3><?= $events[0]->date ."  " . $events[0]->time . "pm" ?></h3>
</div>
<div class="form-group">
    <p>city</p>
    <h3><?= $events[0]->city?></h3>
</div>
<div class="form-group">
    <p>price</p>
    <h3><?= $events[0]->price?></h3>
</div>
<div class="form-group">
    <p>seating</p>
    <h3><?= $events[0]->seat?></h3>
</div>

<div class="form-group">
    <p>Image</p>
    <img src="<?= $events->image ?>" alt="">
</div>
<?php require "views/partials/footer.view.php" ?>
