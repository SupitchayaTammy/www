<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$ID = $_POST['ID'];
$sql = "DELETE FROM guestbook WHERE ID='$ID'";
if (mysqli_query($conn, $sql)) {
    echo '<div class="container">
            <h3 style="color: rgb(136, 30, 56);font-size=large">Comment has been deleted successfully.</h3>
            <a href="show.php"><button class="btn btn-primary mt-3" style="background-color: rgb(136, 30, 56);border: hidden; font-size: x-large; color: white">Back to home</button></a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
