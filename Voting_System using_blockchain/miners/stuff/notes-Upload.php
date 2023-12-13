<?php
include "Includes/session.php";
?>
<html class=" ">
<head>
      
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
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
        <link href="assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" ">
        <!-- START TOPBAR -->
          <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
              <?php include 'Includes/nav-sidebar.php'; ?>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Assignment Upload</h1>                            </div>

<a href="dashboard.php" style="float:right;" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                   <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Assignment Upload Section</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                   
<form action="" method="POST" enctype="multipart/form-data"> 
<?php  ?>
    <h4>All * feilds are mandatory</h4>

 
  <br>

   
    <div class="form-group">
      <label class="form-label" for="field-2">Branch</label>
    
      <div class="controls">
        <select name="branch" class="form-control"  id="state">
            <div id="state"></div>
		</select>
      </div>
  </div>
  <div class="form-group">
      <label class="form-label" for="field-2">Subject</label>
    
      <div class="controls">
          <select name="subject" class="form-control"  id="dept">
    		<option value="">Select By Subject</option>
    		<div id="dept"></div>
		  </select>
      </div>
  </div>
  
  
  <div class="form-group">
    <label style=" float:left;margin-right:3%;"> Semister</label>
    <div class="controls">
   <div class="form-group">
      <label class="form-label" for="field-2">Assignment File</label>
    
      <div class="controls">
  <select name="sem" class="form-control" required style="width:40%;">
<option value="">Select Semister</option>
 
 <option value="1">
 First Semister</option>
 
 
 
 
 <option value="2">
 Second Semister</option>
 
 <option value="3">
 Third Semister</option>
 
 <option value="4">
 Fourth Semister</option>
 
 <option value="5">
 Fifth Semister</option>
 
 <option value="6">
 Sixth Semister</option>
 
 <option value="7">
 Seventh Semister</option>
 
  <option value="8">
 Eighth Semister</option>

 </select>
  
 </div></div>
  </div>
  </div>
   
  <div class="form-group">
      <label class="form-label" for="field-2">Assignment Title</label>
    
      <div class="controls">
         <input type="text" name="title" class="form-control" placeholder="Notes Title"required>
      </div>
  </div>
  
  <div class="form-group">
      <label class="form-label" for="field-2">Assignment Description</label>
    
      <div class="controls">
         <textarea name="desc" class="form-control" placeholder="Notes Description" required></textarea>
      </div>
  </div>
  
  <div class="form-group">
      <label class="form-label" for="field-2">Assignment File</label>
    
      <div class="controls">
         <input type="file" name="file" class="form-control" accept="application/pdf" required>
      </div>
  </div>
  
  
  
 
 <br>
   <input type="submit" class="btn btn-primary" value="Submit" id="txtPhone">
                  
  </div>


</form>
                                    </div>
                                </div>
                            </div>
                        </section></div>
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
        <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 






<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>
		
		$(document).ready(function() {
			<!-- Read all product categories from database-->
			$.ajax({
				type: "POST",
				url: "Includes/web_service.php",
				data: {action: "showroom"},
				success: function (data) {
					//alert(data);
					$("#state").html(data);
				}
			});
			
			<!-- Read all product categories from database end-->
			$('#state').change(function() {
			
			
				var cat=$('#state').val();
				$.ajax({
					type: "GET",
					url: "Includes/web_service.php?st="+cat,
				data: {dept: "dept"},
					success: function (data1) {
						//alert(data);
						$("#dept").html(data1);
					}
				});
			});
			});

        </script>






<div class="modal fade" id="ultraModal-4" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Confirmation Box!!</h4>
              </div>
              <div class="modal-body">

                 <h3> Admin Registered Successfully!! </h3>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
    </body>
</html>


<?php
include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function
if(isset($_POST['branch']))
{

 $branch = $_POST['branch'];
 $subject = $_POST['subject'];
 $sem = $_POST['sem'];
 $title=$_POST['title'];
 $desc=$_POST['desc'];

 $file=$_FILES['file']['name'];
 $id=$_SESSION['id'];
if($obj->Add_assignment($id,$branch,$subject,$sem,$title,$desc,$file)==1)
{
	
	
    $obj= new Connections();
	$sem = $_POST['sem'];
	$branch = $_POST['branch'];
	$sql = $obj->db->prepare("select * from student where year='$sem' and branch='$branch'");
	$sql->execute();
	while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	

}
	
echo "<script type='text/javascript'>
alert('Assignment Added to Database!!');
</script>";

}
else{
echo "<script type='text/javascript'>
alert('Username already Exist!!');
</script>";
}
}

?>
