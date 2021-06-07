<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include("navbar.php");?>

    <section>

        <div class="containercon">
            <h2>Contact Us</h2>
            <p>Feel free to get in touch with us with anything related to Webste or you can just ask your question here.
                We will
                get back to
                you as soon as possible.</p>
            <form action="index.html" method="POST">
                <input type="text" placeholder="Your name" required>
                <input type="email" placeholder="Email address" required>
                <input type="texr" placeholder="Subject" required>
                <textarea name="msg" id="msg" cols="30" rows="3" placeholder="Message"></textarea>
                <input type="submit" id="btn" value="Send">
            </form>
        </div>

    </section>
    <footer>
        <h5>Copyright &copy Questionablers 2021</h5>
    </footer>

</body>

</html>