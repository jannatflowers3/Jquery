<?php
// echo "hello";

include("db_confiq.php");
// echo $_GET['email'];
// echo $_GET['password'];
$email =  $_GET['email'];
$pass =  $_GET['password'];
$pass = sha1($pass);
$sql = "SELECT * From users WHERE email = '$email' AND password = '$pass'";
$result = $db->query($sql);
if($result->num_rows ==1){
    echo " <span class='green'>valid user </span>";
}
else{
    echo "<span class='red'>invalid user</span>";
}
?>