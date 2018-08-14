<?php require "views/partials/header.view.php"; ?>

  <div class="max-width">
  <div class=" row reset d-flex justify-content-end"><a href="/admin/events" class="btn back">Back to all</a></div>
  <form action="/admin/events/event" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="artist">Artist name</label>
        <input type="text" name="artist" id="artist" class="form-control">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" >
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
    <label for="seatings_id">Seatings</label>
        <select name="seatings_id" id="seatings_id" class="form-control">
            <option value=""></option>
            <?php foreach ($seatings as $seating): ?>
                <option value="<?= $seating->id ?>"><?= $seating->seat  ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
    <label for="prices_id">Prices</label>
        <select name="prices_id" id="prices_id" class="form-control">
            <option value=""></option>
            <?php foreach ($prices as $price): ?>
                <option value="<?= $price->id ?>"><?= $price->price  ?> RSD</option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input name="city" id="city" cols="30" rows="10" class="form-control"></input>
    </div>        

    <div class="form-group">
        <label for="short_desc">Short description</label>
        <textarea name="short_desc" id="short_desc" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="long_desc">Long description</label>
        <textarea name="long_desc" id="long_desc" cols="30" rows="10" class="form-control"></textarea>
    </div>


    <div class='form-group date' id="datetime">
        <label for="date_time"></label>
        <input type='datetime-local' name="date_time" id="date_time" class="form-control"  
        value="" />
    </div>

    <button class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>

</form>  
  
  </div>

<?php require "views/partials/footer.view.php"; ?>