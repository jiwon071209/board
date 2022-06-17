<?php 
	include "../lib.php";

	$contents = $_POST['contents-comment'];
	$idx = $_SESSION['idx'];
	$user = $_SESSION['login'];

	$sql = "INSERT INTO comment (user,contents,time,idx_comment) VALUES('$user','$contents',NOW(),'$idx')";

	mysqli_query($connect,$sql);

	header("Location: http://localhost/P4C_W3-master/P4C_W3-master/board.php");

?>