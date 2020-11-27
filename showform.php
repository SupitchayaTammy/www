<html>
<head>
<title>ITF Lab Test</title>
<style>
    body {background-color: #ffe4e1;text-align: center;color:rgb(136, 30, 56);font-size: larger ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
    .tablebmi {background-color: white;}
    .clr {margin:center;}
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
$res = mysqli_query($conn, 'SELECT * FROM bmi');
?>
<table width="600" border="2" align="center" class='tablebmi'>
    <tr style='background-color:rgb(136, 30, 56);color:white;'>
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
    <tr class='clr'>
      <td><?php echo $Result['name'];?></div></td>
      <td><?php echo $Result['weight'];?></td>
      <td><?php echo $Result['height'];?></td>
     <td><?php echo $Result['weight'] / (($Result['height']/100) * ($Result['height']/100));?></td>
    <td>
      <div class="d-inline">
      <form action="update_form.php" method="post">
        <input type="hidden" name="id" value=<?php echo $row['id'];?>>
        <button type="submit">update</button>
          </form>
         </div>
      </td>
    </tr>
<?php
}
?>
</table>
<div class="text-center"><br>
   <a href="form_test.php"><button class="btn-show" >เพิ่ม</button></a>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
