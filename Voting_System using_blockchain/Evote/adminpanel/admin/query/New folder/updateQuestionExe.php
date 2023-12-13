<?php
 include("../../../conn.php");
 extract($_POST);


$updCourse = $conn->query("UPDATE Vote_question_tbl SET Vote_question='$question', Vote_ch1='$Vote_ch1', Vote_ch2='$Vote_ch2', Vote_ch3='$Vote_ch3', Vote_ch4='$Vote_ch4' WHERE eqt_id='$question_id' ");
if($updCourse)
{
	   $res = array("res" => "success");
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>