<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="Usersstyle.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Create User</title>
</head>
<body>
<div class="container">
<div class="menubar">
<div class="back">
  <a href="showUsers.php" class=btn-solid><i class="fas fa-chevron-left"></i>Back</a>
  </div>
  </div>
  <?php
if(isset($_GET ['id']))
{
  $conn = mysqli_connect('localhost', 'root', '', 'questionablers');
  $id = $_GET['id'];
  $query = "Select * from users";
  $result= mysqli_query($conn,$query);
  while($data = mysqli_fetch_array($result))
  {?>
  <ul class="responsive-table">
    <li class="table-header headrow">
      <div class="col col-12 heading">Update Existing User</div>
    </li>
    <form action="" method="post">
    <li class="bodyrow">
        <div class="input-area">
        <label for="displayName">Display Name*</label>
        <input class="feild" type="text" id="displayName" value=<?php echo $data ['displayName']; ?> required>
        </div>

        <div class="input-area">
        <label for="email">Email*</label>
        <input class="feild" type="email" id="email" value=<?php echo $data ['email']; ?>  required>
        </div>
    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="fullName">Full Name</label>
        <input class="feild" type="text" id="fullName" value=<?php echo $data ['fullName']; ?> >
        </div>

        <div class="input-area">
        <label for="password">Password*</label>
        <input class="feild" type="password" id="password" value=<?php echo $data ['password']; ?>  required>
        <i class="fas fa-eye" id="showpass"></i>
        </div>

    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="pPicture">Profile Picture</label>
        <input class="feild" type="file" id="pPicture" value=<?php echo $data ['pPicture']; ?> >
        </div>

        <div class="input-area">
        <label for="gender">Gender</label>
        <input class="feild" type="text" id="gender" value=<?php echo $data ['gender']; ?> >
        </div>
    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="address">Address</label>
        <input class="feild" type="text" id="address" value=<?php echo $data ['address']; ?> >
        </div>

        <div class="input-area">
        <label for="contact">Contact No</label>
        <input class="feild" type="text" id="contact" value=<?php echo $data ['contact']; ?> >
        </div>
    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="uniName">University Name</label>
        <input class="feild" type="text" id="uniName" value=<?php echo $data ['universityName']; ?> >
        </div>

        <div class="input-area">
        <label for="depName">Department Name</label>
        <input class="feild" type="text" id="depName" value=<?php echo $data ['departmentName']; ?> >
        </div>
    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="uBio">User Biography</label>
        <textarea class="feild" name="" id="uBio" cols="30" rows="10" value=<?php echo $data ['uBio']; ?> ></textarea>
        </div>
    </li>
    <button>Update</button>
</form>
  </ul>
 <?php
    }
}
  else
  { 
      ?>
  <ul class="responsive-table">
    <li class="table-header headrow">
      <div class="col col-12 heading">Create New User</div>
    </li>
    <form action="" method="post">
    <li class="bodyrow">
        <div class="input-area">
        <label for="displayName">Display Name*</label>
        <input class="feild" type="text" id="displayName" placeholder="Enter Name" required>
        </div>

        <div class="input-area">
        <label for="email">Email*</label>
        <input class="feild" type="email" id="email" required>
        </div>
    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="fullName">Full Name</label>
        <input class="feild" type="text" id="fullName">
        </div>

        <div class="input-area">
        <label for="password">Password*</label>
        <input class="feild" type="password" id="password" required>
        <i class="fas fa-eye" id="showpass"></i>
        </div>
    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="pPicture">Profile Picture</label>
        <input class="feild" type="file" id="pPicture">
        </div>

        <div class="input-area">
        <label for="gender">Gender</label>
        <input class="feild" type="text" id="gender">
        </div>
    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="address">Address</label>
        <input class="feild" type="text" id="address">
        </div>

        <div class="input-area">
        <label for="contact">Contact No</label>
        <input class="feild" type="text" id="contact">
        </div>
    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="uniName">University Name</label>
        <input class="feild" type="text" id="uniName">
        </div>

        <div class="input-area">
        <label for="depName">Department Name</label>
        <input class="feild" type="text" id="depName">
        </div>
    </li>

    <li class="bodyrow">
        <div class="input-area">
        <label for="uBio">User Biography</label>
        <textarea class="feild" name="" id="uBio" cols="30" rows="10"></textarea>
        </div>
    </li>
    <button>Add New</button>
</form>
  </ul>
 <?php
    }
    ?>
</div>

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