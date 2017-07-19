﻿<?php 
//include auth.php file on all secure pages 
include("auth.php");
 ?> 
<!DOCTYPE html>
<html>
<head>
		<title>RoboMax</title>
		<meta charset="UTF-8">
		<link rel="icon" href="images/logo2.png"/>
		
		<link rel="stylesheet" type="text/css" href="style.css">
         <link rel="stylesheet" type="text/css" href="css/book.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />


		<script type="text/javascript" src="jquery-3.2.1.js"></script>
		
		<link rel="stylesheet" type="text/css" href="materialize/materialize/css/materialize.css">
		<script type="text/javascript" src="materialize/materialize/js/materialize.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<script type="text/javascript" src="slider.js"></script>

        <script type="text/javascript">
             $(document).ready(function () {

                 $.wait = function (callback, seconds) {
                     return window.setTimeout(callback, seconds * 1000);
                 }

                 $.wait(function () {
                     $("#overlay").fadeOut(400, "linear", function ()
                     {
                         $("#overlay").attr("hidden", "true");
                         $("#loc3").animate({ top: "9%" }, 2000);
                         $("#loc2").animate({ top: "55%" }, 2000);
                         $("#loc").animate({ top: "70%" }, 2000);//attr("top", "9%");
                    });
                }, 2);


                 $('.modal').modal();

             });
        </script>


		
		<style>
		body
		{
		z-index:0;
		}
		
		#bg
		{
			overflow: scroll;
			height: 100%;
			width: 100%;
			position: absolute;
			z-index: -1;
		}
		
		#prac, #assignments, #narrative
		{
			
			display: inline-block;
			width: 100%;

		}

            #loc {
                position: absolute;
                /*bottom: 18%;*/
                top: -20%;
                right: 28%;
                width: 4%;
                height: auto;
            }

            #loc2 {
                position: absolute;
                /*bottom: 33%;*/
                top: -20%;
                left: 34%;
                width: 4%;
                height: auto;
            }
		
		#loc3
		{
			position: absolute;
			top: -20%;
			left: 38.5%;
			width: 4%;
			height: auto;
		}

        #menu{
            position: fixed;
            top: 2%;
            right: 4%;
        }

            ul#slide-out {
                /*background: linear-gradient(to bottom,#404040 0,#292929 100%);*/
                background-image: url('images/signInBackground.png');
            }

		
		</style>
</head>

<body>

    <div id="overlay" style="background-image:url('images/signInBackground.png'); position:fixed; width:100%; height:100%; z-index:2; text-align: center; ">
        <div style="width: 40%; position:fixed; top: 10%; left: 30%;">
            <img id="logo" src="logo.png" width="350">
            <p>Learning 3Ds Max with Robo in IMY 320</p>

            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>

	<img src="images/map.png" id="bg" alt="map">
	<ul id="slide-out" class="side-nav">
	
		<li>
			<div class="user-view">
				<div class="background">
				<img src="">
				</div>
				<a href="#!user"><img class="circle" src="" alt="hehe"></a>
				<a href="#!name"><span class="black-text name"> Hi, <?php echo $_SESSION['username'];?>!</span></a>
                <a href="#!email"><span class="black-text email"> email here!</span></a>
                <a href="logout.php">Logout</a>
            </div>
            
		</li>
       
		    <li><a href="stats.html"><i class="material-icons">assessment</i>Statistics</a></li>
        <li><a href="#!"><i class="material-icons">lock_open</i>Rewards</a></li>
		    <li><div class="divider"></div></li>
		    <li><a class="subheader">Admin Rights</a></li>
		    <li><a class="waves-effect" href="#!"><i class="material-icons">import_export</i>Download Assignments</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">offline_pin</i>Upload Marks</a></li>
        <li style=" padding: 0; padding-left: 40px;">
            <figure class='book' style="-ms-transform: scale(0.75, 0.75); -webkit-transform: scale(0.75, 0.75); transform: scale(0.75, 0.75);">
                <!-- Front -->
                <ul class='hardcover_front'>
                    <li>
                        <div class="coverDesign tealy">
                            <h1>Journal</h1>
                            <p>Narrative uncovered</p>
                        </div>
                    </li>
                    <li></li>
                </ul>
                <!-- Pages -->
                <ul class='page'>
                    <li></li>
                    <li style="padding-top: 70px;">
                        <a class="btn" href="#journal">View</a>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <!-- Back -->
                <ul class='hardcover_back'>
                    <li></li>
                    <li></li>
                </ul>
                <ul class='book_spine'>
                    <li></li>
                    <li></li>
                </ul>
            </figure>

            <!--<a href="#journal"><i class="material-icons">message</i>Journal</a>-->
        </li>
    </ul>
	<a id="menu" href="#" data-activates="slide-out" class="btn-large waves-effect waves-light btn-floating teal button-collapse right"><i class="material-icons">menu</i></a>
	
    
    <!-- Modal Structure -->
    <div id="journal" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
    
    <!--<a href="#" data-activates="slide-out" class="btn-floating red btn-large waves-effect waves-light"><i class="material-icons">&#8801;</i></a>
        <p> Hello</p>-->


	<!--<div class="fixed-action-btn toolbar">
	    <a class="btn-floating btn-large red">
	      <i class="large material-icons">menu</i>
	    </a>
	    <ul>
	      <li class="waves-effect waves-light"><a href="#!"><i>insert_chart</i></a></li>
	      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i></a></li>
	      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i></a></li>
	      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>
	    </ul>
	  </div>-->
	  

	  <a id="prac" href="practicals.html"><img id="loc" src="images/location.png" class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="Practicals"></a>
	  <a id="assignments" href="assignments.html"><img id="loc2" src="images/location.png" class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="Assignments"></a>
	  <a id="narrative" href="narrative.html"><img id="loc3" src="images/location.png" class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="City-Narrative"></a>
	  
	  
	  
</body>
</html>
