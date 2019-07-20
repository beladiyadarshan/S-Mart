<html>
  <head>
  </head>
  <style>
  
input[type=text],input[type=number],input[type=file]
 {
    
 
  width: 100%;
  padding: 2px;
  margin: 3px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

.insertbtn {
  background-color: blueviolet;
  color: white;
  padding: 8px 5px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

</style>




  <form method="post" action="upload.php" enctype="multipart/form-data">
				   <h1> Enter Product Details :</h1>
						<hr>
					<center>
					
					<table>
					 
						
						
				        	<tr><td>Brand :</td>
							<td><select name="brand">
				        		<option value="1">HP</option>
				        		<option value="2">Samsung</option>
				        		<option value="3">Apple</option>
				        		<option value="4">Sony</option>
				        		<option value="5">LG</option>
				        		<option value="6">Biba</option>
				        		<option value="7">Flying Machine</option>
				        		<option value="8">Nike</option>
				        		<option value="9">Adidas</option>
				        		<option value="10">Kidzee</option>
				        		<option value="11">lkea</option>
				        		<option value="12">Philips</option>
				        	</select></td></tr>
							<tr>
							<td>Pruduct_title</td>
							<td><input type="text" name="p_title"/></td>
				        	<tr>
							<td>Poduct_price</td>
							<td><input type="number" name="p_price"/></td></tr>
				        	<tr><td>Product_desc</td><td><input type="text" name="p_desc"/></td></tr>
				        	<tr><td>Product_keywords</td><td><input type="text" name="p_keyword"/></td></tr>
							<tr><td>Image[225x225] :</td>
						<td><input type="file" name="myFile" ></td></tr>
						<tr><td>city</td><td><input type="text" name="city"/></td></tr>
						<tr><td>Phone no</td><td><input type="number" name="p_no"/></td></tr>
				        	<tr><td colspan="2"><center><button type='submit' class='insertbtn' id="oldprod">Insert</button></center></td></tr>
							</table>
							</center>
				        </form>
						