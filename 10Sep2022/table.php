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
    <h1>Table jquery</h1>
    <script>
        $(document).ready(function(){
            $("tr:even").css("background-color","yellow");
            $("tr:odd").css("background-color","gray");


        })
    </script>
    <table border='1'>
        <tr>
            <td>Company</td>
            <td>Country</td>

        </tr>
        <tr>
        <tr>
            <td>WALTON</td>

            <td>BANGLADESH</td>
    </tr>
        <tr>
        
           
            <td>OPPO</td>
            <td>INDIA</td>
        </tr>
        <tr>
       
        <td>NOKIA</td>
            <td>UK</td>
          
        </tr>

    </table>
</body>
</html>