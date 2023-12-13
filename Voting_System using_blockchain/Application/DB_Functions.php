<?php
require "connection.php";


Class Connections {

    public $db;
    public function __Construct()
    {
        $this->db = new mPDO();
        //return $this->db;
    }
	
	
	
	public function CheckLogin($name,$password)
	{
		$sql = $this->db->prepare("select * from student where Student_email=:name and Student_password=:password");
			/* execute statement */
		$sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
		$sql->execute();
		
			/* bind result variables */
			$row=$sql->fetchColumn();  ///fetchColumn() is used to select rows from table like mysql_num_row used in normal php 
				if ($row > 0)
				{
					return true;
					
				}
				else 
				{
					return false;	
				}
	}
	
	
	public function comCheckLogin($name,$password)
	{
		$sql = $this->db->prepare("select * from company where company_email=:name and company_password=:password");
			/* execute statement */
		$sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
		$sql->execute();
		
			/* bind result variables */
			$row=$sql->fetchColumn();  ///fetchColumn() is used to select rows from table like mysql_num_row used in normal php 
				if ($row > 0)
				{
					return true;
					
				}
				else 
				{
					return false;	
				}
	}
	
	
	public function uniCheckLogin($name,$password)
	{
		$sql = $this->db->prepare("select * from university where username=:name and password=:password");
			/* execute statement */
		$sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
		$sql->execute();
		
			/* bind result variables */
			$row=$sql->fetchColumn();  ///fetchColumn() is used to select rows from table like mysql_num_row used in normal php 
				if ($row > 0)
				{
					return true;
					
				}
				else 
				{
					return false;	
				}
	}
	
	
	public function minCheckLogin($name,$password)
	{
		$sql = $this->db->prepare("select * from miners where email=:name and psw=:password");
			/* execute statement */
		$sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
		$sql->execute();
		
			/* bind result variables */
			$row=$sql->fetchColumn();  ///fetchColumn() is used to select rows from table like mysql_num_row used in normal php 
				if ($row > 0)
				{
					return true;
					
				}
				else 
				{
					return false;	
				}
	}
	
	
	public function ICheckLogin($name,$password)
	{
		$sql = $this->db->prepare("select * from college where college_email=:name and college_password=:password");
			/* execute statement */
		$sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
		$sql->execute();
		
			/* bind result variables */
			$row=$sql->fetchColumn();  ///fetchColumn() is used to select rows from table like mysql_num_row used in normal php 
				if ($row > 0)
				{
					return true;
					
				}
				else 
				{
					return false;	
				}
	}
	
	
	
	

 function insert_student($first_name,$email,$password,$contact,$age,$add,$city,$gender,$file){
$sql =$this->db->prepare("INSERT INTO `student` (`Student_name`, `Student_contact`, `Student_email`, `Student_password`, `Student_photo`, `age`, `address`, `city`, `gender`) VALUES (:first_name,:contact,:email,:password,:file,:age,:add,:city,:gender)");

$file=date("mdYHis")."-".$file;

$sql->bindParam(':first_name', $first_name);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':contact', $contact);
$sql->bindParam(':age', $age);
$sql->bindParam(':add', $add);
$sql->bindParam(':city', $city);
$sql->bindParam(':gender', $gender);
$sql->bindParam(':file', $file);

$sql->execute();

$tmp_name=$_FILES['file']['tmp_name'];
$location='images/student_profile/';
move_uploaded_file($tmp_name,$location.$file);


if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}

 function insert_company_reg($reg_no,$f_name,$email,$password,$contact,$add,$city,$file){
$sql =$this->db->prepare("INSERT INTO `company` (`company_reg_no`, `company_name`, `company_email`, `company_password`, `company_addreess`, `company_logo`, `company_city`, `company_contact`) VALUES (:reg_no, :f_name, :email,:password, :add, :file,:city, :contact);");

$file=date("mdYHis")."-".$file;

$sql->bindParam(':reg_no', $reg_no);
$sql->bindParam(':f_name', $f_name);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':contact', $contact);
$sql->bindParam(':add', $add);
$sql->bindParam(':city', $city);
$sql->bindParam(':file', $file);

$sql->execute();

$tmp_name=$_FILES['file']['tmp_name'];
$location='images/company/';
move_uploaded_file($tmp_name,$location.$file);


if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 

 function insert_college($first_name,$reg_no,$email,$password,$contact,$add,$city,$file){
$sql =$this->db->prepare("INSERT INTO `college` ( `college_name`, `college_reg_no`, `college_email`, `college_password`, `college_logo`, `address`, `city`, `contact`) VALUES (:first_name,:reg_no,:email,:password,:file,:add,:city,:contact)");

$file=date("mdYHis")."-".$file;

$sql->bindParam(':first_name', $first_name);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':contact', $contact);
$sql->bindParam(':reg_no', $reg_no);
$sql->bindParam(':add', $add);
$sql->bindParam(':city', $city);

$sql->bindParam(':file', $file);

$sql->execute();

$tmp_name=$_FILES['file']['tmp_name'];
$location='images/institute/';
move_uploaded_file($tmp_name,$location.$file);


if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 






	function create_question($question,$code,$name,$category)
 {
$sql =$this->db->prepare("INSERT INTO forum(`question`,`code`,`question_owner`,`category`) VALUES(:question,:code,:question_owner,:category)");

$sql->bindParam(':question', $question);
$sql->bindParam(':code', $code);
$sql->bindParam(':question_owner', $name);
$sql->bindParam(':category', $category);

$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 
 
 
	
	
	function ans($id,$table){
$sql =$this->db->prepare("INSERT INTO replies(`question_id`,`reply`,`reply_by`) VALUES(:question_id,:reply,:reply_by)");

$sql->bindParam(':question_id', $id);
$sql->bindParam(':reply', $table);

$sql->bindParam(':reply_by', $_SESSION['name']);
$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}



	function insert_miners_reg($f_name,$email,$password,$contact){
$sql =$this->db->prepare("INSERT INTO `miners` (`name`, `email`, `psw`, `contact`)
 VALUES (:f_name,:email,:password,:contact);");

$sql->bindParam(':f_name', $f_name);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':contact', $contact);

$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}


	
	
	
	        
		
	public function insert_comment($userMsg,$user_id,$tour_id){
	$sql =$this->db->prepare("INSERT INTO comments(`tour_id`,`user_id`,`comment`) VALUES(:tour_id,:user_id,:userMsg)");
$sql->bindParam(':tour_id', $tour_id);
$sql->bindParam(':user_id', $user_id);
$sql->bindParam(':userMsg', $userMsg);

$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 
  
public function insert_user($first_name,$last_name,$email,$password,$loc){
$sql =$this->db->prepare("INSERT INTO user(`first_name`,`last_name`,`location`,`email`,`password`) VALUES(:first_name,:last_name,:location,:email,:password)");
$sql->bindParam(':first_name', $first_name);
$sql->bindParam(':last_name', $last_name);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':location', $loc);
$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}

function insert_company($c_name,$o_name,$doe,$email,$password,$contact,$address,$city,$pincode){
$sql =$this->db->prepare("INSERT INTO travel_company(`company_name`,`owner_name`,`doe`,`email`,`password`,`contact`,`address`,`city`,`pincode`) VALUES(:company_name,:owner_name,:doe,:email,:password,:contact,:address,:city,:pincode)");
$sql->bindParam(':company_name', $c_name);
$sql->bindParam(':owner_name', $o_name);
$sql->bindParam(':doe', $doe);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':contact', $contact);
$sql->bindParam(':address', $address);
$sql->bindParam(':city', $city);
$sql->bindParam(':pincode', $pincode);



$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}



public function Company_Login($name,$password)
	{
$sql = $this->db->prepare("select * from travel_company where email=:name and password=:password");
		$sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
		$sql->execute();
		$row=$sql->fetchColumn();
				if ($row > 0)
				{
					return true;
					
				}
				else 
				{
					return false;	
				}
	}
      












 function Add_assignment($assign_id,$stud_id,$desc,$tid,$file){
$sql =$this->db->prepare("INSERT INTO assignment_upload(`assignment_id`,`stud_id`,`desc`,`teachers_id`,`assignment`) VALUES(:assignment_id,:stud_id,:desc,:teachers_id,:assignment)");

$file=date("mdYHis")."-".$file;

$sql->bindParam(':assignment_id', $assign_id);
$sql->bindParam(':stud_id', $stud_id);
$sql->bindParam(':desc', $desc);
$sql->bindParam(':teachers_id', $tid);
$sql->bindParam(':assignment', $file);

$sql->execute();

$tmp_name=$_FILES['file']['tmp_name'];
$location='stud_assignment/';
move_uploaded_file($tmp_name,$location.$file);


if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 













 function insert_profile($email,$school,$passout,$highschool,$highschool_passout,$currently_working,$lives_in,$from,$hobby,$pic){
$sql =$this->db->prepare("INSERT INTO profile(`user_id`,`school`,`passout`,`highschool`,`highschool_passout`,`currently_working`,`lives_in`,`from`,`hobby`,`pic`)VALUES(:email,:school,:passout,:highschool,:highschool_passout,:currently_working,:lives_in,:from,:hobby,:pic)");
$pic=date("mdYHis")."-".$pic;
$sql->bindParam(':email', $email);
$sql->bindParam(':school', $school);
$sql->bindParam(':passout', $passout);
$sql->bindParam(':highschool', $highschool);
$sql->bindParam(':highschool_passout', $highschool_passout);
$sql->bindParam(':currently_working', $currently_working);
$sql->bindParam(':lives_in', $lives_in);
$sql->bindParam(':from', $from);
$sql->bindParam(':hobby', $hobby);
$sql->bindParam(':pic', $pic);
$sql->execute();

$tmp_name=$_FILES['file']['tmp_name'];
$location='assets/images/pro_pic/';
move_uploaded_file($tmp_name,$location.$pic);


if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 
 
 
  function delete($id,$table)
    {
 
                $sql = $this->db->prepare("delete from $table where ID=:id");
                $sql->bindParam(':id', $id);
                $sql->execute();
                if($sql)
                {
                return 1;
                }
                else
                {
                return 0;
                }
      }
	
    
	
	
function Change_password($new,$email)
    
                {
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("UPDATE user SET password=:new WHERE email='$email'");

        $sql->bindParam(':new', $new);
        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            // echo $this->db->$sql;
             
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
    }
	
	
	
	public function insert_post($email,$first_name,$file,$post,$time,$date){
$sql =$this->db->prepare("INSERT INTO wall(`sender_id`, `sender_name`, `pic`, `message`, `uploaded_time`, `uploaded_date`) VALUES(:email,:first_name,:file,:post,:time,:date)");
$file=date("mdYHis")."-".$file;
$sql->bindParam(':email', $email);
$sql->bindParam(':first_name', $first_name);
$sql->bindParam(':file', $file);
$sql->bindParam(':post', $post);
$sql->bindParam(':time', $time);
$sql->bindParam(':date', $date);
$sql->execute();
$tmp_name=$_FILES['file']['tmp_name'];
$location='assets/images/post/';
move_uploaded_file($tmp_name,$location.$file);

if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}


public function add_request($sender,$receiver){
$sql =$this->db->prepare("INSERT INTO friends_request(`sender`,`receiver`) VALUES(:sender,:receiver)");
$sql->bindParam(':sender', $sender);
$sql->bindParam(':receiver', $receiver);

$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
} 
}
?>