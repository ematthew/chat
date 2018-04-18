
<?php

	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'chat';
	$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
	if(!$connection){
		echo 'Unable to connect to MYSQL server. <br />';
	}


?>