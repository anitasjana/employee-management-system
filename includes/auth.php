<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: /employee_managment/login.php");
    exit();
}
$current_path = $_SERVER['PHP_SELF'];

if ($_SESSION['type'] == '1' && strpos($current_path, '/employee/') !== false) {
    header("Location: /employee_managment/admin/dashboard.php");
    exit();
}

if ($_SESSION['type'] == '2' && strpos($current_path, '/admin/') !== false) {
    header("Location: /employee_managment/employee/dashboard.php");
    exit();
}
?>