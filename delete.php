<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$name = $_REQUEST['name'];
$sql = "DELETE FROM show WHERE name="$name"";
if (mysqli_query($conn, $sql)) {
    echo "window.location = 'show.php'; ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
