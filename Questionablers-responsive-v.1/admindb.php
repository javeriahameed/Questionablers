<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Admin | DashBoard</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar__subsections">
            <div class="sidebar__subsections-brand">Admin 1.0</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="#">Questions</a></li>
                <li><a href="showUsers.php">Users</a></li>
                <li><a href="contactus.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="page">

        <div class="header">
            <div class="header__search">
                <input type="text" placeholder="Search..." />
            </div>
            <div class="header__date">
                <span id="date"></span>
            </div>
            <div class="header__user">
                Hello, Admin <svg class="lnr lnr-cog icon">
                    <use xlink:href="#lnr-cog"></use>
                </svg>
            </div>
        </div>

        <div class="content">
            <div class="title" id="title-bar">
                <div class="title__text">
                    <span>Editing Content</span>
                    <h1>DashBoard</h1>
                </div>
                <div class="title__extras">
                    <svg class="lnr lnr-star icon">
                        <use xlink:href="#lnr-star"></use>
                    </svg> Featured Questions
                </div>
            </div>


            <!-- admin-cards -->
            <div class="container">
                <div class="box yellow">
                    <div class="profile">
                        <div class="pic"><img src="https://picsum.photos/200" alt=""></div>
                    </div>
                    <div class="contentcard">
                        <div>
                            <p>Users</p>
                            <p>120</p>
                        </div>

                    </div>
                </div>
                <div class="box pink">
                    <div class="profile">
                        <div class="pic"><img src="https://picsum.photos/200" alt=""></div>
                    </div>
                    <div class="contentcard">
                        <div>
                            <p>Questions</p>
                            <p>1600</p>
                        </div>

                    </div>
                </div>
                <div class="box aqua">
                    <div class="profile">
                        <div class="pic"><img src="https://picsum.photos/200" alt=""></div>
                    </div>
                    <div class="contentcard">
                        <div>
                            <p>Answers</p>
                            <p>1200</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


</body>

</html>