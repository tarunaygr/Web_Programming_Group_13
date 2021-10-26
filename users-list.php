<?php
    session_start();
    include 'dbms.php';
?>

<!DOCTYPE html>
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
                        <li><a href="courses.html" data-after="Courses">Courses</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Hero Section  -->
    <section id="services">
        <div class="services">
            <h2 class="label">List of Users Enrolled in WebCoursera</h2>
            <div class='list-container'>

                <?php 
                    $conn = OpenCon();
                    $sql = "SELECT first_name, last_name FROM user_info";
                    $result = $conn->query($sql);

                    if ($result->num_rows>0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<div><h2>".$row['first_name']." ".$row['last_name']."</div><h2><br>";
                        }
                    } else {
                        echo "<div>No users enrolled!</div>";
                    }
                    CloseCon($conn);
                ?>
            </div>
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
        <script src="./app.js"></script>
</body>

</html>