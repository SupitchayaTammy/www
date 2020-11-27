<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya247.mysql.database.azure.com', 'supitchaya247@supitchaya247', 'Labitftest01', 'itftest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL:'.mysqli_connect_error());
}

$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$sql = "INSERT INTO bmi (name , height , weight) VALUES ('$name', '$height', '$weight')";

if (mysqli_query($conn, $sql)) {
    echo '<div class="container">
            <h3>Saved successfully.</h3>
            <a href="showform.php"><bottom class="btn-insert">Back to home</a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>
