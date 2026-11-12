<?php
require_once __DIR__ . '/auth.php';
med_e_start_session();
$con=mysqli_connect("localhost","root","","hospitalms");
if(isset($_POST['adsub'])){
	$username=$_POST['username1'];
	$password=$_POST['password2'];
	$stmt=mysqli_prepare($con,"select * from admintb where username=? and password=?");
	mysqli_stmt_bind_param($stmt,"ss",$username,$password);
	mysqli_stmt_execute($stmt);
	$result=mysqli_stmt_get_result($stmt);
	if(mysqli_num_rows($result)==1)
	{
		session_regenerate_id(true);
		$_SESSION['role']='admin';
		$_SESSION['username']=$username;
		header("Location:admin-panel1.php");
		exit;
	}
	else
		// header("Location:error2.php");
		echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index1.php';</script>");
}
if(isset($_POST['update_data']))
{
	$contact=$_POST['contact'];
	$status=$_POST['status'];
	$stmt=mysqli_prepare($con,"update appointmenttb set payment=? where contact=?");
	mysqli_stmt_bind_param($stmt,"ss",$status,$contact);
	$result=mysqli_stmt_execute($stmt);
	if($result)
		header("Location:updated.php");
}




function display_docs()
{
	global $con;
	$query="select * from doctb";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['name'];
		# echo'<option value="" disabled selected>Select Doctor</option>';
		echo '<option value="'.$name.'">'.$name.'</option>';
	}
}

if(isset($_POST['doc_sub']) && ($_SESSION['role'] ?? '') === 'admin')
{
	$name=$_POST['name'];
	$stmt=mysqli_prepare($con,"insert into doctb(name) values(?)");
	mysqli_stmt_bind_param($stmt,"s",$name);
	$result=mysqli_stmt_execute($stmt);
	if($result)
		header("Location:adddoc.php");
}
