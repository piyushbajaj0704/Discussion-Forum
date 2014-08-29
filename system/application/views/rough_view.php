<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/mystyle.css"  type="text/css" >
<link rel="stylesheet" href="css/styles.css"  type="text/css" >
<script type="text/javascript" src="js/analogCanvasClock.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<style>
label{width:100px;float:left; margin-top:4px;}
		.main{width:658px; height:auto; margin:auto;}
		.input_box{margin-bottom:10px; width:434px;}
		.form_tab{ border:1px solid #DFC0E2; box-shadow:5px 5px 5px 5px #888888; padding:35px;}
		.upload{width:264px;}
		</style>
</head>
	<body onload="init();">
		<div id="template">	
			<?php include("include/header.php");?>	
				<div class="container">
					<div class="img1" style="position:fixed;">
						<img src="http://localhost/Attendence/image/logo.png" class="img1"/>
					</div>
					<div style="width: 100%; height: 217px;">
						<div style="float:right; width:146px; margin-top: 40px;">
							<canvas id="canvas">The canvas is not supported by your browser</canvas>
						</div>
					</div>
					<div class="innermain">		
						<form id="jform" action="index.php/Logedin/validate_in_db" method="post" >
							<h1> Sign In Details:</h1>				
							<fieldset>
								<legend>Personal Details</legend>
								<div class="input_box">
									<label>Employee Id:</label>
									<input type="text" name="empid" size="45" id="fullname" tabindex='1'/><span style="color:red">*</span></br>
								</div>
								<div class="input_box">
									<label>Password</label>
									<input type="password" name="pass" size="45" id="company" tabindex='2'/><span style="color:red">*</span></br>
								</div>
							</fieldset>		
							<input type="submit" name="Submit" value="Sign In" id="submit" tabindex='12'/>
							<p>forgot password <a href="" >click here</a>
						</form>
					</div>
				</div>
			<?php include("include/footer.php");?>	
		</div>				
	</body>
</html>