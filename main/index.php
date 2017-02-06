<?php
/**
 * Created by PhpStorm.
 * User: KingCreeperDJ
 * Date: 06/02/2017
 * Time: 01:23
 */
include "../php/checkloggedin.php";
include '../php/dbconnect.php';

echo '<!DOCTYPE html>
<html>
<head>
    <title>website</title>
    <link rel="stylesheet" type="text/css" href="../css/screen.css">
</head>
<body>';
echo '<h1>Welcome</h1>';
echo "<p>hi ".$_SESSION['username']."</p>";

$sql = 'SELECT * FROM `logins` where username = \''.$_SESSION['username'].'\' ORDER by date desc, time DESC limit 1';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo "<p>last login: </p>".$row['date']." at ".$row['time'];

echo '</body>
</html>';

?>
