<?php
/**
 * Created by PhpStorm.
 * User: KingCreeperDJ
 * Date: 06/02/2017
 * Time: 12:00
 */

include 'dbconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if ($password == $password2) {
    $sql = 'INSERT INTO users (ID, username, password) VALUES (NULL,"'.$username.'" , "'.$password2.'")';

    if($result = mysqli_query($conn, $sql)) {
                header('Location: ../index.php');
    } else {
        header("Location: ../register.php?error=error creating account");
    }
} else {
    header("Location: ../register.php?error=passwords don't match, try again: ");
}

?>