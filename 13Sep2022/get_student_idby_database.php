<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<!-- <input type="text" value="" id= "batch"> -->
<button id ="btn1">click me</button>
<h2>student List</h2>
<div id="list">
    
</div>

<select name="" id="batch">
	<option value="" selected>Selected</option>
	<option value="50" >50</option>
	<option value="22" >22</option>
	<option value="40" >40</option>
	<option value="52" >52</option>
	<option value="53" >53</option>



</select>

    <script>
$(document).ready(function () {
	// button a click korle input ar value ta alert a show korbe

//    $("#btn1").click(function() {
//    	var x= $("#btn1").val();
// alert(x);

// $.get('get_student_database.php',{id:x},function(data,status){
// 	$("#list").html(data)
// });


//    });

 // button sara auto refresh hoiye jabe
$("#batch").change(function(){
   	var x= $("#batch").val();
alert(x);

$.get('get_student_database.php',{id:x},function(data,status){
	$("#list").html(data)
});

   });



});
    </script>
</body>
</html>