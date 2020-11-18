<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
id = 0
$id = $_GET['delete_data'];

$del = mysqli_query($conn,"delete from guestbook where delete_data = '$id'");

if($del)
{
    mysqli_close($conn);
    header("location:show.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>
mysqli_close($conn);
?>
