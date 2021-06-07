<?php 
session_start();
// connection varaible name is $conn
include("dbconnect.php");

if(isset($_SESSION['login_id']))
{
    if(isset($_GET['answer']))
    {
        $body = $_GET['body'];
        $votes = 0;
        $accept = 0;
        date_default_timezone_set('Asia/Karachi');
        $userId = $_SESSION['login_id'];
        $quesId = $_GET['questionid'];
        // $address = "";
        // $contact = "";
        // $uniName = "";
        // $depName = "";
        // $uBio = "";

        $query= "INSERT INTO answers (body,avotes,aaccept,atime,userId,questionId) 
                VALUES ('$body','$votes','$accept',NOW(),'$userId','$quesId')";
        
        $result = mysqli_query($conn , $query);
        if($result)
        {
        echo "answer added";
        }
        else{
            echo "database error";
        }
    }
}
else
{
  header("location:login.php");
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


