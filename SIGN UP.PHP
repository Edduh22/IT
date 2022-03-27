<?php
session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //save to database
        $user_id= random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('user_id','user_name','password')";
        mysqli_query( $con,$query);
        header("location:student login.php");
        die;

    }
    else{
        echo "please enter valid information!";
    }
}


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
    <title>Sign up</title>
</head>
<body>
<div id="box">
<div id="header">
        <caption>Sign up</caption>

    </div>
    <form method="POST">
        <div style="font-size: 20px;margin: 10px; color:white">sign up</div>
        <input id="text" type="text" name="username" placeholder="enter ID as username"><br><br>
        <input id="text" type="password" name="password" placeholder="enter ID as password"><br><br>
        <input id="button" type="submit" value="sign up"><br><br>
        <a href="student login.php">Click here to login</a>
         
</form>
</div>
    
</body>
</html>
