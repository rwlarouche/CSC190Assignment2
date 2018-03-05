<?php
	include_once("common.php");
	
	$op = "getPosts";

	if ($op == "getPosts")
	{
		$arr = getPosts();
		$s = json_encode($arr);
		print($s);
	}	
?>
