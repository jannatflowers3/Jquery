<?php
$db = new mysqli("localhost","root","","wdpf_batch");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
    <script>
        $(function () {
            $("#batch_id").change(function(){
              var id =  $(this).val();
              $.get(
              'student_list.php',{batch_id:id},function(data){
                $("#studentid").html(data);
                // alert(data);
              }

              )

            })

        });
    </script>
</head>
<body>
    <h1> Student batch list</h1>
<form action="">
    <select id="batch_id">
        <option selected disabled> Selecte One</option>
        <?php
               $sql = "SELECT * FROM batches";
               $result = $db->query($sql);
               while($row = $result->fetch_assoc()){

               
        ?>
        <option value="<?php  echo $row['batch_id']?>"><?php  echo $row['batch_name']?></option>
        

        <?php
        }
        ?>
    </select>
    <select id="studentid">
      <option value="" disabled selected> selected one</option>
    </select>
</form>
</body>
</html>