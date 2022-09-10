<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function () {
       $("#btn").click(function(){
       var x =  $("h1").text();
    //    h1 ar text golo k alert a dekhabe
       alert(x);
       })


       $("#btn2").click(function(){
    var y =  $("h1").text();
    $("h2").text(y);
    // h1 ar text ta h2 ar jaigai show korbe
       })

       $("#btn3").click(function(){
    var z =  $("#para1").html();
    $("#content1").html(z);
    // h1 ar text ta h2 ar jaigai show korbe
       })
    });
</script>
</head>
<body>
<button id="btn">btn1 </button>

<button id="btn2">btn2 here</button>
<h1>heading</h1>
<h2></h2>

<button id="btn3">copy past content</button>
<p id ="para1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore natus omnis in numquam sint nam modi quidem quod soluta ipsam.</p>

<div id="content1" style = "color:red;font-size:30px;" >

</div>
</body>
</html>