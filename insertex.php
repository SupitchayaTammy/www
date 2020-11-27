<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitfkmitl.mysql.database.azure.com', 'supitchaya@labitfkmitl', 'Labitfkmitl03', 'table_abc', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL:'.mysqli_connect_error());
}

$A = $_POST['A'];
$B = $_POST['B'];

$sql = "INSERT INTO abc (A , B) VALUES ('$A', '$B')";

if (mysqli_query($conn, $sql)) {
    echo 'Successfully';
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  
mysqli_close($conn);
?>