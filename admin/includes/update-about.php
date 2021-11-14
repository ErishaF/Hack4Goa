<?php

include("config.php");

if(isset($_POST['submit'])){

	$head = $_POST['head'];
	$ab = base64_encode($_POST['about']);


	$up = mysqli_query($conn, "UPDATE `about` SET `heading`='$head', `about` = '$ab' WHERE `status` = '1'");

	if($up){
		echo "<script>
		window.location = '../about.php';
		</script>";
	}else{
		echo "FAILED";
	}
}

?>