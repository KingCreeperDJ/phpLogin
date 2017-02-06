<?php
/**
 * Created by PhpStorm.
 * User: KingCreeperDJ
 * Date: 06/02/2017
 * Time: 01:23
 */
include "../php/checkloggedin.php";
echo '<!DOCTYPE html>
<html>
<head>
    <title>website</title>
    <link rel="stylesheet" type="text/css" href="../css/screen.css">
</head>
<body>';
echo '<h1>Welcome</h1>';
echo "<p>hi ".$_SESSION['username']."</p>";

echo '</body>
</html>';

?>
