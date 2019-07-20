<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



if(isset($_POST['username']))$username=$_POST['username'];else $username="DefaultUser";

//if (!file_exists('upload')) 
//{
//   mkdir('upload', 0777, true);
//}

if(!empty($_FILES["myFile"]["name"]))
	{
    
		$target_location="/home/user1/ce14/".basename($_FILES["myFile"]["name"]);
		if(!(move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_location)))
                {echo "Error: " . $_FILES["myFile"]["error"] . "<br>";}
		else
		{
			//echo basename($target_location); 
                        $ext = pathinfo($target_location, PATHINFO_EXTENSION);
                        echo ($ext);
			$new="/home/user1/ce14/".$username.".".$ext;
                        //echo $new;
			rename($target_location,$new);
		       header("Location:index.php?msg=Congrats $username, Your File is Successfully Uploaded&x=$new");
			
		}
	}

?>
