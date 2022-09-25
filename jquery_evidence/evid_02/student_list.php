<?php
// echo $_GET['batch_id'];
$batch_id =  $_GET['batch_id'];
$db = new mysqli("localhost","root","","wdpf_batch");
$sql = "SELECT * FROM students WHERE student_batch_id ='$batch_id'";
$result = $db->query($sql);

echo "<option value="" disaled selectred>selected one </option>";
while($row = $result->fetch_assoc()){
   
echo '<option value="'.$row['student_id'].'">'.$row['student_name']."<option>";

     ?>


   
<option value="<?php echo $row['student_batch_id'];?>"><?php echo $row['student_name'];?></option>
<?php
}
?>