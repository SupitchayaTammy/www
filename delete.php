<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Lab delete</title>
<style>
    h3 {color: rgb(136, 30, 56);text-align: center;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: x-large;"}
    .btn-primary {background-color: rgb(136, 30, 56);color: white;text-align: center;border: hidden;font-size: x-large;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
</stlye>
</head>
<body style="background-color: #ffe4e1;">
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
            <a role="button" class="btn btn-primary mt-3" href="show.php">Back to home</a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
