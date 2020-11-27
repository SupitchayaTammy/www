<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit table</title>
<style>
    body {background-color: #ffe4e1;text-align: center;color:rgb(136, 30, 56);font-size: xx-large ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
    .form-group {font-size: x-large;}
    .btn-save {background-color: rgb(136, 30, 56);color: white;text-align: center;border: hidden;font-size:x-large}
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
$sql = "SELECT * FROM bmi WHERE id='$id'";
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($res);
?>
    <div class="container mt-4">
        <h1>Update</h1>
        <form action="update_test.php" method="post" class="mt-4">
            <input type="hidden" name="id" value=<?php echo $result['id'];?>>
            <div class="form-group">
                <label for="inputHeight">Height</label><br>
                <?php
                    echo '<input type="text" name="height" id="inputHeight" class="form-control" placeholder="Update Height" value="'.$result["height"].'">'
                ?>
            </div>
            <div class="form-group">
                <label for="inputWeight">Weight</label><br>
                <textarea name="weight" class="form-control" id="inputWeight" rows="3" placeholder="Update Weight"><?php echo $result['weight'];?></textarea>
            </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn-save">Save</button> 
            </div>
        </form>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>
