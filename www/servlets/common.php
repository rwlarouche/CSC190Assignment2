<?php
	include_once("db.php");
	//common utility
	function insertPost($nname, $msg){
		$nname = secure($nname);
		$msg = secure(checksum($msg));
		$q = "INSERT INTO tbl_reports(nname, msg) VALUES ('$uname', '$msg')";
		executeSQL($q);
	}	
	function getPosts(){
		$q = "SELECT * FROM tbl_reports";
		$arr = executeSQL($q);
		return $arr;
	}

// TEST CASES
if(1==2){
	insertPost("ryan", "I saw Dr. Evil by the Unispan!");
	$arr = getPosts();
	print_r($arr);
}
?>
