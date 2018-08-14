<?php require 'loggeduser.view.php' ?>

<nav class=" navbar reset wrapper" >
<ul class="nav">
    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

    <li class="nav-item"><a class="nav-link" href="/">Events</a></li>

    <li class="nav-item"><a class="nav-link" href="/">Artists</a></li>

    <li class="nav-item">
        <?php if(!isset($_SESSION['auth'])): ?>
           <a class="nav-link" href="/admin/login">Login</a>
        <?php endif;?>
    </li>

    <li class="nav-item">        
        <?php if(!isset($_SESSION['auth'])): ?>
            <a class="nav-link" href="/admin/signup">Sign up</a>
        <?php endif;?>
    </li>

</ul>
</nav>
