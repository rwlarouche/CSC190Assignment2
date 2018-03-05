<?php
	include_once("common.php");
	
	$op = $_POST["op"];
	if ($op == "getPosts")
	{
		$arr = getPosts();
		$s = JSON.encode($arr);
		print($s);
	}	
?>
