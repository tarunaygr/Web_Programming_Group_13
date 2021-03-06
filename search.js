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
        name: "CaSS",
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
alert(courses[0]['href']);
searchBar.addEventListener("keyup", (e) => {
    const searchString = e.target.value.toLowerCase();
    const filteredCourses = courses.filter((course) => {
        return course.name.toLowerCase().startsWith(searchString);
    });

    console.log(filteredCourses);
    displayCourses(filteredCourses);
})

const loadCourses = async () => {
    console.log(courses);
    displayCourses(courses);
}

const displayCourses = (courses) => {
    let htmlString = ""
    
    if(courses.length == 0)
        htmlString = "<h1><bold>No courses found! ???</bold></h1>"
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

loadCourses();