<?php
session_start();

require ('Admin_class.php');

require ('../Database/common_code.php');

if(isset($_POST['add_product']))
{
    
	$Product_name=$_POST['Product_name'];
	$Product_catogory=$_POST['Product_catogory'];
	// $Product_image=$_POST['upload_file'];
	$Product_description=$_POST['Product_description'];
	$Product_price=$_POST['Product_price'];
	$Product_quantity=$_POST['Product_quantity'];
	$status=0;
    
    
    // $ph=$_FILES['upload_file']['name'];
     // $photo=$_FILES['upload_file']['tmp_name'];
    // $target_path = "uploads/Products/";
    // echo $target_path = $target_path.basename($_FILES['upload_file']['name']);
   // $COMMON=new common_code();
    // $image_upload = $COMMON->Singlefile_Upload($target_path,$photo);
     // echo $image_upload;
       // exit();
     // if($image_upload)
    // {
    	$ADMIN=new Admin_class();
    	
        $insert=$ADMIN->add_products($Product_name,$Product_catogory,$Product_description,$Product_price,$Product_quantity,$status);
    		if($insert)
    		{
    			$_SESSION['add_products']="<h6 style='color:green;text-align:center'>Product added  Sucessfully. ..</h6>";
    			
    		}
    		else
    		{
    			$_SESSION['add_products']="<h4 style='color:red'>Erorr... plese try again!</h4><br><br>";
    			
    		}
     // }
    header('Location:add_products.php');
    	
} 
else
{
	$_SESSION['upload_img']="<h6 style='color:red'>Error in Uploading image.Plese try again!</h6>";
	 header('Location:add_products.php');
}
header('Location:add_products.php');

?>