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
                <h1 class="section-title">Cascading<span> Style</span> Sheets</h1>
                <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the look and formatting of a document written
                in a markup language. CSS is the language we use to style an HTML document.
                CSS describes how HTML elements should be displayed.
                CSS3 is a latest standard of CSS earlier versions (CSS2).</p>
            </div>
            <?php
                 $conn = OpenCon();
                 $sql = "SELECT css FROM user_info WHERE email='".$_SESSION["mail"]."'";
                 $r = $conn->query($sql);
                 $res= $r->fetch_assoc();
                 $result=$res['css'];
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
                        <iframe src="https://www.youtube.com/embed/gD3G67oPg-w" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 1</h2>
                        <p>First step in a series teaching CSS from beginner to advanced |
                        All the position properties in CSS. Position static, relative, absolute, fixed and sticky are covered in this video.
                        Learn to position elements like a pro!</p>
                    </div>
                    <div class="service-item medium">
                        <iframe src="https://www.youtube.com/embed/1PnVor36_40" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 2</h2>
                        <p>Everything you need to know to get up and running with CSS |
                        Syntax, how to add CSS to your HTML, colors, units, the box model, and best practices by walking
                        through a full example. By the end of this video you will know enough
                        to style any basic web pages in your own projects!</p>
                    </div>
                    <div class="service-item long">
                        <iframe src="https://www.youtube.com/embed/1Rs2ND1ryYc" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h2>Video 3</h2>
                        <p>Full course for beginners. CSS, or Cascading Style Sheet, is responsible for the styling and looks of
                        a website.
                        In this course, we cover CSS from the ground up. You will learn everything from basic skills, such as coloring and text,
                        to highly advanced skills, like custom animations.</p>
                    </div>
                </div>
                <div class="service-reference">
                    <h3>References</h3>
                    <p>HTML and CSS: Visual QuickStart Guide – by Elizabeth Castro and Bruce Hyslop</p>
                    <p>HTML and CSS QuickStart Guide: The Simplified Beginners Guide to Developing a Strong Coding Foundation, Building
                    Responsive Websites, and Mastering … of Modern Web Design – by David Durocher</p>
                    <p>Responsive Web Design with HTML5 and CSS: Develop future-proof responsive websites using the latest HTML5 and CSS
                    techniques – by Ben Frain</p>
                    <p>A Smarter Way to Learn HTML & CSS: Learn it faster. Remember it longer – by Mark Myers</p>
                    <p>Online Tutorial: w3schools.com/css/</p>
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
        var result = "<?php courseToggle($_SESSION['mail'],'css'); ?>";
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