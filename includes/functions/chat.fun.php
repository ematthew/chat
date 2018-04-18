<?php 

function get_msg(){
	$query = "SELECT 'Sender', 'message' FROM 'chat'.'chat'";

	$run = mysqli_query($query);
	$messages  = array();

	while ($message = mysqli_fetch_assoc($run)) {

		$messages[] = array('sender' =>$message['Sender'] , 'message' => $message['Message'] );
		# code...
	}

	return $message;

}

function send_msg($sender, $message){   

	if(!empty($sender) && !empty($message)) {

		$Sender = mysql_real_escape_string($sender);
		$Message = mysql_real_escape_string($message);

		$query = "INSERT INTO 'chat'.'chat' VALUE (null, '{sender}', '$message')";

		if($run = mysql_query($query)) {
			return true;

		}else{ 
			return false;
		}

	} else{
		return false;
	}
}

?>