<?php
session_start();
include "db_connect.php";

$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];

$sql = "SELECT * FROM users WHERE user_name = '$user_name' AND user_password = '$user_password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1)
{
    $rows = mysqli_fetch_assoc($result);

    if ($rows['user_name'] === $user_name && $rows['user_password'] === $user_password)
    {
        $_SESSION['user_name'] = $rows['user_name'];
        $_SESSION['user_id'] = $rows['user_id'];

        header("Location: zapis_na_attestaciyu.php");
        exit();
    }
}

header("Location: login_form.php?incorrect_credentials");
exit();
?>