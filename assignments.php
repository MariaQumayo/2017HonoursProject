
<!DOCTYPE html>
<html>
<head>
	<title>RoboMax</title>
	<meta charset="UTF-8">
	<link rel="icon" href="images/logo2.png"/>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<link rel="stylesheet" type="text/css" href="materialize/materialize/css/materialize.css">
	<script type="text/javascript" src="materialize/materialize/js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="js/progressCircle.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){
		$('.carousel.carousel-slider').carousel({fullWidth: true});
		$("#progbar").circularProgress({
			line_width: 6,
			color: "red",
			starting_position: 0, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
			percent: 0, // percent starts from
			percentage: true,
			text: "Progress Mark"
		}).circularProgress('animate', 2 , 2000); //get mark from database
	});
	</script>
	<style>
		
		.circular-progress-bar {
		    position: relative;
		    margin: 0 auto;
		}

		 .progress-percentage, .progress-text {
		    position: absolute;
		    width: 100%;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    text-align: center;
		    padding: 0px 60px;
		}

		.progress-percentage {
			font-size: 5em;
		    transform: translate(-50%, -65%);
		}

		.progress-text {
		    transform: translate(-50%, 100%);
		    color: red;
		    font-size: 1em;
		}/**/
				
		.con
		{
			float:left;
			width: 50%;
			height: 70%;
			margin: auto;
		}
		
		canvas
		{
			width: 100%;
			height: 100%;
		}
		
		.info
		{
			width: 50%;
			height: 100%;
			float: left;
			padding: 5%;
			overflow-y: auto;
			 direction:rtl;
			 color: silver;
             text-shadow: 1px 1px black;
		}
		
		.info::-webkit-scrollbar-track
		{
			border-radius: 10px;
			background: transparent;
		}

		.info::-webkit-scrollbar
		{
			width: 12px;
			background; transparent;
		}

		.info::-webkit-scrollbar-thumb
		{
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
			background-color: #D62929;
		}
		
		
		.info > * 
		{
			//font-size: 1.9vw;
			direction:ltr;
		}
		
		.gloss
		{
			position: relative;
			background-color: rgba(0,0,0,0.6);
			width: 90%;
			height: 80%;
			margin: 10px auto;
			 overflow: hidden;
             box-shadow:rgba(0,0,0,0.3) 10px 10px;
		}
		h2
		{
			height: 5%;
			text-align: center;
		}
				
		.upload
		{
			float: left;
			width: 50%;
			height: 20%;
			text-align: center;
			margin: 0 auto;
			padding: 10px;
		}
		
		.upload a
		{
		 clear: both;
		}
		
		#ass1
		{
			background-image: url(images/assign1.png);
			background-size: cover;
		}

        .info > img {
            position: fixed;
            height: 25%;
            width: auto;
        }
		
				
	</style>
		
</head>

<body>	
	<div class="carousel carousel-slider center" data-indicators="true" style="position:absolute;width:100%;height:100%;">
		<div class="carousel-fixed-item corner">
			<a class="btn waves-effect waves-light btn-floating teal white-text" style="position:fixed;top:3%;right:2%" href="home.html">X</a>
		</div>

<!--Assignment 1-->
		<div class="carousel-item white-text" href="#one!" id="ass1">
			<h2>Assignment 1</h2>
			<div class="gloss">
				<div class="info">
					<h3>Assignment brief</h3>
					<div class="download" align="center">
						<a href="./assignments/MaxAssignments/Assignment1" class="btn waves-effect" download>Download A1 specs</a>
					</div>
					<p>You have joined the the campus Robotics Faculty. You have been tasked with comin up with a new concept of a Robot that can be used to the advantage of the campus. It can be helpful in any way (entertainment, maintenance, education, etc.).</p>
					<p> Come up with a Robotic Concept that will WoW! the committee to create your Robot (Literally! Winner will get there model 3dPrinted!)</p>
					<h4> Your Task:</h4>
					<ol align="left">
						<li>Design the look of your Robot</li>
						<li>Keep in mind an end of how you might Want to present your Robot (e.g A cleaner Robot - show how fast he can clean a dirty room</li>
						<li>Follow the pdf instructions to upload a basic model of your Robot</li>
					</ol>
				</div>
				<div class="con">
					<div id="progbar"></div>	
				</div>
				<?php 
				if(isset($_POST['submit'])){
				$name = $_FILES["file"]["name"];
				$tmp_name = $_FILES['file']['tmp_name'];
				$error = $_FILES['file']['error'];

				if (isset ($name)) {
					if (!empty($name)) {
					$location = 'assignments/studentUploads/Ass1/';
					if  (move_uploaded_file($tmp_name, $location.$name)){
						echo 'Upload Successful';    
						}

						} else {
						echo 'please choose a file';
						}
					}
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="file"><br><br>
					<input type="submit" name="submit" value="Submit" class="btn waves-effect">
				</form>
</div>

<!--Assignment 2-->
	</div>
		<div class="carousel-item amber white-text" href="#two!">
			<h2>Assignment 2</h2>
			<div class="gloss">	
				<div class="info">
					<h3>Assignment brief</h3>
					<div class="download" align="center">
						<a href="./assignments/MaxAssignments/Assignment2" class="btn waves-effect" download>Download A2 specs</a>
					</div>
					<p>You have joined the the campus Robotics Faculty. You have been tasked with comin up with a new concept of a Robot that can be used to the advantage of the campus. It can be helpful in any way (entertainment, maintenance, education, etc.).</p>
					<p> Come up with a Robotic Concept that will WoW! the committee to create your Robot (Literally! Winner will get there model 3dPrinted!)</p>
					<h4> Your Task:</h4>
					<ol align="left">
						<li>Design the look of your Robot</li>
						<li>Keep in mind an end of how you might Want to present your Robot (e.g A cleaner Robot - show how fast he can clean a dirty room</li>
						<li>Follow the pdf instructions to upload a basic model of your Robot</li>
					</ol>
				</div>
				<div class="con">
					<div id="progbar2"></div>	
				</div>
				<?php 
				if(isset($_POST['submit2'])){
				$name = $_FILES["file2"]["name"];
				$tmp_name = $_FILES['file2']['tmp_name'];
				$error = $_FILES['file2']['error'];

				if (isset ($name)) {
					if (!empty($name)) {
					$location = 'assignments/studentUploads/Ass2/';
					if  (move_uploaded_file($tmp_name, $location.$name)){
						echo 'Upload Successful';    
						}

						} else {
						echo 'please choose a file';
						}
					}
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="file2"><br><br>
					<input type="submit" name="submit2" value="Submit" class="btn waves-effect">
				</form>
		</div>
</div>

<!--Assignment 3-->
		<div id="i2" class="carousel-item green white-text" href="#three!">
			<h2>Assignment 3</h2>
			<div class="gloss">
				
				<div class="info">
					<h3>Assignment brief</h3>
					<div class="download" align="center">
						<a href="./assignments/MaxAssignments/Assignment3" class="btn waves-effect" download>Download A3 specs</a>
					</div>
					<p>You have joined the the campus Robotics Faculty. You have been tasked with comin up with a new concept of a Robot that can be used to the advantage of the campus. It can be helpful in any way (entertainment, maintenance, education, etc.).</p>
					<p> Come up with a Robotic Concept that will WoW! the committee to create your Robot (Literally! Winner will get there model 3dPrinted!)</p>
					<h4> Your Task:</h4>
					<ol align="left">
						<li>Design the look of your Robot</li>
						<li>Keep in mind an end of how you might Want to present your Robot (e.g A cleaner Robot - show how fast he can clean a dirty room</li>
						<li>Follow the pdf instructions to upload a basic model of your Robot</li>
					</ol>
				</div>
				<div class="con">
					<div id="progbar3"></div>	
				</div>
			<?php 
				if(isset($_POST['submit3'])){
				$name = $_FILES["file3"]["name"];
				$tmp_name = $_FILES['file3']['tmp_name'];
				$error = $_FILES['file3']['error'];

				if (isset ($name)) {
					if (!empty($name)) {
					$location = 'assignments/studentUploads/Ass3/';
					if  (move_uploaded_file($tmp_name, $location.$name)){
						echo 'Upload Successful';    
						}
						} else {
						echo 'please choose a file';
						}
					}
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="file3"><br><br>
					<input type="submit" name="submit3" value="Submit" class="btn waves-effect">
				</form> <br/>
                <div>
                    <a href="#!" class="btn waves-effect" download><i class="material-icons">assignment</i>Bonus Downloads</a>
                </div>
			</div>
		</div>

<!--Assignment 4-->
        <script>
            if (document.getElementById("#i2").is("visible"))
            {
                alert("nfsdf");
            }
        </script>
		<div class="carousel-item blue white-text" href="#four!">
			<h2>Assignment 4</h2>
			<div class="gloss">
				
				<div class="info">
					<h3>Assignment brief</h3>
					<div class="download" align="center">
						<a href="./assignments/MaxAssignments/Assignment4" class="btn waves-effect" download> Download A4 specs </a>
					</div>
					<p>You have joined the the campus Robotics Faculty. You have been tasked with comin up with a new concept of a Robot that can be used to the advantage of the campus. It can be helpful in any way (entertainment, maintenance, education, etc.).</p>
					<p> Come up with a Robotic Concept that will WoW! the committee to create your Robot (Literally! Winner will get there model 3dPrinted!)</p>
					<h4> Your Task:</h4>
					<ol align="left">
						<li>Design the look of your Robot</li>
						<li>Keep in mind an end of how you might Want to present your Robot (e.g A cleaner Robot - show how fast he can clean a dirty room</li>
						<li>Follow the pdf instructions to upload a basic model of your Robot</li>
					</ol>
				</div>
				<div class="con">
					<div id="progbar4"></div>	
				</div>
			<?php 
				if(isset($_POST['submit4'])){
				$name = $_FILES["file4"]["name"];
				$tmp_name = $_FILES['file4']['tmp_name'];
				$error = $_FILES['file4']['error'];

				if (isset ($name)) {
					if (!empty($name)) {
					$location = 'assignments/studentUploads/Ass4/';
					if  (move_uploaded_file($tmp_name, $location.$name)){
						echo 'Upload Successful';    
						}
						} else {
						echo 'please choose a file';
						}
					}
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="file4"><br><br>
					<input type="submit" name="submit4" value="Submit" class="btn waves-effect">
				</form>
			</div>
		</div>

<!--Assignment 5-->
		<div class="carousel-item red white-text" href="#five!">
			<h2>Assignment 5</h2>
			<div class="gloss">
				
				<div class="info">
					<h3>Assignment brief</h3>
					<div class="download" align="center">
						<a href="./assignments/MaxAssignments/Assignment5" class="btn waves-effect" download> Download A5 specs</a>
					</div>
					<p>You have joined the the campus Robotics Faculty. You have been tasked with comin up with a new concept of a Robot that can be used to the advantage of the campus. It can be helpful in any way (entertainment, maintenance, education, etc.).</p>
					<p> Come up with a Robotic Concept that will WoW! the committee to create your Robot (Literally! Winner will get there model 3dPrinted!)</p>
					<h4> Your Task:</h4>
					<ol align="left">
						<li>Design the look of your Robot</li>
						<li>Keep in mind an end of how you might Want to present your Robot (e.g A cleaner Robot - show how fast he can clean a dirty room</li>
						<li>Follow the pdf instructions to upload a basic model of your Robot</li>
					</ol>
				</div>
				<div class="con">
					<div id="progbar5"></div>	
				</div>
			<?php 
				if(isset($_POST['submit5'])){
				$name = $_FILES["file5"]["name"];
				$tmp_name = $_FILES['file5']['tmp_name'];
				$error = $_FILES['file5']['error'];

				if (isset ($name)) {
					if (!empty($name)) {
					$location = 'assignments/studentUploads/Ass5/';
					if  (move_uploaded_file($tmp_name, $location.$name)){
						echo 'Upload Successful';    
						}
						} else {
						echo 'please choose a file';
						}
					}
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="file5"><br><br>
					<input type="submit" name="submit5" value="Submit" class="btn waves-effect">
				</form> 
			</div>
		</div>



<!-- Assignment 6-->
		<div class="carousel-item green white-text" href="#six!">
			<h2>Assignment 6</h2>
			<div class="gloss">
				
				<div class="info">
					<h3>Assignment brief</h3>
					<div class="download" align="center">
						<a href="./assignments/MaxAssignments/Assignment6" class="btn waves-effect" download> Download A6 specs</a>
					</div>
					<p>You have joined the the campus Robotics Faculty. You have been tasked with comin up with a new concept of a Robot that can be used to the advantage of the campus. It can be helpful in any way (entertainment, maintenance, education, etc.).</p>
					<p> Come up with a Robotic Concept that will WoW! the committee to create your Robot (Literally! Winner will get there model 3dPrinted!)</p>
					<h4> Your Task:</h4>
					<ol align="left">
						<li>Design the look of your Robot</li>
						<li>Keep in mind an end of how you might Want to present your Robot (e.g A cleaner Robot - show how fast he can clean a dirty room</li>
						<li>Follow the pdf instructions to upload a basic model of your Robot</li>
					</ol>
				</div>
				<div class="con">
					<div id="progbar6"></div>	
				</div>
			<?php 
				if(isset($_POST['submit6'])){
				$name = $_FILES["file6"]["name"];
				$tmp_name = $_FILES['file6']['tmp_name'];
				$error = $_FILES['file6']['error'];

				if (isset ($name)) {
					if (!empty($name)) {
					$location = 'assignments/studentUploads/Ass6/';
					if  (move_uploaded_file($tmp_name, $location.$name)){
						echo 'Upload Successful';    
						}
						} else {
						echo 'please choose a file';
						}
					}
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="file6"><br><br>
					<input type="submit" name="submit6" value="Submit" class="btn waves-effect">
				</form> 
			</div>
		</div>
	</div>
</body>
</html>