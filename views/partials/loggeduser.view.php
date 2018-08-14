<?php if(isset($_SESSION['auth'])): ?>
<nav class="usernav">
        <ul class=" max-width d-flex justify-content-end ">
                <li class="nav-item reset dropdown   d-flex ">
                <p>Hi, &nbsp;</p> 
                <a class="nav-link reset dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?=$_SESSION["auth"]->username;?>
                </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">

                                <a class="nav-link dropdown-item" href="/admin/profile?id=<?= $_SESSION["auth"]->id ?>">
                                        Profile
                                </a>
                                <a class="nav-link dropdown-item" href="/admin/events">
                                   Panel
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item nav-link" href="/admin/logout">
                                   Logout
                                </a>
                        </div>
                </li>
        </ul>
</nav>
<?php endif;?>