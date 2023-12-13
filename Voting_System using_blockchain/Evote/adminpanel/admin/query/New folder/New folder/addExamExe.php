<?php 
 include("../../../conn.php");

 extract($_POST);

 $selCourse = $conn->query("SELECT * FROM Vote_tbl WHERE ex_title='$VoteTitle' ");

 if($courseSelected == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else if($timeLimit == "0")
 {
 	$res = array("res" => "noSelectedTime");
 }
 else if($VoteQuestDipLimit == "" && $VoteQuestDipLimit == null)
 {
 	$res = array("res" => "noDisplayLimit");
 }
 else if($selCourse->rowCount() > 0)
 {
	$res = array("res" => "exist", "VoteTitle" => $VoteTitle);
 }
 else
 {
    
	$insVote = $conn->query("INSERT INTO Vote_tbl(cou_id,ex_title,ex_time_limit,ex_questlimit_display,ex_description) VALUES('$courseSelected','$VoteTitle','$timeLimit','$VoteQuestDipLimit','$VoteDesc') ");
	if($insVote)
	{
		$res = array("res" => "success", "VoteTitle" => $VoteTitle);
	}
	else
	{
		$res = array("res" => "failed", "VoteTitle" => $VoteTitle);
	}


 }




 echo json_encode($res);
 ?>