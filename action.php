<?php
	include 'connect.php';

	if (isset($_POST['getInTouch'])) {
		$name = trim($_POST['name']);
		$contact =trim($_POST['contact']);
		// $subject = $_POST['subject'];
		$message = trim($_POST['message']);

		$sql = "INSERT INTO getintouch (name, contact, message) VALUES ('$name','$contact','$message')";
		
		if ($con->query($sql) === TRUE) {
	        echo '<script language="javascript">';
	        echo 'alert("Thank You");location.href="index.php";';
	        echo '</script>';
	    }
	     else {
	        echo '<script language="javascript">';
	        echo 'alert("Something Went Wrong");location.href="contact.php"';
	        echo '</script>';
	    }

	}
?>