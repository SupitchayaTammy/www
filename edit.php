<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if(isset($_POST['update']))
{    
    $ID = $_POST['ID'];
    
    $Name=$_POST['Name'];
    $Comment=$_POST['Comment'];   
    
    if(empty($Name) || empty($Comment) {            
        if(empty($Name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($Comment)) {
            echo "<font color='red'>Comment field is empty.</font><br/>";
        }
              
    } else {    
        $Result = mysqli_query($conn, "UPDATE guestbook SET Name='$Name',Comment='$Comment' WHERE ID=$ID");
        
        header("Location: show.php");
    }
}
?>
<?php
$ID = $_GET['ID'];
 
$res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID=$ID");
 
while($Result = mysqli_fetch_array($res))
{
    $Name = $Result['Name'];
    $Comment = $Result['Comment'];
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color: #ffe4e1; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: x-large;">
  <div class="container">
    <div class="card" style="background-color: rgb(233, 122, 150);height: 280px; width: 400px;margin: auto;border-radius: 20px; margin-top: 100px;">
      <div class="card-body" style="color: white;">
        <form action = "edit.php" method = "post" id="CommentForm" style="text-align:center;">
        Name<br>
        <input type="text" name = "name" id="idName" value= "<?php echo $Name;?>" placeholder="Enter Name" style="background-color: #ffe4e1;height: 25px;width: 300px;border-style: solid;"> <br>
        Comment<br>
        <textarea rows="10" cols="20" name = "comment" id="idComment" value= "<?php echo $Comment;?>" placeholder="Enter Comment" style="background-color: #ffe4e1;height: 140px;width: 300px;border-style: solid;"></textarea><br>
        <td><input type="hidden" name="id" value= <?php echo $_GET['ID'];?>></td>
        <input type="submit" name="update" value="แก้ไข" id="commentBtn" style="background-color:  rgb(136, 30, 56);border-radius: 5px;font-size: medium;color: white;border: none;height: 30px;width: 50px;">
        </form> 
      </div>
</body>
</html>
