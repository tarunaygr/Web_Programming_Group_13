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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js">
    </script>
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
                        <li><a href="courses.php" data-after="Courses">Courses</a></li>
                        <li><a href="index.html" data-after="Logout">Logout</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Service Section -->
    <section id="services">
        <div class="services container">
            <div class="service-top">
                <h1 class="section-title"><span>J</span>ava</h1>
                    <p>Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation
                    dependencies as possible. It is a general-purpose programming language intended to let application developers write
                    once, run anywhere, meaning that compiled Java code can run on all platforms that support Java without the
                    need for recompilation.</p>
            </div>
            <?php
                // echo "User mail is " . $_SESSION["mail"] . ".<br>";
                $conn = OpenCon();
                $sql = "SELECT java FROM user_info WHERE email='".$_SESSION["mail"]."'";
                $r = $conn->query($sql);
                $res= $r->fetch_assoc();
                $result=$res['java'];
                CloseCon($conn);
                // $data = True;
            ?>
            <?php if ( $result == true ) : ?>
                <div class="checkboxes">
                    <label>
                        <input type="checkbox" name="colorCheckbox" value="short" checked="true"> Short</label>
                    <label>
                        <input type="checkbox" name="colorCheckbox" value="medium" checked="true"> Medium</label>
                    <label>
                        <input type="checkbox" name="colorCheckbox" value="long" checked="true"> Long</label>
                </div>
                <div class="service-bottom">
                    <div class="service-item short">
                        <iframe src="https://www.youtube.com/embed/tlS9S97CPAk" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 1</h2>
                        <p>Learn how to use Collections API. And we`re gonna use ArrayList to iterate through objects and print them to the console.</p>
                    </div>
                    <div class="service-item medium">
                        <iframe src="https://www.youtube.com/embed/kJ0PKUMWnQI" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 2</h2>
                        <p>In this crash course we will go over the fundamentals of Java | Overview | 
                        Setup | Printing | Variables & Data Types | Casting | User Input |
                        Arrays | Methods  | Conditional Statements | Loops | Exception Catching |
                        Classes & Objects</p>
                    </div>
                    <div class="service-item long">
                        <iframe src="https://www.youtube.com/embed/UmnCZ7-9yDY" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 3</h2>
                        <p>Java tutorial for beginners - Learn Java, the language behind millions of apps and websites. </p>
                    </div>
                </div>
                <div class="service-reference">
                    <h3>References</h3>
                    <p>Core Java Volume I – Fundamentals - by Cay S. Horstmann</p>
                    <p>Effective Java - by Joshua Bloch</p>
                    <p>Java: A Beginner’s Guide - by Herbert Schildt</p>
                    <p>Head First Java - by Kathy Sierra & Bert Bates</p>
                    <p>Online Tutorial: w3schools.com/java/</p>
                </div>
            <button id="btn-mark-comp" onClick="document.getElementById('btn-mark-comp').innerHTML ='Completed';">Mark as Complete</button>
            <?php else : ?>
                    <button id="btn-enroll" onClick="alert('Reload the Page');document.getElementById('btn-enroll').innerHTML ='Enrolled';">Enroll</button>
            <?php endif; ?>
        </div>
    </section>
    <!-- End Service Section -->

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
    <script type="text/javascript">

        function toggle() {
        console.log("REMOVE");
        alert("Reload the page");
        var result = "<?php courseToggle($_SESSION['mail'],'java'); ?>";
        // document.write(result);
        document.getElementById("btn-enroll").innerHTML = result+"Enrolled";
        document.getElementById("btn-mark-comp").innerHTML = result+"completed";
        } 

        console.log("dcgfgds");
        document.getElementById("btn-mark-comp").addEventListener('click',toggle);
        document.getElementById("btn-enroll").addEventListener('click',toggle);

        $(document).ready(function () {
            $('input[type="checkbox"]').click(function () {
                var inputValue = $(this).attr("value");
                $("." + inputValue).toggle();

            });
        });
    </script>
</body>

</html>