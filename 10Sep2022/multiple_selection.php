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
<script>
    $(document).ready(function () {
        $("button").click(function(){
            $("p,h1").css("color","blue");
        })
    });
</script>
<button >click here</button>
<p class ="p_hide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore natus omnis in numquam sint nam modi quidem quod soluta ipsam.</p>
<h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, perferendis?</h1>


</body>
</html>