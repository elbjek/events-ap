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
        <th>Description</th>
        <th>Thumbnail</th>
        <th>City</th>
        <th>Date</th>
        <th>Time</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($events as $event): ?>
    <tr>
        <td><?= $event->id ?></td>
        <td><?= $event->title ?></td>
        <td><?= substr($event->description, 0, 50) ?>...</td>
        <td><img src="/storage/<?= $event->image ?>" alt="" width="150"></td>
        <td><?= $event->city ?></td>
        <td><?= $event->date ?></td>
        <td><?= $event->time ?></td>
        <td><a href="/admin/events/show?id=<?= $event->id ?>">Show</a> | <a href="/admin/events/edit?id=<?= $event->id ?>">Edit</a> | <form action="/admin/events/destroy" method="post"><button class="btn">
        <input type="hidden" name="id" value="<?= $event->id ?>">Delete</button></form></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php require "views/partials/footer.view.php" ?>
