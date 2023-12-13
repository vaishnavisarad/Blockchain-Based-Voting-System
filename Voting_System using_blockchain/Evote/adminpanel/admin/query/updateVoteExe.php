<?php 
 include("../../../conn.php");
 
 extract($_POST);


 $updVote = $conn->query("UPDATE Vote_tbl SET cou_id='$courseId', ex_title='$VoteTitle', ex_time_limit='$VoteLimit', ex_questlimit_display='$VoteQuestDipLimit' , ex_description='$VoteDesc' WHERE  ex_id='$VoteId' ");

 if($updVote)
 {
   $res = array("res" => "success", "msg" => $VoteTitle);
 }
 else
 {
   $res = array("res" => "failed");
 }

 echo json_encode($res);
 ?>