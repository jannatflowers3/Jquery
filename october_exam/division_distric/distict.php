
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <select id="distict">
        <option selected disabled>Selected one</option>


        <?php
      $db= new mysqli("localhost","root","","wdpf_oct_exam1");
 $division = $_POST['division'];
      $sql = "SELECT * FROM distict WHERE  dist_divid= '$division'";
     
      $result = $db->query($sql);
      while($row = $result->fetch_assoc()){
?>
<option value="<?php echo $row['div_id']?>"> <?php  echo $row['dist_name']?></option>
<?php
      }

?>

    </select>
    </form>
</body>
</html>