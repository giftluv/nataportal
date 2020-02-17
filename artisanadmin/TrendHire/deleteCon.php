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
$click=isset($_POST['delete']);
if($click){
				$admNo=$_POST['admNo'];
				$retreve=mysqli_query($con,"select * from  user_records where admNo='$admNo'"); //retrieving from database
				if($row=mysqli_fetch_array($retreve))
				{
					//putting retrieved value inside some declarations
						$admNo=$row['admNo'];
						$a = ucwords($row['name']);
					 	//$c =ucwords($row['program']);
		 			 	$d = ucwords($row['email']);
						$e= ucwords($row['phonenumber']);
						$i= ucwords($row['gender']);
						$name =$row['passportPhoto'];
						//$pic="passport/".$row['admNo']."".$row['passportPhoto'];
						//$pic = "nden"."/"."upload"."/".$name;	
						//include'login.php';
						//<script type='text/javascript'>alert('Welcome')
						echo"	
<link rel='stylesheet' href='../css/normalize.css'>
    <link rel='stylesheet' href='../css/style.css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Raleway' rel='stylesheet'>
    <link rel='stylesheet' href='../font-awesome-4.7.0/css/font-awesome.css'>
										
<body>
<main class='main_section'>
<br><br>
<center>
<a href='delete.php'><button' style='width:300px;height:50px' value='Return Back'></button> </a>
<form action='deleteConfirm.php' method='POST'>

<table  height='100' ellspacing='10' cellpadding='10' bordercolor='#FFFFFF' bgcolor='#90ee90' border='10' width='600'>
<input type='text' name='admNo' value='$admNo' hidden>

<TR>
<TD>ARTISAN REGISTRATION NO.</TD>
<TD><center>
$admNo
</center>
<TR>

<TD>PHOTO</TD>
<TD>
 <center><img style='border:8px solid grey' width='120' height='120' src=passport/".$row['admNo']."".$row['passportPhoto'].">

 </TD>
</TR>

<TR>
<TD>
ARTISAN NAME
</TD>
<TD>
<center>
 $a
</center>
</TD>
</TR>

<TR>
<TR>
<TD>EMAIL</TD>
<TD><center>
$d
</center>
</TD>
</TR>
<TR>
<TD></TD>
<TD>
&nbsp;<input type='submit' value='Confirm & Delete' name='deleteconfirm' style='height:30px;width:200px'>
<br>
</TD>
</table>
</form>	
</div></main>
<br>
					</body>	";
						
				}else {
					include"deleteRow.php";
					echo" <script type='text/javascript'>alert('No Such Admission found')</script>";
					//echo"<script type='text/javascript'>alert('Please Register or click on Forget Password');
					}
				
	}


?>