
<div class='page-topbar '>
            <div class='logo-area'>
<h1> &nbsp;Miners Panel</h1>
            </div>
            <div class='quick-area'>
                <div class='pull-left'>
 <ul class="info-menu left-links list-inline list-unstyled">
     
     
     <li class="">
        
         <ul class="dropdown-menu notifications animated fadeIn">
             <li class="total">
                 <span class="small">
  You have <strong>3</strong> new notifications.
  <a href="javascript:;" class="pull-right">Mark all as Read</a>
                 </span>
             </li>
             <li class="list">

                 <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
  <li class="unread status-available">
      <a href="javascript:;">
          <div class="user-img">
              <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
          </div>
          <div>
              <span class="name">
                  <strong>New User Register</strong>

                  <span class="profile-status available pull-right"></span>
              </span>
              <span class="desc small">
                 Notification message goes here
              </span>
          </div>
      </a>
  </li>
   
   <li class="unread status-available">
      <a href="javascript:;">
          <div class="user-img">
              <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
          </div>
          <div>
              <span class="name">
                  <strong>New User Register</strong>

                  <span class="profile-status available pull-right"></span>
              </span>
              <span class="desc small">
                 Notification message goes here
              </span>
          </div>
      </a>
  </li>

                 </ul>

             </li>

             <li class="external">
                 <a href="javascript:;">
  <span>Read All Notifications</span>
                 </a>
             </li>
         </ul>
     </li>
     <li class="hidden-sm hidden-xs searchform">
         <div class="input-group">
             
         </div>
     </li>
 </ul>
                </div>		
                <div class='pull-right'>
 <ul class="info-menu right-links list-inline list-unstyled">
     <li class="profile"><a href="#" data-toggle="dropdown" class="toggle">
                <button onclick="goBack()" style="height:50px;" class="btn btn-primary"> Back</button>
                   

<script>
function goBack() {
    window.location.href='dashboard.php';
}
</script>           
                                <span> Welcome <?php echo $_SESSION['minname']; ?> &nbsp;&nbsp;  <i class="fa fa-angle-down"></i></span>
                            </a>
         
         <ul class="dropdown-menu profile animated fadeIn">
          
             <li>
                 <a href="logout.php">
  <i class="fa fa-lock"></i>
  Logout
                 </a>
             </li>
         </ul>
     </li>
     
 </ul>			
                </div>		
            </div>

        </div>