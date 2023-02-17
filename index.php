<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <!--<h3>Login</h3>-->
            <form action="">
                <label>Username</label>
                <input type="username" name="username" placeholder="username">
                <label>Email</label>
                <input type="email" name="email" placeholder="email">
                <label>Password</label>
                <input type="password" name="password" placeholder="password">

                <button>Login</button>
            </form>
        </div>

    </div>
</body>

</html>

<?php
    extract($_REQUEST);
    $file=fopen("form.text" , "a");

    fwrite($file , "name :");
    fwrite($file , $username . "\n");
    fwrite($file , "Email :");
    fwrite($file , $email . "\n");
    fwrite($file , "Password :");
    fwrite($file , $password . "\n");
    fclose($file);
?>