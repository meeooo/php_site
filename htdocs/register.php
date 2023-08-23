<?php

session_start();
include "db_connect.php";

$login = $_POST['user_name'];
$password = $_POST['user_password'];

$get_user_id_query = "SELECT user_id FROM users WHERE user_name = '$login'";
$check_login_result = mysqli_query($conn, $get_user_id_query);

if (mysqli_num_rows($check_login_result) > 0)
{
    header("Location: register_form.php?incorrect_credentials");
    exit();
}

$first_name = $_POST['Имя'];
$last_name = $_POST['Фамилия'];
$patronym = $_POST['Отчество'];

$birth_date = $_POST['Дата_рождения'];
$phone_number = $_POST['Номер_телефона'];

$add_user_query = "INSERT INTO users (user_id, user_name, user_password) VALUES (NULL, '$login', '$password')";
mysqli_query($conn, $add_user_query);

$get_user_id_result = mysqli_query($conn, $get_user_id_query);
$user_id_row = mysqli_fetch_assoc($get_user_id_result);
$user_id = $user_id_row['user_id'];

$add_user_info_query = "INSERT INTO users_data (user_id, first_name, last_name, patronym, birth_date, phone_number) VALUES ($user_id, '$first_name', '$last_name', '$patronym', '$birth_date', '$phone_number')";
mysqli_query($conn, $add_user_info_query);

$_SESSION['user_name'] = $login;
$_SESSION['user_id'] = $user_id;

header("Location: zapis_na_attestaciyu.php");
?>