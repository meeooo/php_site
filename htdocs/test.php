<?php
if (session_status() === PHP_SESSION_NONE)
{
    session_start();
}

$text = null;
$comment = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

if (array_key_exists('postdata', $_SESSION)) {
    include "db_connect.php";

    $user_id = $_SESSION['user_id'];

    $text = $_SESSION['postdata']['text'];
    if (isset($_SESSION['postdata']['Комментарий'])) {
        $comment = $_SESSION['postdata']['Комментарий'];
    }

    $query = "INSERT INTO zapisi (id, user_id, text, comment) VALUES (NULL, '$user_id', '$text', '$comment')";
    $result = mysqli_query($conn, $query);
    
    unset($_SESSION['postdata']);
}
?>