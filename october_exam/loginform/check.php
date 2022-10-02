<?php
$db = new mysqli("localhost","root","","wdpf_oct_exam1");

$email =$_POST['email'];
// alert $_POST['email'];
$pass =$_POST['pass'];

$sql = "SELECT * FROM loginform WHERE email = '$email' AND password ='$pass'";
$result = $db->query($sql);

if($result->num_rows==  1){
    echo "<div class='valid'> valid email </div>";
}
else{
    echo "<div class='invalid'> invalid email </div>";
}
?>