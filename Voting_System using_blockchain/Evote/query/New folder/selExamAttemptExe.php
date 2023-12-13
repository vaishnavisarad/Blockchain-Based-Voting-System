<?php 
 session_start();
 include("../conn.php");
$exmneId = $_SESSION['VoteineeSession']['exmne_id'];
 

extract($_POST);

 $selVoteAttmpt = $conn->query("SELECT * FROM Vote_attempt WHERE exmne_id='$exmneId' AND Vote_id='$thisId' ");

 if($selVoteAttmpt->rowCount() > 0)
 {
 	$res = array("res" => "alreadyVote", "msg" => $thisId);
 }
 else
 {
 	$res = array("res" => "takeNow");
 }


 echo json_encode($res);
 ?>