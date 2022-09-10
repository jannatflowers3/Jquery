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

<p>1Lorem ipsum dolor sit amet.</p>
<p> 2 Lorem ipsum dolor sit amet.</p>
<p>3Lorem ipsum dolor sit amet.</p>

<ul>
    <li>Bangladesh</li>
    <li>Srilanka</li>
    <li>Idia</li>
</ul>
<div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, laborum. Sapiente sit quaerat et iusto voluptatem, odit necessitatibus doloribus accusantium doloremque, vero veniam reprehenderit accusamus, quis at tempore debitis possimus?</p></div>
<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, laborum. Sapiente sit quaerat et iusto voluptatem, odit necessitatibus doloribus accusantium doloremque, vero veniam reprehenderit accusamus, quis at tempore debitis possimus?</div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, laborum. Sapiente sit quaerat et iusto voluptatem, odit necessitatibus doloribus accusantium doloremque, vero veniam reprehenderit accusamus, quis at tempore debitis possimus?</div>

<script>

    $(document).ready(function() {
            $("p:first-child").css("color","blue");
            $("div:first-child").css("background-color","gray");
            $("li:first-child").css("font-size","60px");

            $("p:last-child").css("color","red");
            $("div:last-child").css("background-color","green");
            $("li:last-child").css("font-size","90px");
        
    });
</script>

</body>
</html>