<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Lab update</title>
<style>
    h3 {color: rgb(136, 30, 56);text-align: center;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: x-large;}
</head>
<body style="background-color: #ffe4e1;">
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
            <a class="btn-up" href="show.php"><button>Back to home</button><a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
