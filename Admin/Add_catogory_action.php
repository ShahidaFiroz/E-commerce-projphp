<?php
session_start();
require('Admin_class.php');

$ADMIN=new Admin_class();

	if(isset($_POST['add_catogory']))
	{
		$cat_name=$_POST['catogory_name'];
		$cat_des=$_POST['catogory_des'];
		$cat_status=0;

		$catogory=$ADMIN->add_catogory($cat_name,$cat_des,$cat_status);
		 // print_r($login);
		
		if($catogory)
		{
			$_SESSION['add_catogory']="<h5 style='color:green;text-align:center'>Sucessfully added one catogory...</h5><br><br>";
			header('location:Add_catogory.php');
		}
		else
		{
			$_SESSION['add_catogory']="<h5 style='color:red;text-align:center'>Error...Plese try again!</h5><br><br>";
			header('location:Add_catogory.php');
		}


	}
?>