<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
id = 0
if (isset($_GET['delete_data'])) {
	$id = $_GET['delete_data'];
	mysqli_query($conn, "DELETE FROM guestbook WHERE id=$id");
	$_SESSION['message'] = "Address deleted!";
    header('location: show.php');
}
mysqli_close($conn);
?>
