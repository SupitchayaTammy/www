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
            <h3>Comment has been deleted successfully.</h3>
            <a role="button" class="btn btn-primary mt-3" href="show.php" style="background_color= rgb(136, 30, 56);color= white">กลับสู่หน้าหลัก</a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
