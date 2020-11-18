<html>
<head>
<title>ITF Lab</title>
</head>
<body style="background-color: #ffe4e1;">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table name="tb" width="600" border="1" style="background-color: white;margin: auto;color: rgb(136, 30, 56);font-size: large; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;border: none; box-shadow: none;border-collapse: collapse;">
  <tr style="background-color: rgb(136, 30, 56);color: white;font-size: large;">
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><a style="text-align:left;" href="delete.php?delete=<?php echo "{$Result->Name} {$Result->Comment}"; ?>">
      <button class="btn-del" style="background-color:  rgb(245, 100, 94);border-radius: 5px;font-size: medium;color: white; height: 25px;border: none;width: 50px;">ลบ</button></a>
    <a href="edit.php?edit=<?php echo "{$Result->Name} {$Result->Comment}"; ?>">
      <button class="btn-edit" style="color: white;border-radius: 5px;font-size: medium;background-color:rgb(129, 190, 224); height: 25px;border: none;width: 50px;">แก้ไข</button></a></td>
  </tr>
<?php
}
?>
</table>
<div class="container" style="text-align: center;padding: 2%;">
  <a href="https://web247.azurewebsites.net/form.html">
    <button style="background-color:  rgb(212, 74, 127);border-radius: 5px;font-size: medium;color: white; height: 25px;border: none;width: 50px;">เพิ่ม</button>
  </a>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
