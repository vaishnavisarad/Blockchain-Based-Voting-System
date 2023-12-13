<?php 
 include("../../../conn.php");

extract($_POST);

$selQuest = $conn->query("SELECT * FROM Vote_question_tbl WHERE Vote_id='$VoteId' AND Vote_question='$question' ");
if($selQuest->rowCount() > 0)
{
  $res = array("res" => "exist", "msg" => $question);
}
else
{
	$insQuest = $conn->query("INSERT INTO Vote_question_tbl(Vote_id,Vote_question,Vote_ch1,Vote_ch2,Vote_ch3,Vote_ch4,Vote_answer) VALUES('$VoteId','$question','$choice_A','$choice_B','$choice_C','$choice_D','$correctAnswer') ");

	if($insQuest)
	{
       $res = array("res" => "success", "msg" => $question);
	}
	else
	{
       $res = array("res" => "failed");
	}
}



echo json_encode($res);
 ?>