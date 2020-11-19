<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$ID = $_GET['ID'];
$result = mysqli_query($conn, "DELETE FROM guestbook WHERE ID=$ID");
header("Location:guestbook.php");
mysqli_close($conn);
?>
