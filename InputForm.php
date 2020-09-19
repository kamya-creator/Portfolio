<!DOCTYPE html>
<html>
<head>
	<title>Create My Portfolio</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>

<style>
	body{
		overflow-x:hidden; 
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}

	.well{
		background-color: #187FAB;
	}
	#signin{
		width: 60%;
		border-radius: 30px;
	}
	.overlap-text{
		position: relative;
	}
	.overlap-text a{
		position: absolute;
		top:8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono' , monospace;
		letter-spacing: -1px
	}
</style>
<body>
	<div class="row">
		<div class="col-sm-12">
				<div class="well">
					<center><h1 style="color: white">Create Your Portfolio</h1></center>
					</div>
			
		</div>
	</div>
<body>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Fill form to Create Portfolio</strong></h3>
		<div class="l-part">
			<form action="insert.php" method="POST" enctype="multipart/form-data">
				<input type="name" name="fname" placeholder="First Name" required="required" class="form-control input-md"><br>
				<input type="name" name="lname" placeholder="Last Name"  class="form-control input-md"><br>
				<div class="overlap-text">
					<input type="email" name="email" placeholder="Email"
					required="required" class="form-control input-md"><br>
					<h3> What Services You Provide</h3>
					<textarea rows="5" cols="60" name="services" required="required" placeholder="services" class="form-control input-md">
						
					</textarea><br>
					<h3>Give brief description of Services You provide</h3>
					<h3>Service 1</h3>
					<textarea rows="5" cols="60" name="service1" required="required" placeholder="service1" class="form-control input-md">
						
					</textarea><br>


					<h3>Service 2</h3>
					<textarea rows="5" cols="60" name="service2"  placeholder="service2" class="form-control input-md">
						
					</textarea><br>

					<h3>Service 3</h3>
					<textarea rows="5" cols="60" name="service3"  placeholder="service3" class="form-control input-md">
						
					</textarea><br>

					<h3>Service 4</h3>
					<textarea rows="5" cols="60" name="service4"  placeholder="service4" class="form-control input-md">
						
					</textarea><br>

					<h2> Rectant Projects</h2><br>
							<h3>Project 1</h3><br> 
					<textarea rows="5" cols="60" name="project1" required="required" class="form-control input-md">
							Enter Project 1 details..
					</textarea><br>
					<h3>Project 2</h3><br> 
					<textarea rows="5" cols="60" name="project2" class="form-control input-md">
						Enter Project 2 details..
					</textarea><br>
					<h3>Project 3</h3><br> 
					<textarea rows="5" cols="60" name="project3" class="form-control input-md">
						Enter Project 3 details..
					</textarea><br>
					<h3>Project 4</h3><br> 
					<textarea rows="5" cols="60" name="project4" class="form-control input-md">
						Enter Project 4 details..
					</textarea><br>
					<h3>Project 5</h3><br> 
					<textarea rows="5" cols="60" name="project5" class="form-control input-md">
						Enter Project 5 details..
					</textarea><br>

					<h2>About Me</h2><br> 
					<textarea rows="5" cols="60" name="aboutme" class="form-control input-md">
						Enter Your introduction here..
					</textarea><br>
					<h2>Upload Your Image</h2><br>
					<input type="file" name="image" required="required" /><br>

			        <h2>Contact Info</h2>

					<h4>Phone <input type="text" name="phone" class="form-control input-md"></h4><br>

					<h4>Address <input type="text" name="address" class="form-control input-md"></h4><br>
					<center><button id="submit" class="btn btn-info btn-lg" name="submit" >
							Submit</button></center>
							<?php
							if(isset($_POST['submit']))
							
							 include("insert.php");
							 ?>
					
			</form>
		</div>	
		</div>
	</div>
</div>
	
</body>
</html>