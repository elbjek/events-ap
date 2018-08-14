

<?php require "views/partials/header.view.php"; ?>

<div class="max-width">
        <form action="/admin/events/seating" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="seat">Seating</label>
                        <input name="seat" id="venues"  class="form-control"></input>
                </div>

                <button class="btn btn-primary">Submit</button>
        </form>
</div>
<?php require "views/partials/footer.view.php" ?>



