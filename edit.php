<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if(isset($_POST['edit_data'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age =  $_POST['age'];	
	$result = mysqli_query($mysqli, "UPDATE guestbook SET name='$name',comment='$comment' WHERE id=$id");
	header("Location: show.php");
}
}
?>
<?php
$id = $_GET['edit_data'];
$result = mysqli_query($mysqli, "SELECT * FROM guestbook WHERE id=$id");
while($Result = mysqli_fetch_array($res))
{
$name = $Result['name'];
$age = $Result['comment'];
}
?>
mysqli_close($conn);
?>
