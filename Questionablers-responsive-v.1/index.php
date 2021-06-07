<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include("navbar.php");?>
    <div id="main-container-index">
        <div class="row headline">
            <h3>Top Questions</h3>
            <div class="box">
                <ul>
                    <li class=" simple s-around-l">Programming</li>
                    <li class="simple">General</li>
                    <li class="simple">Freelancing</li>
                    <li class="simple s-around-r">Tech</li>
                </ul>
            </div>
            <a class="btn btn-mid-fill" href="ask-question.php">Ask Question</a>
        </div>
        <?php 
$conn = mysqli_connect('localhost', 'root', '', 'questionablers');
$query = "Select * from posts";
$result= mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count > 0)
{
  while($data = mysqli_fetch_array($result))
    {   
       $questionId = $data ['pId'];
    ?>
        <!-- question-start -->
        <a href="answer.php?id=<?php echo $questionId ?>" class="row design">
            
            <div class="values">
                <div class="cubes">
                    <h1>0</h1><small>Votes</small>
                </div>
                <div class="cubes">
                    <h1>
                    <?php 
                     $query1 = "Select count(*) from answers where questionId = '$questionId'";
                     $result1= mysqli_query($conn,$query1);
                     $count1=mysqli_num_rows($result1);
                     echo $count1;
                    ?>
                    </h1><small>Answers</small>
                </div>
                <div class="cubes">
                    <h1>0</h1><small>Views</small>
                </div>
            </div>

            <div class="question">
                <h3><?php echo $data ['title']; ?></h3>
                
                <?php         
        $userId = $data['userId'];
        $query1 = "Select * from users where uId ='$userId' ";
        $result1= mysqli_query($conn,$query1); 
        while ($data1 = mysqli_fetch_array($result1))
        {
        ?>
                <div class="row1">
                    <div class="timing">
                        <small>asked 20 sec ago by <?php echo $data1 ['displayName']?></small>
                    </div>
                    <div class="tags">
                        <div class="tag"><small>Flutter</small></div>
                        <div class="tag"><small>conditional</small></div>
                        <div class="tag"><small>Flutter</small></div>
                    </div>
                </div>
            </div>
        </a>
        <!-- question-end -->
        <?php 
        }
    }
}
else
{?>       <div class="info-box">
           <strong>No Questions asked yet </strong> <a class="link-style" href="ask-question.php">Click here!</a> to ask the first question
            </div>
  <?php
}?>
        
    </div>
    <div id="side-bar" class="design">
        <h3>Lastest News will be added when when adding php</h3>
    </div>

    <footer>
        <h5>Copyright &copy Questionablers 2021</h5>
    </footer>
</body>

</html>