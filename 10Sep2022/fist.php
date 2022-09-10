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
            $("p.first").css("background-color","yellow");
            $("div:first").css("background-color","red");
            $("li:first").css("font-size","20px");
        })
    });

    // button a click sara 
    $(document).ready(function () {
            $("p:last").css("color","blue");
            $("div:first").css("background-color","gray");
            $("li:first").css("font-size","60px");
        
    });
</script>
<button >click here</button>
<ul>
    <li>Bangladesh</li>
    <li>Srilanka</li>
    <li>Idia</li>
</ul>
<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, laborum. Sapiente sit quaerat et iusto voluptatem, odit necessitatibus doloribus accusantium doloremque, vero veniam reprehenderit accusamus, quis at tempore debitis possimus?</div>
<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, laborum. Sapiente sit quaerat et iusto voluptatem, odit necessitatibus doloribus accusantium doloremque, vero veniam reprehenderit accusamus, quis at tempore debitis possimus?</div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, laborum. Sapiente sit quaerat et iusto voluptatem, odit necessitatibus doloribus accusantium doloremque, vero veniam reprehenderit accusamus, quis at tempore debitis possimus?</div>

<p>1 Lorem ipsum dolor sit amet.</p>
<p> 2  Lorem ipsum dolor sit amet.</p>
<p>3 Lorem ipsum dolor sit amet.</p>


</body>
</html>