<?php
//Starting session
session_start();

//Storing session data
$_SESSION["firstname"]="Shiyin";
$_SESSION["lastname"]="Weng";

//Accessing sessio data
echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];

//Destroying session
session_destroy();
?>
