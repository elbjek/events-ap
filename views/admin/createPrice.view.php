

<?php require "views/partials/header.view.php"; ?>

<form action="/admin/events/price" method="POST" enctype="multipart/form-data">
<div class="form-group">
        <label for="price">Price</label>
        <input name="price" id="venues"  class="form-control"></input>
</div>

 <button class="btn btn-primary">Submit</button>

</form>
<?php require "views/partials/footer.view.php" ?>



