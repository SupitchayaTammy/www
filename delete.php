<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Lab delete</title>
<style>
    h3 {color: rgb(136, 30, 56);text-align: center;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: x-large;"}
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
    header("location: show.php")
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
