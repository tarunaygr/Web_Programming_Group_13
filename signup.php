<!DOCTYPE html>
<?php
include 'dbms.php';
?>
<html lang="en">

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
            <h2 class="label">User Registration</h2>
            <!-- <form class="login_form" action="courses.php" method="post" name="form" onsubmit="return validated()"> -->
            <form class="login_form"  method="post" name="form">
                <div class="text">First Name</div>
                <input autocomplete="off" type="text" name="fname">
                <div class="subtext" id="fname_error">*Please enter your first name.</div>
                </br>
                <div class="text">Last Name</div>
                <input autocomplete="off" type="text" name="lname">
                <div class="subtext" id="lname_error">*Please enter your last name.</div>
                </br>
                <div class="text">Email</div>
                <input autocomplete="off" type="text" name="email">
                <div class="subtext" id="email_error">*Please enter your Email.</div>
                </br>
                <div class="text">Password</div>
                <input type="password" name="password">
                <div class="subtext" id="pass_error">*Please enter your Password.</div>
                </br>
                <button type="submit" name='submit'>Signup</button>
            </form>
        </div>
        <?php
            $fname="fdg";
            
            if(isset($_POST['submit'])) {
                $mail=$_REQUEST['email'];
                $pass=$_REQUEST['password'];
                $fname=$_REQUEST['fname'];
                $lname=$_REQUEST['lname'];
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                $conn=OpenCon();
                $sql = "INSERT INTO user_info (first_name, last_name, email, password) VALUES ('$fname', '$lname','$mail','$hash')";
                // echo $sql;
                $result = $conn->query($sql);   
                CloseCon($conn);
                if($result==false)
                {
                    echo "<script>alert('Registration Unsuccessful');</script>";
                }
                else{
                    header("Location:/login.php");
                }

            }
            
           
        ?>
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
</body>

</html>