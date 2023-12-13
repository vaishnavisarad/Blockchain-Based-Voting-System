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
		$sql = $this->db->prepare("select * from admin_login where username=:name and password=:password");
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
        
     	
/*
 * 
 * FUNCTION FOR INSERTING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
	
    function StoreCategory($category_name,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_category(`CATEGORY_NAME`, `STATUS`)
VALUES(:category_name,:status)");

        $sql->bindParam(':category_name', $category_name);
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
 * FUNCTION FOR UPDATING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
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
	
    function StoreProduct($pname,$price,$desc,$mfd,$dis,$city,$qty,$main_cate,$sub_cate,$unit,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_product(`PRODUCT_NAME`,`PRICE`,`DESCRIPTION`,`QTY`,`PRODUCT_TYPE`,`PRODUCT_SUB_TYPE`,`PACKAGE_UNIT`,`MANUFACTRE`,`DISTRIBUTER`,`CITY`,`STATUS`)
VALUES(:pname,:price,:desc,:qty,:main_cate,:sub_cate,:unit,:mfd,:dis,:city,:status)");

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
}
?>