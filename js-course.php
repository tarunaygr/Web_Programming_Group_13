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
                <h1 class="section-title">Java<span>script</span>
                <p>JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions.
                    It is among the most powerful and flexible programming languages of the web. 
                    It’s one of the core technologies of web development and can be used on both the front-end and the back-end.</p>
            </div>
            <?php
                 $conn = OpenCon();
                 $sql = "SELECT js FROM user_info WHERE email='".$_SESSION["mail"]."'";
                 $r = $conn->query($sql);
                 $res= $r->fetch_assoc();
                 $result=$res['js'];
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
                        <iframe src="https://www.youtube.com/embed/bG2BmmYr9NQ" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 1</h2>
                        <p>Learn how to create the most basic, simple javascript game that you can make yourself. It's similar
                        to the google dinosaur game that you play when there's no internet.</p>
                    </div>
                    <div class="service-item medium">
                        <iframe src="https://www.youtube.com/embed/39GRFGm2JRY" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 2</h2>
                        <p>In this crash course we will go over the fundamentals of JavaScript including more modern syntax like classes, arrow
                        functions, etc. This is the starting point on my channel for learning JS.</p>
                    </div>
                    <div class="service-item long">
                        <iframe src="https://www.youtube.com/embed/PkZNo7MFNFg" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 3</h2>
                        <p>This complete 134-part JavaScript tutorial for beginners will teach you everything you need to know to get started with
                        the JavaScript programming language.</p>
                    </div>
                </div>
                <div class="service-reference">
                    <h3>References</h3>
                    <p>Effective JavaScript: 68 specific ways to harness the power of JavaScript - by David Herman</p>
                    <p>A Smarter Way to Learn JavaScript - by Mark Myers</p>
                    <p>Eloquent JavaScript - by Marijn Haverbeke</p>
                    <p>JavaScript: The Good Parts - by Douglas Crockford</p>
                    <p>Online Tutorial: w3schools.com/js/</p>
                </div>
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
    <script type="text/javascript">

        function toggle() {
        console.log("REMOVE");
        alert("Reload the page");
        var result = "<?php courseToggle($_SESSION['mail'],'js'); ?>";
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