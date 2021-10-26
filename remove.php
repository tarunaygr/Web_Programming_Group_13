<?php
include 'dbms.php';

function RemoveUserfromCourse($user,$course)
{
    $conn=OpenCon();
    $sql = "UPDATE user_info SET ".$course."=0 WHERE email='$user'";
    echo $sql;
    $r=$conn->query($sql);
    CloseCon($conn);
}
?>