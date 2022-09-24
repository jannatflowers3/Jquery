<?php
// echo $_GET['batch_id'];
$batch_id =  $_GET['batch_id'];
$db = new mysqli("localhost","root","","wdpf_batch");
$sql = "SELECT * FROM students WHERE student_batch_id ='$batch_id'";
$result = $db->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>student id</th>
            <th>student name</th>
            <th>student id</th>
        </tr>
        <?php
while($row = $result->fetch_assoc()){
    // echo "<br>";
     ?>
        <tr>
            <td><?php echo $row['student_id'];?></td>
            <td><?php echo $row['student_name'];?></td>
            <td><?php echo $row['student_batch_id'];?></td>
        </tr>
        <?php
}
   
        ?>
    </table>
</body>
</html>

