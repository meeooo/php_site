<?php
include "db_connect.php";

$query = "SELECT * FROM zapisi";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
{
    $row_text = $row['text'];
    $row_comment = $row['comment'];
    echo "
    <tr>
        <td>$row_text</td>
        <td>$row_comment</td>
    </tr>";
}
?>