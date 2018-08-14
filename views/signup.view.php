<?php require "views/partials/header.view.php" ?>

    <form action="/admin/createuser" method="POST" >

        <div class="form-group">
            <label for="firstname">First name</label>
            <input type="text" required name="firstname" id="firstname" class="form-control" >
        </div>

        <div class="form-group">
            <label for="lastname">Last name</label>
            <input type="text" required name="lastname" id="lastname" class="form-control" >
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" required name="username" id="name" class="form-control" >
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" required name="email" id="email" class="form-control" >
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password" id="password" class="form-control" >
        </div>
        <!-- <div class="form-group">
        <?php if (isset($product)) : ?>
            <div>
                <img width="240" src="/storage/<?= $users->image ?>" alt="">
            </div>
        <?php endif; ?>

        <label for="avatar">Image</label>
        <input type="file" name="avatar" id="image" class="form-control" value="">
    </div> -->

<button class="btn btn-primary">Submit</button>
</form>
<?php require "views/partials/footer.view.php" ?>
