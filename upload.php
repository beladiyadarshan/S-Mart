<?php 
	session_start();
	include('dbconnect.php');
	if(!empty($_FILES["myFile"]["name"]))
	{
    
        $n="assets/images/".basename($_FILES["myFile"]["name"]);
        $new=basename($_FILES["myFile"]["name"]);
		if(!(move_uploaded_file($_FILES["myFile"]["tmp_name"], $n)))
                {echo "Error: " . $_FILES["myFile"]["error"] . "<br>";}
		
	}
	$brand=$_POST['brand'];
	$p_title=$_POST['p_title'];
	$p_price=$_POST['p_price'];
	$p_desc=$_POST['p_desc'];
	$p_keyword=$_POST['p_keyword'];
	$p_no=$_POST['p_no'];
	$p_city=$_POST['city'];
	$uid=$_SESSION['uid'];


	if(empty($new) || empty($brand) || empty($p_title) || empty($p_price) || empty($p_desc) || empty($p_keyword)){
		echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Please fill all the fields!</div>";
		exit(0);
	}
		else {
					$sql="INSERT INTO products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) VALUES ('7','$brand','$p_title','$p_price','$p_desc','$new','$p_keyword')";
					$run_query=mysqli_query($conn,$sql);

					$sql="INSERT INTO old_products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords,phone_no,user_id,city) VALUES ('7','$brand','$p_title','$p_price','$p_desc','$new','$p_keyword','$p_no','$uid','$p_city')";
					$run_query=mysqli_query($conn,$sql);

					if($run_query){
						header("Location: profile.php");

					}
			}
		
	

	

	
 ?>