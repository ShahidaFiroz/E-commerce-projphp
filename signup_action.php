<?php
session_start();

require('Database/Public_class.php');
require ('Database/common_code.php');

if(isset($_POST['Register']))
{
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$mob_no=$_POST['mobile_number'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$type="Customer";
	$status=0;
    
    $ph=$_FILES['upload_file']['name'];
    echo $photo=$_FILES['upload_file']['tmp_name'];
    $target_path = "uploads/User/";
    // echo $target_path = $target_path.basename($_FILES['upload_file']['name']);
    $COMMON=new common_code();
    $image_upload = $COMMON->Singlefile_Upload($target_path,$photo);
    //  echo $image_upload;
    exit();
    if($image_upload)
    {
    	$public_obj=new Public_class();
    	
        $insert=$public_obj->register_user($fname,$lname,$age,$gender,$address,$mob_no,$image_upload,$email,$password,$type,$status);
    		if($insert)
    		{
    			$_SESSION['register_employee']="<h6 style='color:green;text-align:center'>You Are Registered Sucessfully. ..</h6>";
    			
    		}
    		else
    		{
    			$_SESSION['register_employee']="<h6 style='color:red'>Erorr... plese try again!</h6>";
    			
    		}
    }
    header('Location:signUp.php');
    	
} 
else
{
	$_SESSION['upload_img']="<h6 style='color:red'>Error in Uploading image.Plese try again!</h6>";
	header('Location:signUp.php');
}
header('Location:signUp.php');

?>