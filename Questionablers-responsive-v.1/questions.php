<?php 
// connection varaible name is $conn
include("dbconnect.php");


if(isset($_POST['insert']))
{
    $Name = $_POST['uName'];
    $Password = $_POST['uPass'];
    $Address = $_POST['uAddress'];
    

    $query= "INSERT INTO users(Name, Password, Address) VALUES ('$Name', '$Password','$Address' )";
    
    $result = mysqli_query($conn , $query);
    echo "user added";

}

if(isset($_GET['delete']))
{
    $id = $_GET['id'];

}

if(isset($_GET['edit']))
{
    $id = $_GET['id'];
    
}

?>