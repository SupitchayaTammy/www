<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (!$conn)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
    <h1>Table of guestbook</h1>
    <table class="table table-responsive-md">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Comment</th>
                <th scope="col">Link</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
<?php
while($row = mysqli_fetch_array($res))
{
?>
        <tbody>
            <tr>
                <td><?php echo $row['Name'];?></div></td>
                <td><?php echo $row['Comment'];?></td>
                <td><?php echo $row['Link'];?></td>
                <td>
                    <div class="d-inline">
                        <form action="form_update.php" method="post" class="d-inline">
                            <input type="hidden" name="ID" value=<?php echo $row['ID'];?>>
                            <button type="submit" class="btn btn-sm btn-primary mb-1">แก้ไข</button>
                        </form>
                        <form action="delete.php" method="post" class="d-inline">
                            <input type="hidden" name="ID" value=<?php echo $row['ID'];?>>
                            <button type="submit" class="btn btn-sm btn-danger mb-1">ลบ</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
<?php
}
mysqli_close($conn);
?>
    </table>
    <div class="text-center">
        <a href="form.php" class="btn btn-primary">เพิ่ม</a>
    </div>
</div>
</body>
</html>
