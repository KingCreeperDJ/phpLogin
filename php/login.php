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
$date = date("l d F Y");
$time = (date("H")+1).date(":i s")."s";

$sql = 'select * from users where username="'.$username.'"';
$loginsql = 'INSERT INTO `logins` (`username`, `date`, `time`) VALUES (\''.$username.'\', \''.$date.'\', \''.$time.'\')';

if($result = mysqli_query($conn, $sql)) {
    while($row = mysqli_fetch_assoc($result)){
        if($row['username'] == $username and $row['password'] == $password) {
            $resultlogin = mysqli_query($conn, $loginsql);
            session_start();
            $_SESSION['username'] = $username;
            header('Location: ../main/index.php');
        } else {
            header('Location: ../index.php?error=wrong credentials, please try again');
        }
    }
}

?>