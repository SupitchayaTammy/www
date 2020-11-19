<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
} 
	$ID = $_POST["ID"];
	$Name = $_POST["Name"];
	$Comment = $_POST["Comment"];
	
	$sql = "UPDATE tb_member SET  
			Name=$Name ,
			Commment=$Comment ,   
			WHERE ID=$ID ";
 
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
header("Location:show.php");
mysqli_close($conn);
?>
 


