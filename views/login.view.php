<?php require "views/partials/header.view.php" ?>

<div class="login d-flex justify-content-center align-items-center ">
<form action="/admin/validate" class="form col-3" method="POST" >
<h3>Login</h3>
    <div class="form-group">
        <label for="email"></label>
        <input type="email" placeholder="E-mail" required name="email" id="email" class="form-control" >
    </div>
    <div class="form-group">
        <label for="password"></label>
        <input type="password" required name="password" placeholder="Password" id="password" class="form-control" >
    </div>
    <div class="d-flex justify-content-end align-items-center">
        <a href="/admin/signup">Dont have an account?</a>
        <button class="btn">Submit</button>
    </div>
</form>
</div>
<?php require "views/partials/footer.view.php" ?>
