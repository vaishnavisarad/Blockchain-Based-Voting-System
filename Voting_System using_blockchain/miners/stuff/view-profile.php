<?php session_start();
  include 'Application/DB_Functions.php';
   ?>
<!DOCTYPE html>
<html class=" ">
<head>
<title>Admin Dashboard</title>
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
         <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <?php include 'Includes/nav-sidebar.php'; ?>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->


            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">
        <!-- FORM START FROM HERE FOR INSERTING --->  
     <?php  $obj= new Connections();
	 $id=$_SESSION['sid'];
 $sql3 = $obj->db->prepare("select * from  student	 where ID='$id'");
  $sql3->execute();
     $sql3->rowCount();
  while($row3 = $sql3->fetch(PDO::FETCH_ASSOC)){ $Usersid=$row3['ID'];
  
  $Student_contact=$row3['Student_contact'];
  $Student_email=$row3['Student_email'];
  $Student_name=$row3['Student_name'];
  $Student_photo=$row3['Student_photo'];
  $age=$row3['age'];
  $address=$row3['address'];
  $city=$row3['city'];$gender=$row3['gender'];
	  ?>
        <tbody>
       <td>
       
       <?php
     
 
	
?>	 <?php
	 
		?><img src="../images/student_profile/<?php echo $row3['Student_photo']; ?>"  style="height:400px; width:300px;"><?php
		
       
       ?>  
       	
  
       
       
     
    <?php  ?>        
          <div class="col-md-7 col-sm-7 col-xs-7" style="float:right;">

  
<h3><b>Profile Details</b></h3><br>
  <div class="form-group">
      <label class="form-label" for="field-2"><b>Name : </b> <?php echo $Student_name; ?> 
 </label>
    
    
  </div>
  
  
  
   <label class="form-label" for="field-2"><b>Email :</b>  <?php echo $Student_email; ?></label>
    
      <div class="controls">
  
      </div>
  <br>
  
  
  
  
  
  
  <div class="form-group">
       
      <label class="form-label" for="field-2"><b>Contact :</b> <?php echo $Student_contact; ?> </label>
    
      <div class="controls">
      </div>
  </div>
  <div class="form-group">
      <label class="form-label" required for="field-2"><b>Age :</b>   <?php echo $age; ?> Years</label>
    
      <div class="controls">
         
      </div>
  </div>
  
  
  
  
  
  <div class="form-group">
      <label class="form-label" required for="field-2"><b>Gender :</b>    <?php echo $gender; ?></label>
    
      <div class="controls">
        
      </div>
  </div>
  
  
  <div class="form-group">
      <label class="form-label" required for="field-2"><b>Address :</b>    <?php echo $address; ?></label>
    
      <div class="controls">
       
      </div>
  </div>
  
  
  
  
  <div class="form-group">
      <label class="form-label" required for="field-2"><b>City :</b>   <?php echo $city; ?></label>
    
      <div class="controls">
     
      </div>
  </div>
 
    




  <?php  
       
  } ?>

</div><br><br><br><hr><h3>Applied Courses</h3><hr>
  <?php	
  
    
  $obj= new Connections();
   $id=$_SESSION['sid'];
 $sql1 = $obj->db->prepare("select * from  applied_courses where stud_id='$id'");	  
	
		$sql1->execute();
		
			
		    while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
				
			$stud_id=$row1['stud_id'];
			$course_id=$row1['course_id'];
			$course_complete_university_status=$row1['course_complete_university_status'];

 $sql = $obj->db->prepare("select * from  courses where ID='$course_id'");	  
	
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$course_name=$row['course_name'];
			$course_image=$row['course_image'];
			$course_conent=$row['course_conent'];
			$course_duration=$row['course_duration'];
			$course_fees=$row['course_fees'];
			$dt=$row['dt'];$ID=$row['ID'];
			?> 
                                                                 
                                                     
                                
<a href="course_details.php?id=<?php echo $ID; ?>">
                                
                                 <div class="col-lg-3 col-md-4 col-xs-6 col-sm-4">

                                        <div class="tile-progress bg-info">
                                            <div class="content">
           
                                           
                        <img src="../notes/<?php echo $course_image; ?>" style="width:100%;height:200px;"> <br><br><p style="text-align: center;">   <?php echo $course_name; ?> <b> <br> Duration:   <?php echo $course_duration; ?>     <br> Fees:   <?php echo $course_fees; ?> </a><br> 
<?php if($course_complete_university_status==1){
	?>
<span style="background-color:green;">Completed </span><br>
<a href="certificate.php?id=<?php echo $stud_id; ?>&courseid=<?php echo $course_id; ?>" target="_blank">
<span style="background-color:green;">Certificate </span></a>
    <?php }else{ ?>
<span style="background-color:green;">Persuing </span>
<?php } ?>
</b>            </p> 
                                            </div>
                                        </div>

                                    </div>
                                </a> 
                                
                                                       
                                                      
                                          <?php }} ?>          
                                               
                            
      
                                    
</div>


                </section>
            </section>
            <!-- END CONTENT -->
         

          </div>
      </div>
  </div>
                        </section></div>


                </section>
            </section>
            <!-- END CONTENT -->
           


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 











<div class="modal fade" id="ultraModal-4" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Confirmation Box!!</h4>
              </div>
              <div class="modal-body">

                 <h3>Profile Updated Succesfully!! </h3>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
        <!-- modal end -->
    </body>
</html>



<?php
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function
if(isset($_POST['s_name']))
{
$school = $_POST['s_name'];
$passout = $_POST['year'];
$highschool = $_POST['h_name'];
$highschool_passout = $_POST['hyear'];
$currently_working = $_POST['working_as'];
$lives_in = $_POST['live'];
$from = $_POST['home_town'];
$hobby = $_POST['hobby'];
$pic =$_FILES['file']['name'];
$email=$_SESSION['email'];

if($obj->insert_profile($email,$school,$passout,$highschool,$highschool_passout,$currently_working,$lives_in,$from,$hobby,$pic)==1)
{	
echo "<script type='text/javascript'>
$(document).ready(function(){
$('#ultraModal-4').modal('show');
});
</script>";
}
else{
echo "<script type='text/javascript'>
alert('Username already Exist!!');
</script>";
}
}

?>

