<?php
/**
 * Created by PhpStorm.
 * User: KingCreeperDJ
 * Date: 06/02/2017
 * Time: 01:51
 */
session_start();

if ($_SESSION['username'] == "") {
    header('Location: ../index.php?error=NotAutorized');
}
?>