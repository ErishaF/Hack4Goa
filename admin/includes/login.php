<?php
session_start();
include("config.php");
if(isset($_POST['submit'])){

	$uname = $_POST['uname'];
	$pass = $_POST['pass'];

	$enc_pass = md5($pass);

	$sql = mysqli_query($conn, "SELECT * FROM `admin` WHERE ((`username` = '".$uname."') AND(`password` = '".$enc_pass."')) ");
	$row =mysqli_fetch_array($sql);

	$uid = $row['uid'];

	if(mysqli_num_rows($sql) > 0){


		$_SESSION["username"] = $uname;
		$_SESSION["userid"] = $uid;

		echo "<script>
    window.location = '../dashboard.php';
</script>";
	} else{
		echo "<script>
    window.location = '../index.php';
</script>";
	}


}
