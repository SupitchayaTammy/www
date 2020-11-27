<html>
<head>
    <title>ITF Database Lab</title>
<style>
    body {background-color: #ffe4e1;text-align: center;color:rgb(136, 30, 56);font-size: larger ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
    h3 {color: rgb(136, 30, 56);}
    .btn-update {background-color:rgb(136, 30, 56); color: white;border: hidden; font-size: x-large;}
</style>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya247.mysql.database.azure.com', 'supitchaya247@supitchaya247', 'Labitftest01', 'itftest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL:'.mysqli_connect_error());
}


$id = $_POST['id'];
$name = $_POST['name'];
$weight = $_POST['weight'];
$sql = "UPDATE bmi SET name='$name', weight='$weight', height='$height' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo '<div class="container">
            <h3>Updated successfully.</h3>
            <a href="showform.php"><button class="btn-update">Back to home</button></a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
