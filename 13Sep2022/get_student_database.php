<?php


$id =  $_GET['id'];

// database theke data output dekhano hosse
$db = new mysqli("localhost","root","","wdpf51");
$sql = "SELECT * FROM students WHERE student_batch = $id";
$result = $db->query($sql);
if($result->num_rows>0){



?>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Student Id</th>
		<th>Student Name</th>
		<th>Student Email</th>
		<th>Student Phone</th>
	</tr>
<?php
while($row = $result->fetch_assoc()) { ?>

	<tr>
		<td> <?php echo  $row['id']?></td>
		<td> <?php echo  $row['student_id']?></td>
		<td> <?php echo  $row['student_name']?></td>
		<td> <?php echo  $row['student_email']?></td>
		<td> <?php echo  $row['student_phone']?></td>

		
	</tr>
	<?php
}

	?>
</table>
<?php
}

?>
else{
	echo "<h2>No Data</h2>"
}