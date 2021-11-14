<?php
include("config.php");
$id = $_GET['id'];
$type = $_GET['type'];
$do = $_GET['do'];

if($type == 'admin'){

	$sq = mysqli_query($conn, "UPDATE `admin` SET `status` = '$do' WHERE `uid`='$id'");

	echo "<script>

		window.location = '../admin.php';
	</script>";
}else if ($type == 'blog') {
	$sq = mysqli_query($conn, "UPDATE `blogs` SET `status` = '$do' WHERE `bid`='$id'");

	echo "<script>

		window.location = '../blogs.php';
	</script>";
}

?>