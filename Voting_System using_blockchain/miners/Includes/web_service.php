<?php 
include '../Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function


			
			if(isset($_POST['action'])) {
			
				echo $action = $_POST["action"];
				
			echo '<option value="">Select By Branch</option>';
				if ($action == "showroom") {
					$sql = $obj->db->prepare("select * from branch");
					$sql->execute();
					while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
						echo '<option value=' . $row['ID'] . '>' . $row['branchs'] . '</option>';
					}
			
				}
			
			}
			if(isset($_GET['dept'])) {
			
				$action = $_GET["dept"];
				$stid = $_GET["st"];
			echo '<option value="">Select By Subject</option>';
				if ($action == "dept") {
					$sql = $obj->db->prepare("select * from subject where bran_id='$stid'");
					$sql->execute();
					while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
						echo '<option value=' . $row['ID'] . '>' . $row['subject'] . '</option>';
					}
			
				}
			
			}
?>