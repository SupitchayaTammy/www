<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$Name = $_GET['Name'];
$sql = "DELETE FROM guestbook WHERE Name="$Name"";
if (mysqli_query($conn, $sql)) {
  echo "Delete successfully";
  echo '<a href="https://web247.azurewebsites.net/show.php">กลับสู่หน้าตาราง</a>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
