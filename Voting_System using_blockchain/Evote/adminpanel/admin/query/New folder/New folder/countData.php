<?php 

// Count All Course
$selCourse = $conn->query("SELECT COUNT(cou_id) as totCourse FROM course_tbl ")->fetch(PDO::FETCH_ASSOC);


// Count All Vote
$selVote = $conn->query("SELECT COUNT(ex_id) as totVote FROM Vote_tbl ")->fetch(PDO::FETCH_ASSOC);




 ?>