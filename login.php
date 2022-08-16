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
        <h2>Login</h2>
        <form method="POST" action="logincontrol.php">
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" value="Go">
            </a>
        </form>
    </div>

</body>

</html>