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

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>


<div class="form">
<h1>Registration</h1>
    <form name="registration" action="" method="POST">
      <input type="text" name="username" placeholder="Username" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="submit" name="submit" value="Register" />
    </form>
  </div>
</body>
</html>