<?php
session_start();
require('Database/Public_class.php');

$public_obj=new Public_class();

	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];

		$login=$public_obj->login($email,$password);
		 // print_r($login);
		$_SESSION['LOGIN_ID']=$login['User_id'];
		// exit();
		if($login['User_type']=="Admin")
		{
			header('location:Admin/index.php');
		}
		elseif($login['User_type'] == "Customer")
		{
			header('location:Customer/index.php');
		}
		else
		{
			$_SESSION['login_error']="<h5 style='color:red;text-align:center'>Invalid username or password...Plese try again!</h5><br><br>";
			header('location:Login.php');
		}


	}
?>