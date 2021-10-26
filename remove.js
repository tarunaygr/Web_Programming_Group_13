var button = document.getElementById("btn-mark-comp")
console.log(button)
function remove() {
    console.log("REMOVE");
    var result = "<?php RemoveUserfromCourse($_SESSION['mail'],'html'); ?>";
    // document.write(result);
   
    button.innerHTML = result+"completed";
    console.log(result);
} 
console.log("dcgfgds");
button.addEventListener('click',remove);