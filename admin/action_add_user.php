<?php
include("../includes/db.php");

$n = $_POST["name"];
$e = $_POST["email"];
$p = $_POST["password"];

$phone = $_POST["phone"];
$department = $_POST["department"];
$designation = $_POST["designation"];
$joining_date = $_POST["joining_date"];
$gender = $_POST["gender"];
$address = $_POST["address"];

$q = $_FILES["img"]["name"];

if (!empty($q)) {
    move_uploaded_file($_FILES["img"]["tmp_name"], "../uploads/" . $q);
}

$sql = "INSERT INTO users
(name, email, password, image, type, phone, department, designation, joining_date, gender, address)
VALUES
('$n', '$e', '$p', '$q', '2', '$phone', '$department', '$designation', '$joining_date', '$gender', '$address')";

$result = mysqli_query($con, $sql);

if ($result) {
    header("location:users.php");
    exit();
} else {
    die("Insert Error: " . mysqli_error($con));
}
?>