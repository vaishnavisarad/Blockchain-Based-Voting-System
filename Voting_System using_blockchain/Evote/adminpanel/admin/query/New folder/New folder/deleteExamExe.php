<?php 
 include("../../../conn.php");


extract($_POST);

$delVote = $conn->query("DELETE  FROM Vote_tbl WHERE ex_id='$id'  ");
if($delVote)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}


	echo json_encode($res);
 ?>