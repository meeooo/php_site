<?php
include "db_connect.php";

$user_id = $_SESSION['user_id'];
$get_user_data_query = "SELECT first_name, last_name, patronym FROM users_data WHERE user_id = $user_id";
$get_user_data_result = mysqli_query($conn, $get_user_data_query);

if (mysqli_num_rows($get_user_data_result) > 0)
{
    $user_data_row = mysqli_fetch_assoc($get_user_data_result);
    $first_name = $user_data_row['first_name'];
    $last_name = $user_data_row['last_name'];
    $patronym = $user_data_row['patronym'];
}
else
{
    $first_name = "";
    $last_name = "";
    $patronym = "";
}

echo "<input type='hidden' name='Фамилия' value='$last_name'>";
echo "<input type='hidden' name='Имя' value='$first_name'>";
echo "<input type='hidden' name='Отчество' value='$patronym'>";
?>