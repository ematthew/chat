<?php

require('includes/core.inc.php');

if(isset($_POST['send'])){
	if(send_msg($_POST['sender'], $_POST['message'])){

		echo 'Message sent.';
	} else{
		echo 'message failed to sent.';
	}
}
?>

<div id="messages">
	<?php
	$messages = get_msg();
	foreach ($messages as $message) {
		echo '<strong>'.$message['sender'],'sent</strong><br />';
		echo $message['message'].'<br /><br />';
	}

	?>
</div><!--message-->

<form action="index.php" method="post">
	<label>Enter Name:<input type="text" name="sender" /></label>
	<label> Enter Message:<input type="text" name="message" /></label>
	<input type="submit" name="sender" value="send message" />
</form>
