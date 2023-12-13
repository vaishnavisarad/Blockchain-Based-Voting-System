<?php
 session_start(); 
 include("../conn.php");
 extract($_POST);

 $exmne_id = $_SESSION['VoteineeSession']['exmne_id'];



$selExAttempt = $conn->query("SELECT * FROM Vote_attempt WHERE exmne_id='$exmne_id' AND Vote_id='$Vote_id'  ");

$selAns = $conn->query("SELECT * FROM Vote_answers WHERE axmne_id='$exmne_id' AND Vote_id='$Vote_id' ");


if($selExAttempt->rowCount() > 0)
{
	$res = array("res" => "alreadyTaken");
}
else if($selAns->rowCount() > 0)
{
	$updLastAns = $conn->query("UPDATE Vote_answers SET exans_status='old' WHERE axmne_id='$exmne_id' AND Vote_id='$Vote_id'  ");
	if($updLastAns)
	{
		foreach ($_REQUEST['answer'] as $key => $value) {
			 $value = $value['correct'];
			 $currnthash=sha1($exmne_id.$Vote_id.$key.$value);
			 $selQuest = $conn->query("SELECT * FROM Vote_answers ORDER BY  exans_id DESC LIMIT 1");
            if($selQuest->rowCount() > 0)
            {
               
                while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) {
					$current_hash = $selQuestRow['current_hash']; 
				}}
			 
		  	 $insAns = $conn->query("INSERT INTO Vote_answers(axmne_id,Vote_id,quest_id,exans_answer,current_hash,previous_hash) VALUES('$exmne_id','$Vote_id','$key','$value','$currnthash','$current_hash')");
		}
		if($insAns)
		{
			 $insAttempt = $conn->query("INSERT INTO Vote_attempt(exmne_id,Vote_id)  VALUES('$exmne_id','$Vote_id') ");
			 if($insAttempt)
			 {
				 $res = array("res" => "success");
			 }
			 else
			 {
				 $res = array("res" => "failed");
			 }
		}
		else
		{
			 $res = array("res" => "failed");
		}
	}
}
else
{

		foreach ($_REQUEST['answer'] as $key => $value) {
			 $value = $value['correct'];
			 $currnthash=sha1($exmne_id.$Vote_id.$key.$value);
			 $selQuest = $conn->query("SELECT * FROM Vote_answers ORDER BY  exans_id DESC LIMIT 1");
            if($selQuest->rowCount() > 0)
            {
               
                while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) {
					$current_hash = $selQuestRow['current_hash']; 
				}}
		  	 $insAns = $conn->query("INSERT INTO Vote_answers(axmne_id,Vote_id,quest_id,exans_answer,current_hash,previous_hash) VALUES('$exmne_id','$Vote_id','$key','$value','$currnthash','$current_hash')");
		}
		if($insAns)
		{
			 $insAttempt = $conn->query("INSERT INTO Vote_attempt(exmne_id,Vote_id)  VALUES('$exmne_id','$Vote_id') ");
			 if($insAttempt)
			 {
				 $res = array("res" => "success");
			 }
			 else
			 {
				 $res = array("res" => "failed");
			 }
		}
		else
		{
			 $res = array("res" => "failed");
		}


}



 
 

 echo json_encode($res);
 ?>


 