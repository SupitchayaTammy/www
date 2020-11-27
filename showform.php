<html>
<head>
<title>ITF Lab Test</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya247.mysql.database.azure.com', 'supitchaya247@supitchaya247', 'Labitftest01', 'itftest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL:'.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM bmi');
?>
<table width="600" border="2" align="center">
    <tr>
      <th> <div align="center">ชื่อ</div></th>
      <th> <div align="center">น้ำหนัก</div></th>
      <th> <div align="center">ส่วนสูง</div></th>
      <th> <div align="center">bmi</div></th>
       <th> <div align="center">การจัดการ</div></th>
    </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
    <tr>
      <td><?php echo $Result['name'];?></div></td>
      <td><?php echo $Result['weight'];?></td>
      <td><?php echo $Result['height'];?></td>
     <td><?php echo $Result['weight'] / (($Result['height']/100) * ($Result['height']/100));?></td>
    <td>
      <form action="update_form.php" method="post">
        <input type="hidden" name="id" value=<?php echo $row['id'];?>>
        <button type="submit">update</button>
          </td>
      </form>
    </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
