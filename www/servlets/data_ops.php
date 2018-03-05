<?php
	include_once("common.php");
			
//	$op = $_POST['op'];

	
	$op = "getPosts";

	if (1 == 1)
	{
		$arr = getPosts();
		$s = json_encode($arr);
		print($s);
	}	
?>
