<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Add/title>
</head>
<body>
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
    echo '<div class="container">
            <h3>Comment has been saved in to the database successfully.</h3>
            <a class="btn btn-primary mt-3" href="show.php"><button>Back to home</button></a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>
</body>
</html>
