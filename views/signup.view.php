<?php require "views/partials/header.view.php" ?>


<div class="signup d-flex align-items-center justify-content-center">

        <form action="/admin/createuser" class=" col-3 form  d-flex flex-column justify-content-center " method="POST" >
        <h2>LOGO</h2>
        <h3>Sign Up</h3>
        <div class="form-group">
            <label for="firstname"></label>
            <input type="text" required name="firstname" placeholder="First name" id="firstname" class="form-control" >
        </div>
        <div class="form-group">
            <label for="lastname"></label>
            <input type="text" required name="lastname" placeholder="Last name" id="lastname" class="form-control" >
        </div>

        <div class="form-group">
            <label for="username"></label>
            <input type="text" required name="username" placeholder="Username" id="name" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email"></label>
            <input type="email" required name="email" placeholder="E-mail" id="email" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password"></label>
            <input type="password" required name="password" placeholder="Password" id="password" class="form-control" >
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

        <button class="btn">SIGN UP</button>
        </form>
        
</div>
<?php require "views/partials/footer.view.php" ?>
