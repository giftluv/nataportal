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
$click=isset($_POST['deleteconfirm']);
if($click)
{

$admNo=$_POST['admNo'];


//first delete the file
$query = "SELECT * FROM user_records WHERE admNo='$admNo' ";

$result = mysqli_query($con,$query);
//Deleteing Shop Photo
//src=passport/".$row['admNo']."".$row['passportPhoto']."
while ($lol = mysqli_fetch_array($result))
{
    try
    {
        $image = $lol['admNo'].$lol['passportPhoto'];
        $file= './passport/'.$image;
		
		//Unlink d second file
		$mage = $lol['admNo'].$lol['shopphoto'];
		$secondd='./shopPhoto/'.$mage;
		
        unlink($file);
		 unlink($secondd);
    } catch (Exception $e) {

    }
}

$sql1="DELETE FROM  user_id WHERE admNo='$admNo'";
$result1=mysqli_query($con,$sql1);
	//from studennt records tabl
$admNo=$_POST['admNo'];
$sql1="DELETE FROM user_records WHERE admNo='$admNo'";
$result1=mysqli_query($con,$sql1);
if($result1)
{
	
	echo"<script type='text/javascript'>alert('Deleted Succesfully')</script>";
	 echo" <script language=javascript>window.location='../mainpage.php'</script>";
}
else{
	echo"<script type='text/javascript'>alert('Artisan record not deleted!!Please try again')</script>";
	 echo" <script language=javascript>window.location='deleteRow.php'</script>";
	}
}


?>