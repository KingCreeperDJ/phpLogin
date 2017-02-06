<?php
/**
 * Created by PhpStorm.
 * User: KingCreeperDJ
 * Date: 06/02/2017
 * Time: 11:59
 */

session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();

?>