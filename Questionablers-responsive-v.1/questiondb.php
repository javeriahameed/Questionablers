<?php 
session_start();
// connection varaible name is $conn
include("dbconnect.php");

if(isset($_GET['ask']))
{
    $title = $_GET['title'];
    $body = $_GET['body'];
    $userId = $_SESSION['login_id'];
    // $pass = $_POST['password'];
    // $fName = "";
    // $pPic = "";
    // $gen = "";
    // $address = "";
    // $contact = "";
    // $uniName = "";
    // $depName = "";
    // $uBio = "";

    $query= "INSERT INTO posts (title,body,userId) VALUES ('$title','$body','$userId')";
    
    $result = mysqli_query($conn , $query);
    if($result)
    {
    echo "question added";
    }
    else{
        echo "database error";
    }
}

// if($_GET['name'] == "delete")
// {
//     $id = $_GET['id']; // get id through query string

// $del = mysqli_query($conn,"delete from users where id = '$id'"); // delete query

// if($del)
// {
//     mysqli_close($conn); // Close connection
//     header("location:showUsers.php"); // redirects to all records page
//     exit;	
// }
// else
// {
//     echo "Error deleting record"; // display error message if not delete
// }

// }

// if($_GET['name'] == "edit")
// {
//     $id = $_GET['id'];
//     echo "editing";
//     echo $id;
    
// }

?>


