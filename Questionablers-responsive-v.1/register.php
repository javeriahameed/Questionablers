<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
<?php include("navbar.php")?>
    <div class="circle mid">
    </div>
    <div id="main-container-login">
        <form action="users.php" method="POST">
            <div class="input-feilds">
                <label for="dName">Display Name</label>
                <input class="login-input" type="text" id="dName" name="dName" required>
            </div>
            <div class="input-feilds">
                <label for="email">Email</label>
                <input class="login-input" type="email" id="email" name="email" required>
            </div>

            <div class="input-feilds ">
                <label for="password">Password</label>
                <input class="login-input" type="password" id="password" name="password" required>
                <i class="fas fa-eye posReg" id="showpass"></i>
            </div>
           
            <button class="btn btn-mid-fill btn-login" name="insert">Sign Up</button>
        </form>
        <p>Already have an Account <a href="login.php">Login?</a></p>
        <small> <input type="checkbox" required> By Checking you agree to Our</small>
        <small class="terms"><a href="">Terms and Conditions</a></small>
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