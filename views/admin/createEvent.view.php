<?php require "views/partials/header.view.php"; ?>

    <form action="/admin/events/event" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>

        <div class="form-group">
            <label for="venues_id">Venues</label>
            <select name="venues_id" id="venues_id" class="form-control">
                <option value=""></option>
            <?php foreach ($venues as $venue): ?>
                <option value="<?= $venue->id ?>"><?= $venue->title  ?></option>
            <?php endforeach; ?>
            </select>
        </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="city">city</label>
        <input name="city" id="city" cols="30" rows="10" class="form-control"></input>
    </div>

    <!-- <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" value="">
    </div> -->

    <button class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>

</form>
<?php require "views/partials/footer.view.php"; ?>