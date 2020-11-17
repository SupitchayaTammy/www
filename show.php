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
<table width="600" border="1" style="color: white;margin: auto;font-size: large; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
  <tr>
    <th width="100" style="background-color: rgb(136, 30, 56);"> <div align="center">Name</div></th>
    <th width="350" style="background-color:  rgb(136, 30, 56);"> <div align="center">Comment </div></th>
    <th width="150" style="background-color:  rgb(136, 30, 56);"> <div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><form action = "delete.php" method = "post" id="CommentForm" style="text-align:left;">
      <input type="submit" id="btn_del" value="ลบ" style="background-color:  rgb(136, 30, 56);border-radius: 5px;font-size: medium;color: white; height: 25px;border: none;width: 50px;">   
    <form action = "edit.php" method = "post" id="CommentForm" style="text-align:center;">
      <input type="submit" id="btn_del" value="แก้ไข" style="background-color:  rgb(136, 30, 56);border-radius: 5px;font-size: medium;color: white; height: 25px;border: none;width: 50px;">   
    </form> 
  </tr>
<?php
}
?>
</table>
<div class="container" style="text-align: center;padding: 2%;">
  <input type="button" onclick="location.href="https://web247.azurewebsites.net/form.html" value="เพิ่ม" style="background-color:  rgb(136, 30, 56);border-radius: 5px;font-size: medium;color: white; height: 25px;border: none;width: 50px;"/>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
