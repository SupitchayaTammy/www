<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Lab</title>
<style>
    body {background-color: #ffe4e1;text-align: center;color:rgb(136, 30, 56);font-size: larger ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
    table {border-collapse: collapse;margin: auto;background-color: white;}
    th {background-color:rgb(136, 30, 56);color: white;height: 40px;font-size: 22px;width: 400px;text-align: center;}
    .btn-danger {background-color: tomato;border: hidden; font-size: large; color: white;width: 62px;}
    .btn-primary {background-color: rgb(113, 173, 230);border: hidden; font-size: large; color: white;width: 62px;}
    .btn-show {background-color: rgb(136, 30, 56);border: hidden; font-size: large;width: 62px;color:white}
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
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
    <h1>Guestbook</h1>
    <table class="table table-responsive-md">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Comment</th>
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
                <td>
                    <div class="d-inline">
                        <form action="form_update.php" method="post" class="d-inline">
                            <input type="hidden" name="ID" value=<?php echo $row['ID'];?>>
                            <button type="submit" class="btn btn-sm btn-primary mb-1">Edit</button>
                        </form>
                        <form action="delete.php" method="post" class="d-inline">
                            <input type="hidden" name="ID" value=<?php echo $row['ID'];?>>
                            <button type="submit" class="btn btn-sm btn-danger mb-1">Delete</button>
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
        <br>
        <a href="form.php"><button class="btn-show" >Add</button></a>
    </div>
</div>
</body>
</html>
