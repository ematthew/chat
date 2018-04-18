<?php

require('includes/database/connect.db.php');

if(isset($_POST['send'])){
	
	$sender 	= $_POST['sender'];
	$message 	= $_POST['message'];

	$query = " INSERT INTO chat(sender, message) VALUES( '".$sender."', '".$message."' ) ";
	$run_query = mysqli_query($connection, $query);
	if(!$run_query){
		echo 'Fail to insert data inside the database !';
	}else{
		echo 'Data has been inserted !';
	}
	

}
?>

<form action="index.php" method="post">
	<label>Enter Name:<input type="text" name="sender" /></label>
	<label> Enter Message:<input type="text" name="message" /></label>
	<input type="submit" name="sender" value="send message" />
</form>
