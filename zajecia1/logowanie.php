<?php
session_start();

if(!empty($_POST)){
    $user = "user123";
    $pass = "pass123";
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    if($_SESSION['username'] == $user && $_SESSION['password'] == $pass)
    {
        header("Location: tekst.php");
    }
    else 
    {
        echo "<script> alert('wrong username or password'); </script>";
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Logowanie </title>
</head>
<body>
    <form action ="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>
