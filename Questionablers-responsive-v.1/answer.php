<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Answer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include("navbar.php");?>
    <div id="main-container-index">
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'questionablers');
    $id = $_GET['id'];
    $query = "Select * from posts where pId = '$id'";
    $result= mysqli_query($conn,$query);
    while($data = mysqli_fetch_array($result))
    { ?>
        <div class="row headline">
            <h3><?php echo $data ['title']?></h3>
            <a class="btn btn-mid-fill" href="ask-question.php">Ask Question</a>
        </div>
        <div class="row">
            <small>Asked Today - </small>
            <small>Active Today - </small>
            <small>Viewed 11 Times</small>
        </div>
        <p><?php echo $data['body']?></p>
        <div class="information">
            <div class="tags-group">
                <div class="tags"><small>Flutter</small></div>
                <div class="tags"><small>conditional-statement</small></div>
                <div class="tags"><small>Flutter</small></div>
            </div>
        <?php }?>
            <div class="profile-card">

            </div>
        </div>
        <?php
    $conn = mysqli_connect('localhost', 'root', '', 'questionablers');
    $query = "Select * from answers where questionId = '$id'";
    $result= mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    ?>
    <h2><?php echo $count ?> Answer</h2>
    <?php
    while($data = mysqli_fetch_array($result))
    { 
        $user = $data['userId'];
        $query1 = "Select * from users where uId = $user";
        $result1= mysqli_query($conn,$query1);
        ?>
        <p><?php echo $data['body'];?></p>

        <?php
        while($data1 = mysqli_fetch_array($result1))
        {
           ?> by <a href="userProfile.php"><?php echo $data1 ['displayName'] ?> </a> <?php
        }
        ?>
    <?php
    } 
    if(!isset($_SESSION['login_user']))
    {
    ?>
    <div class="info-box">
    <strong>You need to Login First</strong> <a class="link-style" href="ask-question.php">Click here!</a> 
           to Login to your account to give answer to this question.
   </div>
  <?php
    }
    else
    {
    ?>
        <h2>Your Answer</h2>
        <form action="answerdb.php" method="GET">
        <input type="text" name="questionid" id="" value=<?php echo $id;?> hidden>
        <textarea class="input texta" name="body" id="" cols="30" rows="10" placeholder="Type your answer here..."></textarea>
        <button class="btn btn-mid-fill" name="answer">Post Your Answer</button>
        </form>
    </div>
    <?php } ?>
    </div>
    <div id="side-bar">
        <h3>Helping material for answering question correctly will be added when when adding php</h3>
    </div>

    <footer>
        <h5>Copyright &copy Questionablers 2021</h5>
    </footer>
</body>

</html>