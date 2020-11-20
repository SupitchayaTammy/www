<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Database Lab</title>
<style>
    body {background-color: #ffe4e1;text-align: center;color:rgb(136, 30, 56);font-size: larger ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
    h3 {color: rgb(136, 30, 56);font-size: x-large}
    .btn-update {style="background-color=rgb(136, 30, 56); color= white;border: hidden; font-size: x-large;}
</style>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (!$conn)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID = $_POST['ID'];
$name = $_POST['name'];
$text = $_POST['comment'];
$sql = "UPDATE guestbook SET Name='$name', Comment='$text' WHERE ID='$ID'";

if (mysqli_query($conn, $sql)) {
    echo '<div class="container">
            <h3>Comment has been updated successfully.</h3>
            <a href="show.php"><button class="btn-update">Back to home</a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
