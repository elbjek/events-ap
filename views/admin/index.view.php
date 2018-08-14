
<?php require "views/partials/header.view.php";  ?>



<div class="content-table max-width">

        <div class="buttons  d-flex justify-content-between">
                <a href="/admin/events/event" class="btn event">+ New event</a>
            <div>
                <a href="events/venue" class="btn add">+ Venue</a> 
                <a href="events/seating" class="btn add">+ Seatings</a>
                <a href="events/price" class="btn add">+ Price</a> 
            </div>
        </div>


<table class="table content-table  ">
    <tr>
        <th>Name</th>   
        <th>Image</th>   
        <th>Short Description</th>
        <th>Long Description</th>
        <th>City</th>
        <th>Date and Time</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($events as $event): ?>
    <?php if($event->prices_id==1):?>
    <tr>
        <td><?= $event->artist ?></td>
        <td>
            <div class="img d-flex justify-content-center">
                <img src="/storage/<?= $event->image ?>" alt="" height="100px">
            </div>
        </td>
        <td><?= substr($event->short_desc, 0, 50) ?>...</td>
        <td><?= substr($event->long_desc, 0, 50) ?>...</td>        
        <td><?= $event->city ?></td>
        <td><?= $event->date_time ?></td>
        <td><a href="/admin/events/show?id=<?= $event->venues_id ?>">View</a></td>
    </tr>
    <?php endif; ?>
    <?php endforeach; ?>
</table>    

</div>
<?php require "views/partials/footer.view.php" ?>
