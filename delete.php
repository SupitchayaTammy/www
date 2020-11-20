<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Database Lab</title>
<style>
    body {background-color: #ffe4e1;text-align: center;color:rgb(136, 30, 56);font-size: larger;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
    h3 {color: rgb(136, 30, 56);font-size: xx-large}
    .btn-dl {background-color: rgb(136, 30, 56);border: hidden; font-size: x-large; color: white}
</style>
</head>
<body>
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
            <h3">Comment has been deleted successfully.</h3><br>
            <a href="show.php"><button class="btn-dl">Back to home</button></a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
