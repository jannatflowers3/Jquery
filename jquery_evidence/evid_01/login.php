<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green{
           background-color:green;
           color:#fff;
           padding:10px;
        }
        .red{
           background-color:green;
           color:#fff;
           padding:10px;
        }
    </style>
</head>
<body>

    <table border='1'>
        <div class="show"></div>
        
    <caption>Login Form</caption>
    <form action="">
        <tr>  
            <td>Email: </td>
            <td><input type="email" id="email"></td>
        </tr>
        <tr>  
            <td>Password :</td>
            <td><input type="password" id="password"></td>
        </tr>
        <tr>  
            <td>&nbsp;</td>
            <td><input type="button" id="login" value="Login"></td>
        </tr>
    </form>
    </table>
 <script src="jquery.min.js"></script>
 
 <script>
    $(function () {
        $("#login").click(function(){

            var em = $("#email").val();
            var pass = $("#password").val();

            // $.get(
            //     'check.php',{email:em,password:pass},function(data,status){
            //         // alert(data)
            //         $(".show").html(data);
            //     } );
              

            $.ajax(
               {
                url:'check.php',
               method:'GET',
               data :{email:em,password:pass},
               success:function(result){
                $(".show").html(result);
                // alert(result)

               }

               })
        })
    });
 </script>
</body>
</html>