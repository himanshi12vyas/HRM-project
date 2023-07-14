<?php
require("database.php");
$msg="";
if(isset($_POST['email']) && isset($_POST['password']))
{
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$res=mysqli_query($con,"select * from employee where email='$email' and password='$password'");
	$count=mysqli_num_rows($res);
	if($count>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['USER_ID']=$row['id'];
		$_SESSION['USER_NAME']=$row['name'];
      	$_SESSION['USER_EMAIL']=$row['email'];
		header('location:dashboard.php');
	}
	else{
		$msg="please enter correct login details";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/hstyle.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: url('images/loginbg.jpg'); background-repeat: no-repeat;">
	<div class="container">
		<div class="login-page">
			<h1>Login</h1>
			<form action="" method="post">
				<div class="textemail">	
					<input type="mail" name="email" placeholder="email" required>
				</div>
				<div class="textemail">	
					<input type="password" name="password" placeholder="password" required  id="myinput">
				</div>
				<div> 
					 <input type="checkbox" onclick="myFunction()" >  Show Password
				</div>
				<button class="btn" type="submit">sign_in</button>
				 <div class="result_msg"><?php echo $msg?></div>
		 	</form>
		</div>
	</div>
	<script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
      <script>
         function myFunction() {
           var x = document.getElementById("myinput");
           if (x.type === "password") {
             x.type = "text";
           } else {
             x.type = "password";
           }
         }
      </script>
</body>
</html>