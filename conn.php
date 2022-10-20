<?php
$conn=mysqli_connect("localhost","root","","gym_mgmt_system");
	if(!$conn){
		die("Connection Failed".mysqli_connect_errno());
	}else{
		echo "Connection Successful";
	}
?>