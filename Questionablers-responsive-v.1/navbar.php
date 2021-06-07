<?php
session_start();
?>
<header class="top">
        <div class="logo">
        <div class="logoimg">
        <a href="index.php"><img src="logo.png" width="38px" height="38px" alt=""></a>
        </div>
        <div class="logotitle">
            <a href="index.php">Questionablers</a>
        </div>
        </div>
        <ul class="topbar">
            <li><a href="aboutus.php"> About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        <form action="">
            <input class="search" type="text" placeholder="Search">
        </form>
        <div class="logs">
            <?php 
            if(!isset($_SESSION['login_user']))
            {?>
            <a class="btn btn-small-outline right" href="login.php">Login</a>
            <a class="btn btn-small-outline right" href="register.php">SignUp</a>
            <?php
            }
            else
            {?>
            <a class="btn btn-small-outline right" href="users.php?name=logout"><?php echo $_SESSION['login_user'];?></a>
            <?php
            }?>
        </div>
</header>