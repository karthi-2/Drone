<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Retrieve Password</title>
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
	border-top: none;
	border-left: none;
	border-right: none;
	outline: none;
	border-bottom: 2px solid black;
}
button{
	font-size: 16px;
	padding: 10px 15px;
	background-color: lightblue;
}


</style>

<div>
	<form action="" method="post">
		<p>1. Enter your Email Id</p>
		<input type="text" name="email" required=""><br><br>
		<p>2. Which is your favourite colour?</p>
		<input type="text" name="colour" required=""><br><br>
		<p>3. What is your pet name? </p>
		<input type="text" name="pet" required=""><br><br>
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
	$email=$_POST['email'];
  $colour=$_POST['colour'];
  $pet=$_POST['pet'];
  $sql = "SELECT colour,pet from users WHERE email='$email'";
  $i=0;
  $result= $connection-> query($sql);
  if($result-> num_rows == 0){
  	echo '<script>alert("Account not found")</script>';
  	exit();
  }
  $row = $result-> fetch_assoc();
  if($colour==$row['colour'] and $pet==$row['pet']){
  	header("Refresh:0;url=reset.php?user=$email");
  }
  else{
  	echo '<script>alert("Invalid details")</script>';
  	exit();
  }
 }
 ?>
      
