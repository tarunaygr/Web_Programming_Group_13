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
                        <!-- <li><a href="login.php" data-after="Login">Login</a></li> -->
                        <!-- <li><a href="signup.php" data-after="Signup">Signup</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Projects Section -->
    <section id="projects">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title">Explore <span>Courses</span></h1>
            </div>
            <div class="search-bar">
                <input type="text" name="search-bar-text" id="search-bar-text" placeholder="Search for a course.." name="bar">
                <!-- <input type="submit" id="search-bar-button" name="submit" value="Go!!"> -->
            </div>
            <div class="all-projects" id="all-projects"></div>
        </div>
    </section>
    <!-- End Projects Section -->
    <section id="services">
        <div class="services">
        <h2>COUNT OF ENROLLED STUDENTS IN: </h2><br>
        <div class="list-container">
    <?php

            include 'dbms.php';
            $conn = OpenCon();

            //css
            $css_query = "SELECT * FROM user_info WHERE css=1";
            $css_res = $conn->query($css_query);
            $css_count = mysqli_num_rows($css_res);
            echo "<div><h3>CSS: " .$css_count . "</div><br></h3>"; 

            //html
            $html_query = "SELECT * FROM user_info WHERE html=1";
            $html_res = $conn->query($html_query);
            $html_count = mysqli_num_rows($html_res);
            echo "<div><h3>HTML: " .$html_count . "</div><br></h3>"; 

            //java
            $java_query = "SELECT * FROM user_info WHERE java=1";
            $java_res = $conn->query($java_query);
            $java_count = mysqli_num_rows($java_res);
            echo "<div><h3>JAVA: " .$java_count . "</div><br></h3>"; 

            //javaScript
            $js_query = "SELECT * FROM user_info WHERE js=1";
            $js_res = $conn->query($js_query);
            $js_count = mysqli_num_rows($js_res);
            echo "<div><h3>JAVASCRIPT: " .$js_count . "</div><br></h3>"; 

            //Python
            $python_query = "SELECT * FROM user_info WHERE python=1";
            $python_res = $conn->query($python_query);
            $python_count = mysqli_num_rows($python_res);
            echo "<div><h3>PYTHON: " .$python_count . "</div><br></h3>";
            
            //AJAX
            $ajax_query = "SELECT * FROM user_info WHERE ajax=1";
            $ajax_res = $conn->query($ajax_query);
            $ajax_count = mysqli_num_rows($ajax_res);
            echo "<div><h3>AJAX: " .$ajax_count . "</div><br></h3>";

            CloseCon($conn) ;
    ?>
    </div>
    </div>
</section>
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
    <script>
const searchBar = document.getElementById("search-bar-text");
const allCourses = document.getElementById("all-projects")

let courses = [
    {
        name: "HTML",
        description: "The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. This is a self- paced course. Mastering this would be your first step towards Web Programming.",
        href: "html-course.php",
        image: "https://www.thoughtco.com/thmb/HsI0GYO15xrHeFFKUavQcONnMNc=/1333x1000/smart/filters:no_upscale()/html-space-tag-3466504-790ad68444894806b801ea997b6d6bfc.png",
    },
    {
        name: "CSS",
        description: "Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. This is a 3 week course. Using this one can make their websites visually asthetic.",
        href: "css-course.php",
        image: "https://images.unsplash.com/photo-1523437113738-bbd3cc89fb19?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=2000&fit=max&ixid=eyJhcHBfaWQiOjExNzczfQ",
    },
    {
        name: "Javascript",
        description: "JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high- level, often just -in -time compiled, and multi - paradigm. It has curly - bracket syntax, dynamic typing, prototype - based object - orientation, and first - class functions.",
        href: "js-course.php",
        image: "https://i2.wp.com/www.admecindia.co.in/wp-content/uploads/2020/01/JavaScript-Master-Course.jpg?fit=390%2C355&ssl=1",
    },
    {
        name: "JAVA",
        description: "Java is a powerful general-purpose programming language. It is used to develop desktop and mobile applications, big data processing, embedded systems, and so on. According to Oracle, the company that owns Java, Java runs on 3 billion devices worldwide, which makes Java one of the most popular programming languages.",
        href: "java-course.php",
        image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdeBtw1P7Kv7tVJ3NXL_28wYtjMdKJ1554FA&usqp=CAU",
    },
    {
        name: "AJAX",
        description: "Ajax is a set of web development techniques that uses various web technologies on the client-side to create asynchronous web applications. With Ajax, web applications can send and retrieve data from a server asynchronously without interfering with the display and behaviour of the existing page.",
        href: "ajax-course.php",
        image: "https://img.flaticon.com/icons/png/512/1183/1183639.png?size=1200x630f&pad=10,10,10,10&ext=png&bg=FFFFFFFF",
    },
    {
        name: "Python",
        description: "Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers write clear, logical code for small and large - scale projects.",
        href: "python-course.php",
        image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRF8okYlGPCX6o7v0HyZyDQgLkU041WWrCztQ&usqp=CAU",
    },
];
searchBar.addEventListener("keyup", (e) => {
    const searchString = e.target.value.toLowerCase();
    const filteredCourses = courses.filter((course) => {
        return course.name.toLowerCase().startsWith(searchString);
    });

    displayCourses(filteredCourses);
})

const loadCourses = async () => {

    displayCourses(courses);
}

const displayCourses = (courses) => {
    let htmlString = ""
    
    if(courses.length == 0)
        htmlString = "<h1><bold>No courses found! ☹</bold></h1>"
    else {
        htmlString = courses.map((course) => {
            return `
            <div class="project-item">
                <div class="project-info">
                    <h1>${course.name}</h1>
                    <p>${course.description}</p>
                    <a href="${course.href}" data-after="Go to Course">Go to Course</a>
                </div>
                <div class="project-img">
                    <img src="${course.image}" alt="html">
                </div>
            </div>
        `
        }).join('');
    }

    allCourses.innerHTML = htmlString;
}

loadCourses();</script>
</body>

</html>