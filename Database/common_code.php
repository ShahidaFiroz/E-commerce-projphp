<?php
// require('database.php');
class common_code   
{
	function Singlefile_Upload($target_path,$emp_pic) 
	{
        // echo $target_path;
        $file_name = $_FILES['upload_file']['name'];
        $temp_name = $_FILES['upload_file']['tmp_name'];
        
        //uniquekey generation
        $unique_key = uniqid().time();
        $unique_file_name = $unique_key.$file_name;
        $target_file= $target_path.$unique_file_name;

        if (move_uploaded_file($temp_name, $target_file)) {
            echo "The file ".$target_file. " has been uploaded.";
            return $unique_file_name;
        } else {
            echo "Sorry, there was an error uploading your file.";
            return false;
            
        }
    }
   
    
}
?>