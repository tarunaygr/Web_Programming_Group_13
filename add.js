function add() {
    alert("testclick2");
    var r = "<?php AddUsertoCourse($_SESSION['mail'],'html'); ?>";
    // document.write(result);
    document.getElementById("btn-enroll").innerHTML = r+"Enrolled";
} 