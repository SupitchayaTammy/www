<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if (isset($_GET['edit_data'])) {
		$id = $_GET['edit_data'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM guestbook WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$commen = $n['comment'];
		}
	}

mysqli_close($conn);
?>
