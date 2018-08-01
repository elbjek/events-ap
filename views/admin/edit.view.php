<?php require "views/partials/header.view.php";?>



<?php if(isset($events)): ?>
    <form action="/admin/events/update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product->id ?>">
<?php else: ?>
    <form action="/admin/events" method="POST" enctype="multipart/form-data">
<?php endif; ?>

    <!-- <input type="hidden" name="venues_id" value=""> -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= isset($events->title) ? $events->title : '' ?>">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= isset($events->description) ? $events->description : '' ?></textarea>
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" id="city" class="form-control" value="<?= isset($events->city) ? $events->city : '' ?>">
    </div>
    <div class="form-group">
        <label for="venues">City</label>
        <input type="text" name="venues" id="venues" class="form-control" value="<?= isset($events->venues) ? $events->venues : '' ?>">
    </div>

     <!-- <div class="form-group">
        <?php if (isset($events)) : ?>
            <div>
                <img width="240" src="/storage/<?= $events->image ?>" alt="">
            </div>
        <?php endif; ?>

        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" value="">
    </div> -->

        <!-- <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value=""></option>
            <?php foreach ($seatings as $seating): ?>
              
                <option value="<?= $seating->id ?>"><?= $seating->seat  ?></option>
            <?php endforeach; ?>
            </select>
        </div> -->

    <button class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>

</form>

<?php require "views/partials/footer.view.php" ?>


<script>





</script>