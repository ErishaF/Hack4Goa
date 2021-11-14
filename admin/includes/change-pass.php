<?php

include("config.php");


$pass = $_POST['npass'];
$uid = $_POST['uid'];
$cpass = md5($pass);

$sq = mysqli_query($conn, "UPDATE `admin` SET `password` = '$cpass' WHERE `uid` = '$uid'");


		echo "<script>
	window.location = '../admin.php';
	</script>";

?>