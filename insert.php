<<?php

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
    echo <h style="color= rgb(136, 30, 56);font-size=x-large;font-family='Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">"New record created successfully"</h>;
    echo '<br>'
    echo '<td><button href="https://web247.azurewebsites.net/show.php" style="background-color: rgb(136, 30, 56);color: white;border: hidden;font-size: x-large;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Back to home</button></td>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
