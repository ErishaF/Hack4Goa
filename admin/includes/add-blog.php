<?php

include("config.php");

if(isset($_POST['submit'])){

	$title = $_POST['title'];
	$desc = base64_encode($_POST['desc']);
	$targetDir = "../../upload/";
  	$allowTypes = array('jpg','png','jpeg','gif');
  	$bid =  uniqid();
  	$auth = $_POST['author'];

  	$temp = explode('.', $_FILES['images']['name']);
      $filename = $_FILES['images']['name'];

     move_uploaded_file($_FILES['images']['tmp_name'], $targetDir.$filename);


     $sq = mysqli_query($conn, "INSERT INTO `blogs` (`bid`, `title`, `description`, `image`, `author`, `status`) VALUES ('$bid', '$title', '$desc', '$filename', '$auth', '1')");

  

     	echo "<script>
     		window.location = '../blogs.php';
     	</script>";
     }




?>