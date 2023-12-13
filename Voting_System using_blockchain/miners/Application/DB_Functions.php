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
		$sql = $this->db->prepare("select * from faculty where emp_id=:name and password=:password");
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
       
	   
	   
	 function Update($id,$table)
    {
 
                $sql = $this->db->prepare("UPDATE $table SET approve='1' where ID=:id");
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
       function Update_for_application_verification($id,$table)
    {
 
                $sql = $this->db->prepare("UPDATE $table SET stud_verification='1' where ID=:id");
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
	
	function marks($id,$table) {
 
                $sql = $this->db->prepare("UPDATE assignment_upload SET marks='$table' where ID=:id");
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
	   
	     /* 
 * FUNCTION FOR Delete
 * 
 * AUTHOR: Kushal
 * 
 */
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


 function proof_of_work($blockchainid,$minid,$student_id)
 {
$sql =$this->db->prepare("INSERT INTO proof_of_work(`blockchain_id`,`miners_id`,`status`,`stud_id`) VALUES(:blockchainid,:minid,'1',:student_id)");

$sql->bindParam(':blockchainid', $blockchainid);
$sql->bindParam(':minid', $minid);
$sql->bindParam(':student_id', $student_id);


$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 
 
 
 function proof_of_work1($blockchainid,$minid,$student_id)
 {
$sql =$this->db->prepare("INSERT INTO proof_of_work(`blockchain_id`,`miners_id`,`status`,`stud_id`) VALUES(:blockchainid,:minid,'0',:student_id)");

$sql->bindParam(':blockchainid', $blockchainid);
$sql->bindParam(':minid', $minid);
$sql->bindParam(':student_id', $student_id);


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


	   
	    
 function insert_college($College_name,$Establishment,$university,$contact_info_1,$contact_info_2,$contact_info_3,$contact_email,$address,$city,$image_1,$image_2,$image_3){
$sql =$this->db->prepare("INSERT INTO college(`College_name`,`Establishment`,`university`,`contact_info_1`,`contact_info_2`,`contact_info_3`,`contact_email`,`address`,`city`,`image_1`,`image_2`,`image_3`) VALUES(:College_name,:Establishment,:university,:contact_info_1,:contact_info_2,:contact_info_3,:contact_email,:address,:city,:image_1,:image_2,:image_3)");
$image_1=date("mdYHis")."-".$image_1;
$image_2=date("mdYHis")."-".$image_2;
$image_3=date("mdYHis")."-".$image_3;
$sql->bindParam(':College_name', $College_name);
$sql->bindParam(':Establishment', $Establishment);
$sql->bindParam(':university', $university);
$sql->bindParam(':contact_info_1', $contact_info_1);
$sql->bindParam(':contact_info_2', $contact_info_2);
$sql->bindParam(':contact_info_3', $contact_info_3);
$sql->bindParam(':contact_email', $contact_email);
$sql->bindParam(':address', $address);
$sql->bindParam(':city', $city);
$sql->bindParam(':image_1', $image_1);
$sql->bindParam(':image_2', $image_2);
$sql->bindParam(':image_3', $image_3);
$sql->execute();
$tmp_name=$_FILES['file']['tmp_name'];
$location='assets/images/college/';
move_uploaded_file($tmp_name,$location.$image_1);

$tmp_name1=$_FILES['file1']['tmp_name'];
$location1='assets/images/college/';
move_uploaded_file($tmp_name1,$location1.$image_2);

$tmp_name2=$_FILES['file2']['tmp_name'];
$location2='assets/images/college/';
move_uploaded_file($tmp_name2,$location2.$image_3);

if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  function Add_branch($branch)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO branch(`branchs`)
VALUES(:branch)");

        $sql->bindParam(':branch', $branch);
       
		$sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            
        }
 }
 
 
 
 
 
 function Add_subject($branch,$subject,$sem){
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO  subject(`bran_id`, `subject`, `semister`)
VALUES(:branch,:subject,:sem)");

        $sql->bindParam(':branch', $branch);
		$sql->bindParam(':subject', $subject);
		$sql->bindParam(':sem', $sem);
       
		$sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            
        }
 }
 
 
 
 
 
 
 
 function Add_notice($title,$notice){
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO  notification(`title`, `notice`)
VALUES(:title,:notice)");

        $sql->bindParam(':title', $title);
		$sql->bindParam(':notice', $notice);
		
       
		$sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            
        }
 }
 
 
 
 
 
 
 
function Add_assignment($id,$branch,$subject,$sem,$title,$desc,$file)
    {
$sql = $this->db->prepare("INSERT INTO  assignment(`uploader_id`,`branch_id`, `subject_id`, `semister`,`assignment_title`,`assignment`,`descrption`)
VALUES(:id,:branch,:subject,:sem,:title,:file,:desc)");
		$file=date("mdYHis")."-".$file;
		
		$sql->bindParam(':id', $id);
		$sql->bindParam(':branch', $branch);
		$sql->bindParam(':subject', $subject);
		$sql->bindParam(':sem', $sem);
		$sql->bindParam(':title', $title);
		$sql->bindParam(':desc', $desc);
		
		$sql->bindParam(':file', $file);
		$sql->execute();
		
		$tmp_name=$_FILES['file']['tmp_name'];
		$location='../notes/';
		move_uploaded_file($tmp_name,$location.$file);
		
		

        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            
        }
 }
 
 
 
 
 
 
 
 
 
	
    function insert_faculty($first_name,$last_name,$empid,$password,$contact,$gender,$dob,$branch){
   $sql =$this->db->prepare("INSERT INTO faculty(`f_name`,`l_name`,`emp_id`,`password`,`contact`,`gender`,`dob`,`branch`) VALUES(:f_name,:l_name,:emp_id,:password,:contact,:gender,:dob,:branch)");

$sql->bindParam(':f_name', $first_name);
$sql->bindParam(':l_name', $last_name);
$sql->bindParam(':emp_id', $empid);
$sql->bindParam(':password', $password);
$sql->bindParam(':contact', $contact);
$sql->bindParam(':gender', $gender);
$sql->bindParam(':dob', $dob);
$sql->bindParam(':branch', $branch);
$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}

    
 
    
	
	
	
	  
   /* 
 * FUNCTION FOR Regisrter Consultant
 * 
 * AUTHOR: Kushal
 * 
 */
	
	
	
	 function Register_Consultant1($Regeiter_type,$f_name,$m_name,$l_name,$dob,$gender,$address,$city,$state,$country,$pincode,$mobile_no,$landline,$email,$desc)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO consultant( `register_by`, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `address`, `city_town`, `state`, `country`, `pincode`, `mobile`, `landline`, `email`, `describe_yourself`)
VALUES(:Regeiter_type,:f_name,:m_name,:l_name,:gender,:dob,:address,:city,:state,:country,:pincode,:mobile_no,:landline,:email,:desc)");
		
		$sql->bindParam(':Regeiter_type', $Regeiter_type);
        $sql->bindParam(':f_name', $f_name);
		$sql->bindParam(':m_name', $m_name);
        $sql->bindParam(':l_name', $l_name);
		 $sql->bindParam(':dob', $dob);
		$sql->bindParam(':gender', $gender);
        $sql->bindParam(':address', $address);
		$sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
		$sql->bindParam(':country', $country);
		$sql->bindParam(':pincode', $pincode);
        $sql->bindParam(':mobile_no', $mobile_no);
		$sql->bindParam(':landline', $landline);
		$sql->bindParam(':email', $email);
        $sql->bindParam(':desc', $desc);
		$sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            
        }
 }
 
 
 
 function Register_Consultant_qualification($c_id,$Graduation,$Specialization,$University,
 $Year,$Post_Graduation,$pg_Specialization,$pg_University,$pg_Year,$phd,
 $phd_Specialization,$phd_University,$phd_year,$civil_service_exam,$service_year,
 $lang_1,$lang_1_1,$lang_1_2,$lang_1_3,$lang_2,$lang_2_1,$lang_2_2,$lang_2_3,$lang_3,
 $lang_3_1,$lang_3_2,$lang_3_3,$cat,$challenged,$challenged_desc,$certificate)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO consultant_qualification(`consultant_id`,`graduation`, `graduation_specialization`,
 `graduation_university`, `graduation_year`, `post_graduation`, `post_graduation_specialization`,
  `post_graduation_university`, `post_graduation_year`, `phd`, `phd_specialization`, 
  `phd_university`, `phd_year`, `civil_service_exam`, `civil_service_exam_year`,
   `languages_known_one`, `languages_known_one_read`, `languages_known_one_write`,
    `languages_known_one_speak`, `languages_known_two`, `languages_known_two_read`, 
	`languages_known_two_write`, `languages_known_two_speak`, `languages_known_three`, 
	`languages_known_three_read`, `languages_known_three_write`, `languages_known_three_speak`,
	`category`,`physically_challenged`,	`physically_challenged_explain`,`certificate_attachment`)
VALUES(:c_id,:Graduation,:Specialization,:University,:Year,:Post_Graduation,:pg_Specialization
,:pg_University,:pg_Year,:phd,:phd_Specialization,:phd_University,:phd_year,:civil_service_exam,
:service_year,:lang_1,:lang_1_1,:lang_1_2,:lang_1_3,:lang_2,:lang_2_1,:lang_2_2,:lang_2_3,
:lang_3,:lang_3_1,:lang_3_2,:lang_3_3,:cat,:challenged,:challenged_desc,:certificate)");
		$certificate=date("mdYHis")."-".$certificate;
		$sql->bindParam(':c_id', $c_id);	
		$sql->bindParam(':Graduation', $Graduation);
        $sql->bindParam(':Specialization', $Specialization);
		$sql->bindParam(':University', $University);
        $sql->bindParam(':Year', $Year);
		$sql->bindParam(':Post_Graduation', $Post_Graduation);
		$sql->bindParam(':pg_Specialization', $pg_Specialization);
        $sql->bindParam(':pg_University', $pg_University);
		$sql->bindParam(':pg_Year', $pg_Year);
        $sql->bindParam(':phd', $phd);
		$sql->bindParam(':phd_Specialization', $phd_Specialization);
		$sql->bindParam(':phd_University', $phd_University);
        $sql->bindParam(':phd_year', $phd_year);
		$sql->bindParam(':civil_service_exam', $civil_service_exam);
		$sql->bindParam(':service_year', $service_year);
		
		
		 $sql->bindParam(':lang_1', $lang_1);
		$sql->bindParam(':lang_1_1', $lang_1_1);
		$sql->bindParam(':lang_1_2', $lang_1_2);
        $sql->bindParam(':lang_1_3', $lang_1_3);
		$sql->bindParam(':lang_2', $lang_2);
        $sql->bindParam(':lang_2_1', $lang_2_1);
		$sql->bindParam(':lang_2_2', $lang_2_2);
		$sql->bindParam(':lang_2_3', $lang_2_3);
        $sql->bindParam(':lang_3', $lang_3);
		$sql->bindParam(':lang_3_1', $lang_3_1);
		$sql->bindParam(':lang_3_2', $lang_3_2);
		$sql->bindParam(':lang_3_3', $lang_3_3);
		
		$sql->bindParam(':cat', $cat);
		$sql->bindParam(':challenged', $challenged);
		$sql->bindParam(':challenged_desc', $challenged_desc);
		$sql->bindParam(':certificate', $certificate);
        
		$sql->execute();
		$tmp_name=$_FILES['file']['tmp_name'];
$location='assets/Consultant_data/certificate/';
move_uploaded_file($tmp_name,$location.$certificate);

        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            
        }
 }
 
 
 
 
 
 
 function Consultant_attachments($cv,$files,$id)
    {
$sql = $this->db->prepare("INSERT INTO consultant_attachments(`consultant_id`, `cv`, `files`)
VALUES(:id,:cv,:files)");
		$cv=date("mdYHis")."-".$cv;
		$files=date("mdYHis")."-".$files;
		$sql->bindParam(':id', $id);
		$sql->bindParam(':cv', $cv);
		$sql->bindParam(':files', $files);
		$sql->execute();
		
		$tmp_name=$_FILES['file']['tmp_name'];
		$location='assets/Consultant_data/cv/';
		move_uploaded_file($tmp_name,$location.$cv);
		
		$tmp_name=$_FILES['file1']['tmp_name'];
		$location='assets/Consultant_data/details/';
		move_uploaded_file($tmp_name,$location.$files);

        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            
        }
 }
 
 
 function Consultant_state_department($id,$state,$department){
$sql = $this->db->prepare("INSERT INTO consultant_state_department(`consultant_id`, `state`, `department`)
VALUES(:id,:state,:department)");
		
		$sql->bindParam(':id', $id);
		$sql->bindParam(':state', $state);
		$sql->bindParam(':department', $department);
		$sql->execute();
		
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            
        }
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 function Approve_Consultant($ids)
    
                {
	
$sql = $this->db->prepare("UPDATE consultant SET approve='1' WHERE ID='$ids'");
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

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 function UpdateCategory($id,$category_name,$status)
    
                {
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("UPDATE ep_category SET CATEGORY_NAME=:category_name,STATUS=:status WHERE CAT_ID='$id'");

        $sql->bindParam(':category_name', $category_name);
         $sql->bindParam(':status', $status);
        

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
    /* 
 * FUNCTION FOR DELETING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
    function DeleteCategory($id)
    {
 
                $sql = $this->db->prepare("delete from ep_category where CAT_ID=:id");
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
      
    /*
 * 
 * FUNCTION FOR INSERTING SUB-CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
	
    function StoreSubCategory($main_cate,$sub_cate,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_sub_category(`MAIN_CATEGORY`, `SUB_CATEGORY_NAME`, `STATUS`)
VALUES(:MAIN_CATEGORY,:SUB_CATEGORY_NAME,:STATUS)");

        $sql->bindParam(':MAIN_CATEGORY', $main_cate);
        $sql->bindParam(':SUB_CATEGORY_NAME', $sub_cate);
        $sql->bindParam(':STATUS', $status);
 
        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
 
 
  function StoreSearch($cat,$name)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_search(`category`,`name`)VALUES(:cat,:name)");

        $sql->bindParam(':cat', $cat);
        $sql->bindParam(':name', $name);
      
 
        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
 
 
 
 
 
 
  /* 
 * FUNCTION FOR UPDATING Sub CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
     function UpdateSubCategory($id,$main_cate,$sub_cate,$status)
    
                {
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("UPDATE ep_sub_category SET MAIN_CATEGORY=:MAIN_CATEGORY, SUB_CATEGORY_NAME=:SUB_CATEGORY_NAME, STATUS=:STATUS WHERE SUB_ID='$id'");

        $sql->bindParam(':MAIN_CATEGORY', $main_cate);
        $sql->bindParam(':SUB_CATEGORY_NAME', $sub_cate);
        $sql->bindParam(':STATUS', $status);

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
    
        /* 
 * FUNCTION FOR DELETING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
    function DeleteSubCategory($id)
    {
 
                $sql = $this->db->prepare("delete from ep_sub_category where SUB_ID=:id");
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
      
      
      /*
 * 
 * FUNCTION FOR INSERTING PRODUCT
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
	
    function StoreProduct($pname,$price,$desc,$mfd,$dis_ID,$dis_name,$city,$qty,$main_cate,$sub_cate,$unit,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_product(`PRODUCT_NAME`,`PRICE`,`DESCRIPTION`,`QTY`,`PRODUCT_TYPE`,`PRODUCT_SUB_TYPE`,`PACKAGE_UNIT`,`MANUFACTRE`,`DISTRIBUTER_ID`,`DISTRIBUTER`,`CITY`,`STATUS`)
VALUES(:pname,:price,:desc,:qty,:main_cate,:sub_cate,:unit,:mfd,:dis_ID,:dis_name,:city,:status)");

        $sql->bindParam(':pname', $pname);
        $sql->bindParam(':price', $price);
        $sql->bindParam(':desc', $desc);
        $sql->bindParam(':qty', $qty);
        $sql->bindParam(':main_cate', $main_cate);
        $sql->bindParam(':sub_cate', $sub_cate);
        $sql->bindParam(':unit', $unit);
        $sql->bindParam(':mfd', $mfd);
        $sql->bindParam(':dis_ID', $dis_ID);
		$sql->bindParam(':dis_name', $dis_name);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':status', $status);
      

        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
    /* 
 * FUNCTION FOR UPDATING Sub CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
     function UpdateProduct($id,$pname,$price,$desc,$mfd,$dis,$city,$qty,$main_cate,$sub_cate,$unit,$status)
    
                {
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("UPDATE ep_product SET PRODUCT_NAME=:pname, PRICE=:price, DESCRIPTION=:desc, QTY=:qty, PRODUCT_TYPE=:main_cate, PRODUCT_SUB_TYPE=:sub_cate, PACKAGE_UNIT=:unit, MANUFACTRE=:mfd, DISTRIBUTER=:dis, CITY=:city, STATUS=:status WHERE PD_ID='$id'");

        $sql->bindParam(':pname', $pname);
        $sql->bindParam(':price', $price);
        $sql->bindParam(':desc', $desc);
        $sql->bindParam(':qty', $qty);
        $sql->bindParam(':main_cate', $main_cate);
        $sql->bindParam(':sub_cate', $sub_cate);
        $sql->bindParam(':unit', $unit);
        $sql->bindParam(':mfd', $mfd);
        $sql->bindParam(':dis', $dis);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':status', $status);
      
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
    /* 
 * FUNCTION FOR DELETING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
    function DeleteProduct($id)
    {
 
                $sql = $this->db->prepare("delete from ep_product where PD_ID=:id");
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
    
      
      /*
 * 
 * FUNCTION FOR INSERTING USER
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
	
    function StoreUser($bname,$btype,$oname,$dob,$gender,$addr,$city,$dist,$state,$pin,$phone,$email,$username,$pass,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_user(`NAME_BUSINESS`, `TYPE_BUSINESS`, `NAME_OWNER`, `DOB`, `SEX`, `ADDRESS`, `CITY`, `DISTRICT`, `PIN`, `STATE`, `PHONE`, `EMAIL`, `USERNAME`, `PASSWORD`, `STATUS`)
VALUES(:banme,:btype,:oname,:dob,:gender,:addr,:city,:dist,:pin,:state,:phone,:email,:username,:pass,:status)");

        $sql->bindParam(':banme', $bname);
        $sql->bindParam(':btype', $btype);
        $sql->bindParam(':oname', $oname);
        $sql->bindParam(':dob', $dob);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':addr', $addr);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':dist', $dist);
        $sql->bindParam(':pin', $pin);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':username', $username);
        $sql->bindParam(':pass', $pass);
        $sql->bindParam(':status', $status);
      

        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
 /*
  * FUNCTION FOR USER LOGIN
  */
 
 function UserLogin($name,$passwordlogin)
	{
		$sql = $this->db->prepare("select * from ep_user where USERNAME=:username and PASSWORD=:passwordlogin");
			/* execute statement */
		$sql->bindParam(':username', $name);
                $sql->bindParam(':passwordlogin', $passwordlogin);
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
 
}
?>