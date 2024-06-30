<?php
session_start();
session_destroy();

$_SESSION['isLogged'] = false;
header('Location: ../loginpage/landingpage.php');

?>