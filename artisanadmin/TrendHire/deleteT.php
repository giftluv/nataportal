<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
ob_start();
require_once("../connection.php");
if((!isset($_SESSION['user']))&&(!isset($_SESSION['pwd'])))
{
header('Location:../index.php') ;
}
?>
<?php
$click = isset($_POST['master']);
if($click){

	$masPass=$_POST['masPass'];
	$retreve=mysqli_query($con,"select * from admin where masPass='$masPass'");
					if($row=mysqli_fetch_array($retreve))
				{
					  	
						include"delete.php";
				echo"
				    
					<script type='text/javascript'>alert('Password Verified');</script>;
					
				  <script language=javascript>window.location='deleteRow.php'</script>;
				   ";		
				
				}else {
	include"delete.php";
	echo"<script type='text/javascript'>alert('Wrong Master Password');</script>";
	}
	
	
}else {
	include"delete.php";
	echo"<script type='text/javascript'>alert('Databse Not selected');</script>";
	}



