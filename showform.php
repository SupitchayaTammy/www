<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitfkmitl.mysql.database.azure.com', 'supitchaya@labitfkmitl', 'Labitfkmitl03', 'table_abc', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL:'.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM abc');
?>
<table width="600" border="2" align="center">
    <tr>
      <th> <div align="center">A</div></th>
      <th> <div align="center">B</div></th>
      <th> <div align="center">C</div></th>
    </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
    <tr>
      <td><?php echo $Result['A'];?></div></td>
      <td><?php echo $Result['B'];?></td>
      <td><?php echo $Result['A'] + $Result['B'];?></td>
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