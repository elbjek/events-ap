<?php

//dd(getcwd());
?>
<?php require "views/partials/header.view.php";  ?>


<a href="/admin/events/event" class="btn btn-primary">Add new product</a>
<!-- <a href="/admin/events/create" class="btn btn-primary">Add new product</a> -->

<a href="events/venue" class="btn btn-danger">+ add venue</a> 
<a href="events/seating" class="btn btn-danger">+ add seatings</a>
<a href="events/ticket" class="btn btn-danger">+ add ticket</a> 
<br>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>   
        <th>Image</th>   
        <th>Short Description</th>
        <th>Long Description</th>
        <th>City</th>
        <th>Date and Time</th>
        <th>Price ID</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($events as $event): ?>
    <tr>
        <td><?= $event->id ?></td>
        <td><?= $event->artist ?></td>
        <td><img src="/storage/<?= $event->image ?>" alt="" height="100px"></td>
        <td><?= substr($event->short_desc, 0, 50) ?>...</td>
        <td><?= substr($event->long_desc, 0, 50) ?>...</td>        
        <td><?= $event->city ?></td>
        <td><?= $event->date_time ?></td>
        <td><?= $event->prices_id ?></td>
        <td><a href="/admin/events/show?id=<?= $event->id ?>">Show</a> | <a href="/admin/events/edit?id=<?= $event->id ?>">Edit</a> | <form action="/admin/events/destroy" method="post"><button class="btn">
        <input type="hidden" name="id" value="<?= $event->id ?>">Delete</button></form></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php require "views/partials/footer.view.php" ?>
