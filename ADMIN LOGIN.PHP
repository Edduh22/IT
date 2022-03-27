<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            margin: 200px;
            border: 200px;
            background:brown;
        }
        #header{
            width: 100%;
            height: 30px;
            background: blue;
            color: white;
        }
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }
        #box{
            background-color: grey;
            margin: auto;
            width: 500px;
            padding: 20px;
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
</head>
<body>
    <div id="box">
<div id="header">
        <caption>Login</caption>

    </div>
    <form method="POST">
        <div style="font-size: 20px;margin: 10px; color:white">Admin login</div>
        <input id="text" type="text" name="username"><br><br>
        <input id="text" type="password" name="password"><br><br>
        <input id="button" type="submit" value="login">   <input id="button" type="submit" value="reset password"><br><br>
         
</form>
</div>
    
</body>
</html>
