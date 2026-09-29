<?php

session_start();

session_unset();
session_destroy();

header("Location: /employee_managment/login.php");
exit();

?>