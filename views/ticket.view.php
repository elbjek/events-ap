<?php require "partials/header.view.php";?>

<div class="max-width">
        <div class="ticket row reset d-flex align-items-center">
                <div class="img col-lg-3 d-flex justify-content-center align-items-start">
                        <img  src="/storage/<?= $events[0]->image ?>" alt="Card image cap">
                </div>
                <div class="col">

                        <h5> <?= $events[0]->artist ?></h5>
                        <p href="#"><?= $events[0]->short_desc ?></p>
                        <p href="#"><?=$events[0]->date_time?></p>
                        
                        <div class="d-flex dropdown justify-content-center align-items-center ">
                                <?php foreach ($events as $event):?>
                                        <div class="purchase col-lg  reset d-flex flex-column">

                                                <div>   
                                                        <h3>Price: </h3>
                                                        <p href="#"><?=$event->price?> RSD</p>  
                                                </div>

                                                <div>   
                                                        <h3>Seat: </h3>
                                                        <p href="#"><?=$event->seat?></p>  
                                                </div> 
                                                <a  class="btn" href="#">PURCHASE</a>
                                        </div>
                                <?php endforeach; ?>
                        </div>
                </div>
        </div>
</div>

<?php require "partials/footer.view.php" ?>
