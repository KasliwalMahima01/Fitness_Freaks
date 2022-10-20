<?php

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("Location: page1.php");
}

?>
