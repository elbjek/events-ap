<?php require "views/partials/header.view.php"; ?>

<div class="edit">
    <div class="max-width">
        <?php if(isset($events)): ?>
        <form class="form " action="/admin/events/update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $events->id ?>">
        <?php else: ?>
            <form class="form" action="/admin/events" method="POST" enctype="multipart/form-data">
        <?php endif; ?>
        <h2>Edit Event</h2>
            <div class="form-group d-flex flex-row align-items-end img">
                <?php if (isset($events)) : ?>
                    <div>
                        <img width="240" src="/storage/<?= $events->image ?>" alt="">
                    </div>
                <?php endif; ?>

                <label for="image"></label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Upload an image" value="">
            </div>
            <div class="form-group">
                <label for="artist">Title</label>
                <input type="text" name="artist" id="artist" class="form-control" value="<?= isset($events->artist) ? $events->artist : '' ?>">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control" value="<?= isset($events->city) ? $events->city : '' ?>">
            </div>

            <div class='form-group date' id="datetime">
                <label for="date_time">Date and Time</label>
                <input type='datetime-local' name="date_time" id="date_time" class="form-control"  
                value="<?= str_replace(' ', 'T', $events->date_time) ?>" />
            </div>

            <div class="form-group">
                <label for="short_desc">Short description</label>
                <textarea name="short_desc" id="short_desc" cols="30" rows="10" class="form-control"><?= isset($events->short_desc) ? $events->short_desc : '' ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="long_desc">Long description</label>
                <textarea name="long_desc" id="long_desc" cols="30" rows="10" class="form-control"><?= isset($events->short_desc) ? $events->long_desc : '' ?></textarea>
            </div>

            <div class="form-group">
                <label for="seatings_id">Seating</label>
                <select name="seatings_id" id="seatings_id" class="form-control">
                    <option value=""></option>
                <?php foreach ($seatings as $seating): ?>
                    <?php $selected = ($seating->id === $events->seatings_id) ? "selected" : "" ?>
                    <option value="<?= $seating->id ?>" <?= $selected ?>><?= $seating->seat  ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="venues_id">Venue</label>
                <select name="venues_id" id="venues_id" class="form-control">
                    <option value=""></option>
                <?php foreach ($venues as $venue): ?>
                    <?php $selected = ($venue->id === $events->venues_id) ? "selected" : "" ?>
                    <option value="<?= $venue->id ?>" <?= $selected ?>><?= $venue->title  ?></option>
                <?php endforeach; ?>
                </select>
            </div>       
            <div class="form-group">
                <label for="prices_id">Price</label>
                <select name="prices_id" id="prices_id" class="form-control">
                    <option value=""></option>
                <?php foreach ($prices as $price): ?>
                    <?php $selected = ($price->id === $events->prices_id) ? "selected" : "" ?>
                    <option value="<?= $price->id ?>" <?= $selected ?>><?= $price->price  ?> RSD</option>
                <?php endforeach; ?>
                </select>
            </div>  
            <button class="btn ">Submit</button>
            <button type="reset" class="btn">Reset</button>

        </form>

    </div>
</div>

<?php require "views/partials/footer.view.php" ?>
