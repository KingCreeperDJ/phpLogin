<?php
/**
 * Created by PhpStorm.
 * User: KingCreeperDJ
 * Date: 06/02/2017
 * Time: 01:03
 */
include 'dbconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = 'select * from users where username="'.$username.'"';

if($result = mysqli_query($conn, $sql)) {
    while($row = mysqli_fetch_assoc($result)){
        if($row['username'] == $username and $row['password'] == $password) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: ../main/index.php');
        } else {
            header('Location: ../index.php?error=wrong credentials, please try again');
        }
    }
}

?>