<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
	session_unset();
	header("Location:index.html");
}
else{
	echo "<h1>Session Not Set</h1>";
}

?>