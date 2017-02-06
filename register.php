<?php
/**
 * Created by PhpStorm.
 * User: KingCreeperDJ
 * Date: 06/02/2017
 * Time: 11:57
 */

if (isset($_GET['error'])) {
    echo $_GET['error'];
}
include "php/logout.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>website</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<h1>Register</h1>

<form method="post" action="php/register.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" placeholder="Username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Password" required>

    <label for="password2">Re-enter password:</label>
    <input type="password" name="password2" id="password2" placeholder="Password" required>

    <input type="submit" value="Register">
</form>

<p>Have an account? go back to <a href="index.php">login</a></p>

</body>
</html>
