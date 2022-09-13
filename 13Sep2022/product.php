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

<h2>Product List</h2>
<div id="list">
    
</div>
    <script>

$(document).ready(function () {
    // $.get('get_data.php',function(data,status){
    //     $('#list').html(data)
    // });
    // get method ar doita parametter diye kora


 $.get('get_data.php',{id:1},function(data,status){
        $('#list').html(data)
    });
 // get method ar 3 ta parametter diye kora

  
});
    </script>
</body>
</html>