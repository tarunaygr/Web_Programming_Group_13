<!DOCTYPE html>
<html>
<body>
<?php
// include 'dbms.php'
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "users";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

 function RemoveUserfromCourse($user,$course)
 {
     $conn=OpenCon();
     $sql = "UPDATE user_info SET ".$course."=0 WHERE email='$user'";
     echo $sql;
     $r=$conn->query($sql);
     echo $r;
     CloseCon($conn);
 }
 function AddUsertoCourse($user,$course)
{
    $conn=OpenCon();
    $sql = "UPDATE user_info SET ".$course."=1 WHERE email='$user'";
    echo $sql;
    $r=$conn->query($sql);
    CloseCon($conn);
}
function courseToggle($user,$course)
{
    $conn=OpenCon();
    $sql = "SELECT * FROM user_info WHERE email='$user'";
    
    $res=$conn->query($sql);
    $row = $res->fetch_assoc();
    $value=$row[$course];
    echo "OG=".$value;
    if($value==1)
    {
        $s = "UPDATE user_info SET ".$course."=0 WHERE email='$user'";
    }
    else
    {
        $s = "UPDATE user_info SET ".$course."=1 WHERE email='$user'";
    }
    $r=$conn->query($s);

    $sql = "SELECT * FROM user_info WHERE email='$user'";
    
    $res=$conn->query($sql);
    $row = $res->fetch_assoc();
    $value=$row[$course];
    echo "Value=".$value;
    CloseCon($conn);


}

//  }
//    $connection= OpenCon()
?>

</body>
</html>
