<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       
       $conn = new mysqli($servername, $username, $password);
       
       if($conn->connect_error)
       {
           die("connection failed: " . $conn->connect_error);
       }
       echo "conncted successfully";
        ?>
    </body>
</html>
