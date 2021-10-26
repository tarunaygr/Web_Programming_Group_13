<?php
include 'dbms.php';

function AddUsertoCourse($user,$course)
{
    $conn=OpenCon();
    $sql = "UPDATE user_info SET ".$course."=1 WHERE email='$user'";
    echo $sql;
    $r=$conn->query($sql);
    CloseCon($conn);
}
?>