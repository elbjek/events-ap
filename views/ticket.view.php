
<?php require "partials/header.view.php";

?>


<h1>Ticket  view</h1>


<div class="row"></div>
        <img class="card-img-top" src="/storage/<?= $events[0]->image ?>" alt="Card image cap">
        <h1> <?= $events[0]->artist ?></h1>
        <li><a href="#"><?= $events[0]->long_desc ?></a></li>
                        <li><a href="#"><?=$tickets[0]->date?></a></li>
                        <li><a href="#"><?=$tickets[0]->time?></a></li>
        <?php foreach ($events as $event):?>
    <div class="card col-md-4">

                <ul>
                        <li><a href="#">Price:<?=$event->price?> RSD</a></li>  
                        <li><a href="#">Price:<?=$event->seat?></a></li>         
                 </ul>

            <!-- <a href="/concert?id=<?= $ticket->id ?>" class="btn btn-primary">Show</a>  -->

    </div>
    <?php endforeach; ?>


</div>

<?php require "partials/footer.view.php" ?>
