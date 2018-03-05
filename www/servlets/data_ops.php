<?php
	include_once("common.php");
	
	$op = $_POST['op'];

	if ($op == "getPosts")
	{
		$arr = getPosts();
		$s = json_encode($arr);
		print($s);
	}else if ($op == "insertPost")
	{
		$nname = $_POST['nname'];
		$msg = $_POST['msg'];
		
		insertPost($nname, $msg);	
	
		print("success");
	}	
?>
