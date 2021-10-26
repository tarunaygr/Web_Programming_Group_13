<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>WebCoursera</title>
</head>

<body>
    <!-- Header -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="index.html">
                        <h1><span>W</span>eb<span>C</span>oursera</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="index.html" data-after="Home">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Hero Section  -->
    <section id="services">
        <div class="services container">
            <h2 class="label">User Login</h2>
            <form class="login_form"  method="post" name="form">
                <div class="text">Email</div>
                <input autocomplete="off" type="text" name="email">
                <div class="subtext" id="email_error">*Please enter your Email.</div>
                </br>
                <div class="text">Password</div>
                <input type="password" name="password">
                <div class="subtext" id="pass_error">*Please enter your Password.</div>
                </br>
                <button type="submit" name='submit'>Login</button>
            </form>
        </div>
    <!-- End Hero Section  -->

    <!-- Footer -->
    <section id="footer">
        <div class="footer container">
            <div class="brand">
                <h1><span>W</span>eb<span>C</span>oursera</h1>
            </div>
            <h2>Launch your web development career with us today!</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="about.html"><img src="https://img.icons8.com/clouds/2x/about.png" /></a>
                </div>
                <div class="social-item">
                    <a href="contact.html"><img src="https://img.icons8.com/clouds/2x/contact-card.png" /></a>
                </div>
                <div class="social-item">
                    <a href="policy.html"><img src="https://img.icons8.com/fluency/2x/privacy-policy.png" /></a>
                </div>
                <div class="social-item">
                    <a href="terms.html"><img src="https://img.icons8.com/clouds/2x/cash-register.png" /></a>
                </div>
                <div class="social-item">
                    <a href="help.html"><img src="https://img.icons8.com/clouds/2x/help.png" /></a>
                </div>
            </div>
            <p>Copyright © 2021 WebCoursera. All rights reserved.</p>
        </div>
    </section>
    <!-- End Footer -->
    <script src="./valid.js"></script>
    <script src="./app.js"></script>
    <?php

    include './dbms.php';
   
    $conn=OpenCon();
    if(isset($_POST['submit']))
    {
        $mail=$_REQUEST['email'];
        $pass=$_REQUEST['password'];
        
        $sql ="SELECT password FROM user_info WHERE email='$mail'";
        $result= $conn->query($sql);
        if ($result->num_rows > 0)
        {
            $row= $result->fetch_assoc();
            $_SESSION['mail']=$mail;
            // echo $row['password'];
            header("Location:/courses.php");
        } else {
            echo "User not registered";
            ?>
            <script>alert("Login Unsuccessful");</script>
            <?php
        }
    }
    ?>
</body>
</html>