 <?php
if($_REQUEST['act'])
{
  $_REQUEST['act']();
}
##Function for save the record of public
function save_register()
{
    include("../php/connect.php");
	 $R=$_REQUEST;
	 $date= date("d/m/Y");
	 $role="user";
	$Action="New";
   $sql="INSERT INTO `register`(`name`, `email`, `number`,`password`, `role`, `date`, `action`) VALUES('$R[name]','$R[email]','$R[number]','$R[password]','$role', '$date','$Action')";
	$msg="Registration Successfully....";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs)
{
 header("Location:../php/login.php?msg=$msg");
}
}

///Login
function login()
{
    include("../php/connect.php");
    $R=$_REQUEST;
	
   $user= $R['username'];
   $pass= $R['password'];
   $qry="SELECT * FROM `register` WHERE email='$user' and password='$pass'";
   $run=mysqli_query($con,$qry)or die(mysqli_error());
   $row=mysqli_num_rows($run);
   if($row<1)
   {
  header("Location:../php/login.php?msg=Username And Password is Not match !!!");
  }
  else
  {
    $data=mysqli_fetch_array($run);
	$id=$data[0];
	session_start();
	$_SESSION['id']=$id;	
	$Action="Login";
	$sql="UPDATE `register` SET `action` = '$Action' WHERE `id` = $id";
    $rs=mysqli_query($con,$sql)or die(mysqli_error());
 header("Location:../php/home.php?msg=Login Successfully !!!");
}
}
##Function for Change the Password of public
function changePassword()
{
include("../php/connect.php");
    $R=$_REQUEST;
	$id=$R[id];	
	if($R['password']==$R['re-password'])
	{
	     $Action="Change Password";
	    $sql="UPDATE `register` SET `password` = '$R[password]', `Action` = '$Action' WHERE `id` = $R[id]";
}
else
{
header("Location:../php/forget-password.php?msg=Both Password Not Matchs");
}
$rs=mysqli_query($con,$sql)or die(mysqli_error());
if($rs)
{
 header("Location:../php/home.php?msg=Password  changed Successfully");
}
}
##### Fuction for Logout
function logout()
{
include("../php/connect.php");
session_start();
$R=$_REQUEST;
		
	if($R[id])
	{
	     $Action="Logout";
	    $sql="UPDATE `register` SET `action` = '$Action' WHERE `id` = $R[id]";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error());
if($rs)
{
 header("Location:../php/login.php?msg=logout Successfully");
}
session_destroy();
}
##### send otp from mail 
function send_otp()
{
include("../php/connect.php");
    $R=$_REQUEST;
	
   $user= $R['email'];
   $qry="SELECT * FROM `register` WHERE email='$user'";
   $run=mysqli_query($con,$qry)or die(mysqli_error());
   $row=mysqli_num_rows($run);
   if($row<1)
   {
  header("Location:../php/login.php?msg=You are not registered please singup !!!");
  }
  else
  {
  
  $to="ssp9448@gmail.com";
  $subject="OTP From BvrSoftware";
  $msg="Your OTP is=";
	$i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < 4){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
	$msg.=$pin;
	session_start();
	if(mail($to,$subject,$msg,$user))
	{
	$data=mysqli_fetch_array($run);
	$id=$data['id'];
	session_start();
	$_SESSION['idemail']=$id;
	  $_SESSION['otp']=$pin;
	}
	else
	{
	  header("Location:../php/forget-password.php?msg=network error !!!");
	}
}
}
function check_otp()
{
 $R=$_REQUEST;
 $otp=$R['otp'];
 
 $inputOtp=$R['otp1'];
 if($otp==$inputOtp)
 {
    session_start();
	$_SESSION['id']=$_SESSION['idemail'];
   header("Location:../php/forget-password.php");
 }
}
##Function for save the record of contavt save
function save_contact()
{
    include("../php/connect.php");
	 $R=$_REQUEST;
	 $date= date("d/m/Y");
	 $time= date("h:i:s A");
   $sql="INSERT INTO `contact_us`(`name`, `email`, `subject`, `message`, `date`, `time`) VALUES('$R[name]','$R[email]','$R[subject]','$R[msg]','$date','$time')";
	$msg="Successfully....";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs)
{
 header("Location:../index.php?msg=$msg");
}
}
##Function for save the record of contavt save
function save_subscriber()
{
    include("../php/connect.php");
	 $R=$_REQUEST;
	 $date= date("d/m/Y");
	 $time= date("h:i:s A");
     $sql="INSERT INTO `subscriber`(`name`, `email`, `date`, `time`) VALUES ('$R[name]','$R[email]','$date','$time')";
	$msg="Successfully....";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs)
{
 header("Location:../index.php?msg=$msg");
}
}
?>