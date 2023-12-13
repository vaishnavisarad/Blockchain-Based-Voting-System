<?php
include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['bname']))
{
$bname = $_POST['bname'];
$btype = $_POST['btype'];
$oname = $_POST['oname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$addr = $_POST['addr'];
$city = $_POST['city'];
$dist = $_POST['dist'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
//$pass = $_POST['password'];
$status = 0;
//echo $bname; 
 $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    
    $pass= implode($pass); //turn the array into a string
    //echo $pass;

if($obj->StoreUser($bname,$btype,$oname,$dob,$gender,$addr,$city,$dist,$state,$pin,$phone,$email,$username,$pass,$status)==1)
{
echo "<script>alert('User Account successfull');</script>";
}
else{

}
}

?>
<html class=" ">
<head>
      
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Epharmc</title>
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
                                <h1 class="title">Add New Distributor </h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="box ">
                            <header class="panel_header">
                                <div class="col-md-12">
                                        
                                    <a href="view-distributer.php"><button type="button" class="btn btn-info">View Distributer</button></a>
 
                                    </div>
                                <h2 class="title pull-left">New Distributer</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            
                            <div class="content-body">
                                <div class="row">
        <!-- FORM START FROM HERE FOR INSERTING --->                            
        <form action="add-distributer.php" method="post" enctype=""> 
                                    <div class="col-md-8 col-sm-9 col-xs-10">

                                        

                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Name of Business</label>
                                          
                                            <div class="controls">
                                                <input class="form-control"  type="text" placeholder="Name Of Business" name="bname"/>
                                                 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Type Of Business</label>
                                          
                                            <div class="controls">
                                               <select name="btype" class="form-control">
                                                    <option>Select Type Of business</option>
                                                    <option value="Retailer">Retailer </option>
                                                    <option value="Distributor">Distributor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Name of Owner</label>
                                          
                                            <div class="controls">
                                                 <input  type="text" class="form-control" placeholder="Name of Owner" name="oname"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Date of Birth</label>
                                          
                                            <div class="controls">
                                               <input   type="date" class="form-control" placeholder="Date of Birth" name="dob"/>
                                            </div>
                                            <div class="form-group">
                                            <label class="form-label" for="field-2">Gender</label>
                                          
                                            <div class="controls">
                                                <select name="gender" class="form-control"  >
                                                    <option>Gender</option>
                                                    <option value="Male">Male </option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label class="form-label" for="field-2">Address</label>
                                          
                                            <div class="controls">
                                               <textarea class="form-control" rows="3" cols="10" name="addr" >Address</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">City</label>
                                          
                                            <div class="controls">
                                                <input class="form-control"type="text" placeholder="City" name="city"/>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            <label class="form-label" for="field-2">District</label>
                                          
                                            <div class="controls">
                                               <input class="form-control"  type="text" placeholder="District" name="dist"/>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            <label class="form-label" for="field-2">State</label>
                                          
                                            <div class="controls">
                                                <input class="form-control" type="text" placeholder="State" name="state"/>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            <label class="form-label" for="field-2">Pin</label>
                                          
                                            <div class="controls">
                                               <input class="form-control" type="text" placeholder="Pin" name="pin"/>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            <label class="form-label" for="field-2">Mobile</label>
                                          
                                            <div class="controls">
                                                <input class="form-control" type="text" placeholder="Mobile no" name="phone"/>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            <label class="form-label" for="field-2">Email</label>
                                          
                                            <div class="controls">
                                               <input class="form-control" type="email" placeholder="Email" name="email"/>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            <label class="form-label" for="field-2">Username</label>
                                          
                                            <div class="controls">
                                                <input class="form-control" type="text" autocomplete="off" placeholder="Username" name="username"/>
                                            </div>
                                        </div>
                                       
                                         

                                         
                                        
                                         <div class="form-group">
                     <label class="form-label" for="field-1"></label>
                     <div class="controls">
                         <input type="submit" class="btn btn-primary" value="Add Distributor" id="txtPhone">
                     </div>
                 </div>
                                      
                  
                                    </div>
                  
           </form>
           <!-- FORM END FROM HERE FOR INSERTING --->  
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
        <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

<!-- Mirrored from jaybabani.com/ultra-admin/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 10:37:13 GMT -->
</html>



