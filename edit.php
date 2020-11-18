<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if(isset($_POST['update'])){
	$ID = $_POST['ID'];
	$Name = $_POST['Name'];
	$Comment =  $_POST['Comment'];	
	$result = mysqli_query($mysqli, "UPDATE guestbook SET Name='$Name',Comment='$Comment' WHERE ID=$ID");
	header("Location: show.php");
}
}
?>
<?php
$id = $_GET['ID'];
$result = mysqli_query($mysqli, "SELECT * FROM guestbook WHERE ID=$ID");
while($Result = mysqli_fetch_array($res))
{
$Name = $Result['Name'];
$Comment = $Result['Comment'];
}
mysqli_close($conn);
?>
