<?php require "views/partials/header.view.php"; ?>
<div class="max-width">
    <div class="show">
        <div class=" row reset d-flex justify-content-end"><a href="/admin/events" class="btn back">Back to all</a></div>

        <div class="row d-flex justify-content-center align-items-center reset ">
            <div class="form-group col-lg-5">
                <div class="img d-flex justify-content-center align-items-center">

                <img src="/storage/<?= $events[0]->image ?>" alt="">
                </div>
            </div>

        <div class="col-lg-7 info">

                <div class=" id d-flex align-items-center">
                    <h3>ID</h3>
                    <p ><?= $events[0]->id ?></p>
                </div>

                <h3>Artist</h3>
                <p class="artist"><?= $events[0]->artist ?></p>

                <h3>Short Description</h3>
                <p class="desc"><?= $events[0]->short_desc ?></p>

                <h3>Long Description</h3>
                <p class="desc"><?= $events[0]->long_desc ?></p>

                <h3>Date</h3>
                <p><?= $events[0]->date_time ?></p>

                <div class="d-flex justify-content-between">
                    <?php foreach ($events as $event):?>
                        <div class="card col-md-4 ">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column col-6 ">
                                    <div class="ticket-price">
                                        <p>Price:</p>
                                        <a href="#"><?=$event->price?></a>
                                    </div> 
                                    <div class="ticket-seat">
                                        <p>Seat:</p>
                                        <a href="#"><?=$event->seat?></a>
                                    </div> 
                                </div>
                            <div class="d-flex flex-column buttons justify-content-center align-items-center col-6 ">
                                    <a class="btn" href="/admin/events/edit?id=<?= $event->prices_id ?>">Edit</a>
                                    <form action="/admin/events/destroy"  method="post">
                                        <button  class="btn">
                                        Delete
                                        <input type="hidden" name="id" value="<?= $event->id ?>">
                                        </button>
                                    </form>
                                </div>
                            </div>
                
                        </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "views/partials/footer.view.php" ?>

