<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Lab</title>
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
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
    <h1>Table of guestbook</h1>
    <table class="table table-responsive-md">
        <thead>
            <tr style="color: white;">
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
        <a href="form.php" type='button' class="btn btn-primary"><button style="background-color:  rgb(136, 30, 56);color: white>เพิ่ม</button></a>
    </div>
</div>
</body>
</html>
