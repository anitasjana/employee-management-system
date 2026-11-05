<?php

include("../includes/auth.php");
include("../includes/db.php");

$user_id = (int) $_SESSION['user_id'];
$name = $_SESSION['name'];

$s_date = $_POST["s_date"];
$e_date = $_POST["e_date"];
$sub = $_POST["sub"];
$reason = $_POST["reason"];

$sql = "INSERT INTO leave_approve
(user_id, name, start_date, last_date, subject, reason, status)
VALUES (?, ?, ?, ?, ?, ?, '0')";

$stmt = mysqli_prepare($con, $sql);

if (!$stmt) {
    die("Prepare Error: " . mysqli_error($con));
}

mysqli_stmt_bind_param(
    $stmt,
    "isssss",
    $user_id,
    $name,
    $s_date,
    $e_date,
    $sub,
    $reason
);

if (mysqli_stmt_execute($stmt)) {
    header("Location: leave_table.php");
    exit();
} else {
    die("Insert Error: " . mysqli_stmt_error($stmt));
}

?>