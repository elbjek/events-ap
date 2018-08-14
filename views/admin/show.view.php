<?php require "views/partials/header.view.php"; ?>
<a href="/admin/events" class="btn btn-primary">Back to all</a>

    <p>ID</p>
    <h3><?= $events[0]->id ?></h3>

    <p>Artist</p>
    <h3><?= $events[0]->artist ?></h3>

    <p>Description</p>
    <h3><?= $events[0]->short_desc ?></h3>

<div class="form-group">
    <p>date</p>
    <h3><?= $events[0]->date_time ?></h3>
</div>
<?php foreach ($events as $event):?>
    <div class="card col-md-4">
                <ul>
                        <li><a href="#">Price:<?=$event->price?> RSD</a> <a href="/admin/events/edit?id=<?= $event->prices_id ?>">Edit</a>
                        <form action="/admin/events/destroy" method="post"><button class="btn">
                        <input type="hidden" name="id" value="<?= $event->prices_id ?>">Delete</button></form>
                        
                        
                        </li>  
                        <li><a href="#">Seat:<?=$event->seat?></a></li>         
                 </ul>
    </div>
    <?php endforeach; ?>

<div class="form-group">
    <p>Image</p>
    <img src="/storage/<?= $events[0]->image ?>" alt="">
</div>
<?php require "views/partials/footer.view.php" ?>
