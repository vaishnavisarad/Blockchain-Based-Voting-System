<?php 
$exmneId = $_SESSION['VoteineeSession']['exmne_id'];

// Select Data sa nilogin nga Voteinee
$selExmneeData = $conn->query("SELECT * FROM Voteinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
$exmneCourse =  $selExmneeData['exmne_course'];


        
// Select and tanang Vote depende sa course nga ni login 
$selVote = $conn->query("SELECT * FROM Vote_tbl WHERE cou_id='$exmneCourse' ORDER BY ex_id DESC ");


//

 ?>