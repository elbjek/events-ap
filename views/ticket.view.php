
<?php require "partials/header.view.php";
?>


<h1>Single concert</h1>


<div class="row"></div>
<?php 
// dd($tickets)?>

        <h1> <?= $tickets[0]->title ?></h1>
        <li><a href="#"><?= $tickets[0]->city ?></a></li>
                        <li><a href="#"><?=$tickets[0]->date?></a></li>
                        <li><a href="#"><?=$tickets[0]->time?></a></li>
        <?php foreach ($tickets as $ticket):?>
    <div class="card col-md-4">
        <!-- <img class="card-img-top" src="<?= $ticket->image ?>" alt="Card image cap"> -->


                <ul>
                        <li><a href="#"><?=$ticket->description?></a></li>
                        <li><a href="#">Price:<?=$ticket->price?></a></li>  
                        <li><a href="#">Price:<?=$ticket->seat?></a></li>        
                        
                 </ul>

            <!-- <a href="/concert?id=<?= $ticket->id ?>" class="btn btn-primary">Show</a>  -->

    </div>
    <?php endforeach; ?>


</div>

<?php require "partials/footer.view.php" ?>
