  <?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$name = $_POST['name'];
$comment = $_POST['comment'];
$sql = "INSERT INTO guestbook (Name , Comment) VALUES ('$name', '$comment')";
if (mysqli_query($conn, $sql)) {
    echo "Update successful"
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
