<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Database Lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
                <button type="submit" class="btn btn-outline-success">ส่ง</button>
                <a role="button" class="btn btn-outline-secondary" href="show.php">กลับสู่หน้าหลัก</a>
            </div>
        </form>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>
