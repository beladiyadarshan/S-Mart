<?php 
	include('dbconnect.php');
	session_start();

	if(isset($_POST['userLogin'])){

		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$pwd=md5($_POST['pwd']);
		$sql="SELECT * FROM user_info WHERE email='$email' AND password='$pwd'";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		$c=$_SESSION["vercode"];
		if(($count==1) && ($c==$_POST['cap'])){
				$row=mysqli_fetch_array($run_query);
				$_SESSION['uid']=$row['user_id'];
				$_SESSION['uname']=$row['first_name'];
				echo "true";
		}
		else
		{
			echo "
			<div class='alert alert-warning'>
				<b>email or password invalid</b>
			</div>";
		}		
	}


	if(isset($_POST['cpass'])){
		$uid=$_SESSION['uid'];
		$sql="SELECT * FROM user_info WHERE user_id='$uid'";
		$run_query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($run_query);
		$p=$row['password'];
		$op=md5($_POST['op']);
		$np=$_POST['np'];
		if($p==md5($_POST['op']))
		{
			$p1=md5($np);
			$sql="UPDATE user_info SET password='$p1' WHERE user_id='$uid'";
			$run_query=mysqli_query($conn,$sql);
			echo "true";
		}
		else
		{
			echo "
			<div class='alert alert-warning'>
				<b>old password invalid $p $np</b>
			</div>";
		}
		
	}

	
 ?>