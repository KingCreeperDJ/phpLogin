<?php
/**
 * Created by PhpStorm.
 * User: KingCreeperDJ
 * Date: 06/02/2017
 * Time: 00:58
 */

if (isset($_GET['error'])) {
    echo $_GET['error'];
}
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>website</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<h1>Welcome!</h1>

<form method="post" action="php/login.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" placeholder="Username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Password" required>

    <input type="submit" value="Login">
</form>

</body>
</html>