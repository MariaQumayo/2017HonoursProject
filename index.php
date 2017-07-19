<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <meta charset="utf-8" />

    <script type="text/javascript" src="jquery-3.2.1.js"></script>
    <script type="text/javascript" src="materialize/materialize/js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/form-format.css">
    <link rel="stylesheet" type="text/css" href="materialize/materialize/css/materialize.css">
    <script type="text/javascript">
        $(document).ready(function () {

            $.wait = function (callback, seconds) {
                return window.setTimeout(callback, seconds * 1000);
            }

            $.wait(function ()
            {
                $("#loading").fadeOut(400, "linear", function () { $("#loading").attr("hidden", true); });
                $("#Sign-In").attr({ hidden: "false", opacity: "0" }).fadeIn(400, "linear");

            }, 4.5);

            $('select').material_select();
        });
    </script>
</head>
<body>

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

  mysqli_select_db($con,"register");

  if(isset($_POST['username'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
  $trn_date = date("Y-m-d H:i:s");

  $query = "INSERT into `users` (username, password, email, trn_date) 
              VALUES
              ('$username','$password','$email', '$trn_date' )";

    $result = mysqli_query($con,$query);  
   // print_r($result);
   // die();

  if($result === false){
     //echo "inserted success";
     print_r(mysqli_error($con));
    } else{
    echo "inserted successful!";
echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
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
        <form id="LoginForm" method="POST" action="">
            <fieldset style="">
                <legend>REGISTER</legend>

                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="username" type="text" name="username" size="40" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="emailsignup" type="email" name="email" size="40" required>
                    <label for="emailsignup" class="youmail" data-icon="e">Email:</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" name="password" size="40" required>
                    <label for="password" class="youpasswd" data-icon="p">Password </label>
                </div>

                <div class="signin button">

                </div>
                <button class="btn waves-effect waves-light" type="submit" name="submit" value="Sign-Up">
                    Sign Up <i class="material-icons right">send</i>
                </button>
            </fieldset>
        </form>

        <p class="change_link">
            Already a member ?
            <a href="login.php" class="to_register"> Go and log in </a>
        </p>
    </div>
</body>
</html>
