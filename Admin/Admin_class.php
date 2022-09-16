<?php
require('../Database/database.php');
class Admin_class extends database
{
	public function my_profile($user_id)
	{
		$query = "SELECT * FROM `ds_user_register` WHERE `User_id`='$user_id'";
        
        $result = mysqli_query($this->con, $query);
        
        $result1=mysqli_fetch_array($result);
        
        return $result1;
	}
	public function add_catogory($cat_name,$cat_des,$cat_status)
	{
		$query = "INSERT INTO `ds_catogory`(`Catogory_name`,`Catogory_Description`, `Catogory_status`) VALUES ('$cat_name','$cat_des','$cat_status')";
        
        $result = mysqli_query($this->con, $query);
        
        return $result;
	}
	public function View_all_catogory($cat_status)
	{
		$query = "SELECT * FROM `ds_catogory` WHERE `Catogory_status`='$cat_status'";
        
        $result = mysqli_query($this->con, $query);
        $data=array();
		while($res=mysqli_fetch_array($result))
		{
			$data[]=$res;
		}
		return $data;
	}
	public function add_products($Product_name,$Product_catogory,$Product_description,$Product_price,$Product_quantity,$status)
	{
	    $query = "INSERT INTO `ds_products`(`Product_name`,`Product_catogory`,`Product_description`,`Product_price`,`Product_quantity`,`Product_status`) VALUES ('$Product_name','$Product_catogory','$Product_description','$Product_price','$Product_quantity','$status')";
        
        $result = mysqli_query($this->con, $query);
        
        return $result;
	}
	public function View_all_products($status)
	{
		$query = "SELECT * FROM `ds_products` WHERE `status`='$status'";
        
        $result = mysqli_query($this->con, $query);
        $data=array();
		while($res=mysqli_fetch_array($result))
		{
			$data[]=$res;
		}
		return $data;
	}
}
?>