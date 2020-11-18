<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'supitchaya.mysql.database.azure.com', '_supitchaya_@supitchaya', 'Kmitlitf01', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if (isset($_GET['edit_data'])) {
		$id = $_GET['edit_data'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM guestbook WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$commetn = $n['comment'];
		}
	}
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="text" name="name" value="<?php echo $name; ?>">
<input type="text" name="comment" value="<?php echo $comment; ?>">
<?php if ($update == true): ?>
<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['comment'];

	mysqli_query($db, "UPDATE info SET name='$name', comment='$comment' WHERE id=$id");
	$_SESSION['message'] = "Updated!"; 
	header('location: show.php');
}
mysqli_close($conn);
?>
