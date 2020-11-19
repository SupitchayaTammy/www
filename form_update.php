<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit table</title>
<style>
    body {background-color: #ffe4e1;text-align: center;color:rgb(136, 30, 56);font-size: larger ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
    .form-group {font-size: larger;}
    .btn-save {background-color: rgb(136, 30, 56);color: white;text-align: center;border: hidden;font-size: large;}
    .btn-home {background-color: rgb(136, 30, 56);color: white;text-align: center;border: hidden;font-size: large;}
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
$sql = "SELECT * FROM guestbook WHERE ID='$ID'";
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($res);
?>
    <div class="container mt-4">
        <h1>Edit</h1>
        <form action="update.php" method="post" class="mt-4">
            <input type="hidden" name="ID" value=<?php echo $result['ID'];?>>
            <div class="form-group">
                <label for="inputName">Name</label>
                <?php
                    echo '<input type="text" name="name" id="inputName" class="form-control" placeholder="Update Name" value="'.$result["Name"].'">'
                ?>
            </div>
            <div class="form-group">
                <label for="inputComment">Comment</label>
                <textarea name="comment" class="form-control" id="inputComment" rows="3" placeholder="Update Comment"><?php echo $result['Comment'];?></textarea>
            </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn-save">Save</button>
                <button class="btn-home" href="show.php"'>Back to home</button>
            </div>
        </form>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>
