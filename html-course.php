<?php
    session_start();
    include 'dbms.php';
    // include 'add.php';
    // include 'remove.php';
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
                <h1 class="section-title">HTML<span> 5</span></h1>
                <p>HTML5 is the latest and most enhanced version of HTML. Technically, HTML is not a programming language,
                    but rather a
                    markup language. In this tutorial, we will discuss the features of HTML5 and how to use it in practice.
                </p>
            </div>
            <?php
                $conn = OpenCon();
                $sql = "SELECT html FROM user_info WHERE email='".$_SESSION["mail"]."'";
                $r = $conn->query($sql);
                $res= $r->fetch_assoc();
                $result=$res['html'];
                CloseCon($conn);
                // $result = True;
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
                        <iframe src="https://www.youtube.com/embed/qXXknB5bePU" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 1</h2>
                        <p>How To Make Website Using HTML & CSS Step By Step | Modern Website Design Tutorial for beginners.
                            Here in this video, you will learn to create a website using HTML and CSS.</p>
                    </div>
                    <div class="service-item medium">
                        <iframe src="https://www.youtube.com/embed/ZeDP-rzOnAA" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 2</h2>
                        <p>Learn how to build a responsive website from scratch |
                            How can we add css animations and work with flexbox to change up our media queries to
                            make it work on mobile devices.</p>
                    </div>
                    <div class="service-item long">
                        <iframe src="https://www.youtube.com/embed/qz0aGYrrlhU" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 3</h2>
                        <p>HTML Tutorial for Beginners | Learn HTML for a career in web development. This HTML tutorial teaches
                            you everything you
                            need to get started.</p>
                    </div>
                </div>
                <div class="service-reference">
                    <h3>References</h3>
                    <p>Learn HTML for Beginners: The Illustrated Guide to Coding - by Jo Foster</p>
                    <p>Head First HTML and CSS: A Learner’s Guide to Creating Standards-Based Web Pages – by Elisabeth Robson &
                        Eric Freeman</p>
                    <p>A Smarter Way to Learn HTML & CSS: Learn it faster. Remember it longer – by Mark Myers</p>
                    <p>HTML5 and CSS3 All-in-One For Dummies – by Andy Harris</p>
                    <p>Online Tutorial: w3schools.com/css/</p>
                </div>
                <?php
                    // if(isset($_POST['btn-complete'])) {
                    //     echo "COMPLETE!";
                    //     RemoveUserfromCourse($_SESSION["mail"],'html');
                    // }

                ?>
                <!-- <form method="POST" id="mark-comp"> -->
                <button id="btn-mark-comp" onClick="document.getElementById('btn-mark-comp').innerHTML ='Completed';">Mark as Complete</button>
                <!-- </form> -->
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
    <!-- <script src="./remove.js"></script> -->
    <script type="text/javascript">
        function toggle() {
        console.log("REMOVE");
        alert("Reload the page");
        var result = "<?php courseToggle($_SESSION['mail'],'html'); ?>";
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