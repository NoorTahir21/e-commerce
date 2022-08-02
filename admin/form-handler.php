<?php 
session_start();
include_once "connection.php";?>
<?php 
if (isset($_POST['signupbtn'])) {
	$name=$_POST['username'];
	$email=$_POST['useremail'];
	$pass=$_POST['userpassword'];
	$phone=$_POST['userphone'];
	$city=$_POST['usercity'];
	$address=$_POST['useraddress'];
	$select="SELECT * FROM signup WHERE user_email='$email'";
	$query=mysqli_query($conn,$select);
	$row=mysqli_fetch_array($query);
	$row['user_email'];
	if (mysqli_num_rows($query)>0) {
		echo "<br>.Email Already exists";
	}
	else {
	$insert="INSERT INTO `signup`(`user_name`, `user_email`, `user_pass`, `user_contact`, `user_city`, `user_address`) VALUES ('$name','$email','$pass','$phone','$city','$address')";
	$query=mysqli_query($conn,$insert);
	if ($query) {
		echo "<br>.Account created successfully";
		header("location:login.php");
	}
	else {
		echo mysqli_error($query);
	}
}
}
if (isset($_REQUEST['loginbtn'])) {
	$email=$_POST['useremail'];
	$pass=$_POST['userpassword'];
	$select="SELECT * FROM signup WHERE user_email='$email' AND user_pass='$pass'";
	$query=mysqli_query($conn,$select);
	$row=mysqli_fetch_array($query);
	if (mysqli_num_rows($query)>0) {
		$_SESSION['user_id']=$row['user_id'];
		header("location:index.php");
	}
	else {
		$_SESSION['message']="<center>Email and password doesn't match</center>";
		header("location:login.php");
	}
}
if (isset($_REQUEST['updatebtn'])) {
	$name=$_POST['username'];
	$pass=$_POST['userpassword'];
	$email=$_POST['useremail'];
	$contact=$_POST['usercontact'];
	$address=$_POST['useraddress'];
	$city=$_POST['usercity'];
	$img=$_FILES['image']['name'];
	$tmppath=$_FILES['image']['tmp_name'];
	$newpath="img/".$FILES['image']['name'];
	$id=$_POST['id'];
	$update="UPDATE `signup` SET `user_name`='$name',`user_email`='$email',`user_pass`='$pass',`user_contact`='$contact',`user_city`='$city',`user_address`='$address',`user_image`='$newpath' WHERE user_id='$id'";
	$query=mysqli_query($conn,$update);
	if ($query) {
		echo "<br>.Ok data Updated";
		header("location:index.php");
	}
	else {
		echo mysqli_query($query);
	}
}
//admin panel login 
if (isset($_REQUEST['adminbtn'])) {
	$email=$_POST['adminemail'];
	$pass=$_POST['adminpass'];
	$select="SELECT * FROM signup WHERE user_email='$email' AND user_pass='$pass'";
	$query=mysqli_query($conn,$select);
	$row=mysqli_fetch_array($query);
	if (mysqli_num_rows($query)>0) {
		if ($row['user_status']=='admin') {
			$_SESSION['user_id']=$row['user_id'];
			header("location:dashboard.php");
		}
		else {
			$_SESSION['user_id']=$row['user_id'];
			header("location:adminlogin.php");
		}
	}
}
?>