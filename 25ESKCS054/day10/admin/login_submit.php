<?php 
session_start();
include('../common/db_connect.php');
$email = $_POST['email'];
$password = $_POST['password'];
        // echo "</pre>";
        // print_r($_POST);
        // echo "</pre>";
$query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if (count($row) !== 0) {
    $_SESSION['admin'] = $row;
    $_SESSION['is_loggedIn'] = true;
    header('Location: students  .php');
    exit;
} else {
    header('Location: index.php');
    exit;
}
