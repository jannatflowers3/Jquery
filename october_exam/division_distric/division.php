<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Division List</h1>
    <form action="distict.php" method="post">
        <select  id="division_select">
        <option disabled selected>Selected One</option>
            <?php  
            $db= new mysqli("localhost","root","","wdpf_oct_exam1");
            $sql = "SELECT * FROM division";
           $result =  $db->query($sql);
            while($row = $result->fetch_assoc()){

        
            ?>
          <option value="<?php echo $row['div_id']; ?>"> <?php  echo $row['div_name']; ?></option>
            
<?php

 }
?>
        </select>


        <select id="distict">
            <option value="">  <?php   ?>selected one</option>
        </select>
    </form>
    <div class="show"></div>
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#division_select").change(function(){
             var division =    $(this).val();
             $.post(
                'distict.php',{division:division},function(data){
                    $("#distict").html(data);
                }
             )
            })
        });
    </script>
</body>
</html>