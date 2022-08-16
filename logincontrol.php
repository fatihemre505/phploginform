<?php

if (isset($_POST['username']) || isset($_POST['password'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
} ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="login-box">
        <a class="mainpagebtn" href="login.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Go Back</a>

        <p style="color: #fff;">User Name : <?php echo $username; ?></p>
        <p style="color: #fff;">Password : <?php echo $password; ?></p>

    </div>



</body>

</html>