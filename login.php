
<!DOCTYPE HTML>
<html>
<head>
    <title>Sign-In</title>
    <script type="text/javascript" src="jquery-3.2.1.js"></script>
    <script type="text/javascript" src="materialize/materialize/js/materialize.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $.wait = function (callback, seconds) {
                return window.setTimeout(callback, seconds * 1000);
            }
            $.wait(function () {
                $("#loading").fadeOut(400, "linear", function () { $("#loading").attr("hidden", true); });
                $("#Sign-In").attr({ hidden: "false", opacity: "0" }).fadeIn(400, "linear");
            }, 2);

            $('select').material_select();
        });
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/form-format.css">
    <link rel="stylesheet" type="text/css" href="materialize/materialize/css/materialize.css">
</head>
<body id="body-color">

    <div id="loading">
        <img id="logo" src="logo.png" width="350">
        <p>Learning 3Ds Max with Robo in IMY 320</p>
<?php
 $con = mysqli_connect("localhost","root","", "3dmax2017");
// Check connection
if (!$con)
  {
  echo "Failed to connect to database";
  }
  else{
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: home.php"); // Redirect user to index.php
            }else{
				//echo "not found,please register";
				echo "<div class='form'><h3>Username/password is incorrect.</div>";
				}
    	}
  }
?>

        <div class="progress">
            <div class="indeterminate"></div>
        </div>
        <p style="font-size: 44pt;">2017</p> <!--style="position:absolute; top:10%; left:50%"-->

    </div>

    <div id="Sign-In" hidden>
        <img id="logo" src="logo.png">
        <p>Learning 3Ds Max with Robo in IMY 320</p>
        <form id="LoginForm" method="POST" action="" name="login">
            <fieldset style="">
                <legend>LOG-IN HERE</legend>

                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="username" type="text" name="username" size="40" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" name="password" size="40" required>
                    <label for="password">Password </label>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="submit" value="Log-In">
                    Log In <i class="material-icons right">send</i>
                </button>
            </fieldset>
        </form>
 <p class="change_link">
            Not yet a member?
            <a href="index.php" class="to_register"> Register </a>
        </p>
    </div>
</body>
</html>