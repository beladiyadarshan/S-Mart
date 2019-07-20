<?php
	session_start();
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/fav.png">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top"  id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">S!Mart</a>
				
			</div>

			<ul class="nav navbar-nav">
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn" name=""><span class='glyphicon glyphicon-search'></span></button></li>
			</ul>
		
			<ul class="nav navbar-nav navbar-right" >
				<li id='shoppingcart'><a id="carticon" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">2</span>	</a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3"><strong>S. No.</strong></div>
									<div class="col-md-3"><strong>Product Image</strong></div>
									<div class="col-md-3"><strong>Product Name</strong></div>
									<div class="col-md-3"><strong>Price in $</strong></div>
								</div>
								<hr>
								<div id="cartmenu">
								
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Hello, <?php echo $_SESSION['uname']; ?></a>
				<ul class="dropdown-menu">
					<li ><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart-large"></span> Cart</a></li>
					<li><a  class="cpassword">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				</li>

			</ul>
			
		</div>
	</div>

	<div class="modal fade" id="cpass1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
				      </div>
				      <div class="modal-body">
				      	<form>
				        <div class="col-md-6">
							<label for="oldpassword"> Old Password</label>
							<input type="password" id="oldpassword" name="oldpassword" class="form-control">
						</div><br>
						<div class="col-md-6">
							<label for="newpassword"> New Password</label>
							<input type="password" id="newpassword" name="newpassword" class="form-control">
						</div><br>
						<div class="col-md-12">
							<input type="button" class="btn btn-primary" value="Change" name="change" id="cpass_btn">
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>

				      </div>
				  </form>
				      <div class="panel-footer" id="c_msg"></div>
				    </div>
				  </div>
				</div>




	<br><br><br><br><br><br>
	<!-- Slider Begins -->

	 <div class="one-time">
	    <div><img src="assets/images/car1.jpg"></div>
	    <div><img src="assets/images/car22.png"></div>
	    <div><img src="assets/images/car3.jpg"></div>
  	</div>

	<!-- Slider ends -->

	<br>



	<div class="container-fluid">
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-2">
			
			<form method="post" action="addproduct.php"><button type="submit" style="width:192px;font-size: 16px;color:##337ab7;">Add Product</button></form> 
			<div id="get_cat"></div>
			
			<div id="get_brand"></div>
				
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" id="cartmsg">

					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading text-center">--Featured Products--
							<div class='pull-right'>
								Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort'>Price</a> | <a href="#" id='pop_sort'>Popularity</a>|<a href="#" id='area_sort'>Area</a>
							</div>
					</div>
					<div class="panel-body">
					<div id="get_product"></div>
						
					</div>
					<div class="panel-footer">&copy; 2019</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class='pagination' id='pageno'>

					</ul>
				</center>
			</div>


			<!-- Modal -->

				<div class="modal fade" id="prod_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Product Details</h4>
				      </div>
				      <div class="modal-body" id='dynamic_content'>
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

				      </div>
				    </div>
				  </div>
				</div>

			 <!-- Modal ends-->
		</div>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
<div class="foot"><footer>
<p style="color:red"><b> &copy;   copyright reserved 2019</b></p></footer></div>
<style> .foot{text-align: center;}
</style>
</html>
