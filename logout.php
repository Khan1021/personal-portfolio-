<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
    

    

<!--handle log out-->
    <?php
    session_start();
    session_unset();
    session_destroy();


    //go back to where user login form
    header("Location: login.php");

    exit();



    ?>
</body>
</html>