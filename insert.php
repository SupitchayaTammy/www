<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color: #ffe4e1; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: x-large;">
  <div class="container">
    <div class="card" style="background-color: rgb(233, 122, 150);height: 280px; width: 400px;margin: auto;border-radius: 20px; margin-top: 100px;">
      <div class="card-body" style="color: white;">
        <form action = "insert.php" method = "post" id="CommentForm" style="text-align:center;">
        Name<br>
        <input type="text" name = "name" id="idName" placeholder="Enter Name" style="background-color: #ffe4e1;height: 25px;width: 300px;border-style: solid;"> <br>
        Comment<br>
        <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment" style="background-color: #ffe4e1;height: 140px;width: 300px;border-style: solid;"></textarea><br>
        <input type="submit" id="commentBtn" style="background-color:  rgb(136, 30, 56);border-radius: 5px;font-size: medium;color: white;border: none;height: 30px;width: 50px;">
          <button href="https://web247.azurewebsites.net/show.php" style="background-color:  rgb(136, 30, 56);border-radius: 5px;font-size: medium;color: white;border: none;height: 30px;width: 50px;">ย้อนกลับ</button>
        </form> 
      </div>
</body>
</html>
