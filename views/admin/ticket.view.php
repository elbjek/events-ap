<?php require "views/partials/header.view.php"; ?>


    <form action="/admin/events/tickets" method="POST" enctype="multipart/form-data">

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
                <label for="seatings_id">Seatings</label>
                <select name="seatings_id" id="seatings_id" class="form-control">
                    <option value=""></option>
                <?php foreach ($seatings as $seating): ?>
                    <option value="<?= $seating->id ?>"><?= $seating->seat  ?></option>
                <?php endforeach; ?>
                </select>
            </div>

        <button class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>

</form>



<?php require "views/partials/footer.view.php";  ?>