<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
<?php include("navbar.php");?>
    <div class="circle mid">
    </div>
    <div id="main-container-login">
        <form action="users.php" method="POST">
            <div class="input-feilds">
            <!-- <?php
            //if($_GET['name'])
            //{ 
                ?><div class="warning-box">
                <strong>Sorry!</strong> but you need to login first
                 </div><?php
            //}
            ?> -->
                <label for="email">Email</label>
                <input class="login-input" type="text" id="email" name="email">
            </div>
            <div class="input-feilds">
                <label for="password">Password</label>
                <input class="login-input" type="password" id="password" name="password" required>
                <i class="fas fa-eye posLog" id="showpass"></i>
            </div>
            <small class="forgot"><a href="">Forgot Password?</a></small>
            <button class="btn btn-mid-fill btn-login" name="login">Login</button>
        </form>
        <p>Don't have an Account <a href="register.php">Sign Up?</a></p>
        <p> Admin Login<a href="adminlogin.php"> Click here! </a></p>
    </div>
    <footer>
        <h5>Copyright &copy Questionablers 2021</h5>
    </footer>

    <script>
const togglePassword = document.querySelector('#showpass');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

</script>
</body>

</html>