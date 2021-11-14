<?php

include("config.php");


if(isset($_POST['submit'])){

	$un = $_POST['uname'];
	$ps = $_POST['pass'];
	$cps = md5($ps);
	$uid = uniqid();

	$sq = mysqli_query($conn, "INSERT INTO `admin` (`uid`, `username`, `password`,`status`) VALUES ('$uid', '$un', '$cps', '1')");

	
		echo "<script>
	window.location = '../admin.php';
	</script>";
	
}

?>