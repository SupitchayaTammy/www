<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
<style>
    body {background-color: #ffe4e1;"}
    h {color= rgb(136, 30, 56);font-size=x-large;font-family='Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"}
    td {background-color: rgb(136, 30, 56);color: white;border: hidden;font-size: x-large;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"}
</style>
</head>
<body>
<<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];



$sql = "INSERT INTO guestbook (Name , Comment) VALUES ('$name', '$comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo '<td><button href="show.php">Back to home</button></td>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<\body>
<\html>
