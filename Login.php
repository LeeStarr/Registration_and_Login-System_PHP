<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['error']))
    {
        if ($_GET['error']=="none")
            echo "<p>You are logged in</p>";
    }
    else  echo "<p>You are logged out</p>";
    ?>
    <form action="login_include.php" method="POST">
        <fieldset>
            <legend><h1>Login</h1></legend>

            <output> Enter Email:<input type="email" name="email"></output><br><br>
            <output> Enter Password:<input type="password" name="password"></output>

            <button type="submit" name="submit" value="submit">LOGIN</button>
        </fieldset>
    </form>
</body>
</html>