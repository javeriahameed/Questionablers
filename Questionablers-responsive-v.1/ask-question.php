<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Ask Question</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include("navbar.php");?>
    <div id="main-container-index">
    <?php
    if(!isset($_SESSION['login_user']))
    {  header("location:login.php?name=newAcc"); }
    else
    {?>
        <form action="questiondb.php" method="GET">
            <input class="input fields" type="text" name="title" placeholder="Title" >
            <textarea class="input texta" name="body" id="" cols="30" rows="20" placeholder="Enter your question Description here..."></textarea>
            <input class="input texttags" type="text" placeholder="Tags">
            <button class="btn btn-mid-fill right" type="submit" name="ask">Post</button>
        </form>
    </div>
    <div id="side-bar">
        <h3>Helping material for asking question correctly will be added when adding php</h3>
    </div>
    <footer>
        <h5>Copyright &copy Questionablers 2021</h5>
    </footer>
    <?php } ?>
</body>

</html>