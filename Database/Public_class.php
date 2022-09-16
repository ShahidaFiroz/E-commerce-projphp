<?php
require('database.php');
class Public_class extends database
{
	public function register_user($fname,$lname,$age,$gender,$address,$mob_no,$image_upload,$email,$password,$type,$status)
	{
		$query = "INSERT INTO `ds_user_register`(`User_fname`,`User_lname`,`User_age`,`User_gender`,`User_address`,`User_mobile_number`,`User_pic`,`User_email`,`User_password`,`User_type`,`User_status`)
                 VALUES ('$fname','$lname','$age','$gender','$address','$mob_no','$image_upload','$email','$password','$type','$status')";
        
        $result = mysqli_query($this->con, $query);
        
        return $result;
	}

	function login($email,$password)
	{
		
		$query=mysqli_query($this->con,"select * from ds_user_register where `User_email`='$email' and `User_password`='$password' and `User_status`=0");
		$result=mysqli_fetch_array($query);
		return $result;
	}
	
}
?>