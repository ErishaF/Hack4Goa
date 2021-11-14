<?php

include("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sub = $_POST['sub'];
$msg = base64_encode($_POST['msg']);
$cid = uniqid();


$up = mysqli_query($conn, "INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `subject`, `message`, `status`) VALUES ('$cid', '$name', '$email', '$phone', '$sub', '$msg', '1')");

if($up){
	echo "<span style='color: green;'>Successfully Sent Your Message</span>";

	echo "<script>
	window.location = '../contact.php';
	</script>";


}else{
	echo "<span style='color: red;'>Failed to Send Your Message</span>";	
}

?>