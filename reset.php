<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reset Password</title>
</head>
<body>
		<style>
div{
	text-align: center;
	margin: 100px auto 0px auto;
}
form{

	text-align: left;
	font-size: 24px;
	padding-left: 500px ;
}
p{
	font-size: 24px;
}
input{
	width: 40%;
	padding: 10px ;
	font-size: 24px;
}
button{
	font-size: 16px;
	padding: 10px 15px;
	background-color: lightblue;
}


</style>

<div>
	<form action="" method="post">
		<p>New Password</p>
		<input type="password" name="new" required=""><br><br>
		<p>Confirm Password</p>
		<input type="password" name="confirm" required=""><br><br>
		<button type="submit" name="submit" value="submit">Submit</button>
</form>
</div>

</body>
</html>
<?php
$connection=mysqli_connect("localhost:3307","root","","drones") or die("no connected");
mysqli_select_db($connection,"drones") or die("no database");
if(isset($_POST['submit']))
{
	$new=$_POST['new'];
  	$confirm=$_POST['confirm'];
  	if($new!=$confirm){
  		echo '<script>alert("Mismatch Password")</script>';
  		exit();
  	}
  	$username=$_GET['user'];
  	session_start();
    $_SESSION['user']=$username;
  	$detail2="UPDATE users SET password='$new'  WHERE email='$username'";
    $query=mysqli_query($connection,$detail2);
    echo '<script>alert("Password Updated")</script>';
    header("Refresh:0;url=shop.php?login_status=1");
}
?>




