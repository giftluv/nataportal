<title>TrendHire....</title>
<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if((!isset($_SESSION['user']))&&(!isset($_SESSION['pwd'])))
{
header('Location: ../index.php') ;
}

ob_start();
include"../connection.php";

?>


<?php
if((isset($_SESSION['user']))&&(isset($_SESSION['pwd'])))
{
	//$wel='You are Logged in as';
	$s=$_SESSION['user'];
	$d=$_SESSION['pwd'];
		
$result =mysqli_query($con,"SELECT * FROM  admin WHERE username='$s' and password='$d'");
if($row=mysqli_fetch_array($result))
{
	
	$ready = mysqli_query($con,"SELECT * FROM user_records ORDER BY admNo ASC");
	echo mysqli_num_rows($ready);
		echo "<b>"." result found";
	
	while($row = mysqli_fetch_array($ready))
	{
?>
<!DOCTYPE html>
<html>
<head>
   <title>TrendHire..........</title>
   <link rel="stylesheet" type="text/css" href="../css/yle.css">
   </head>
<body>
<table width='100%' border='3' cellspacing='5' cellpadding='5' bgcolor='#90ee90' bordercolor='#FFFFFF' >
  <tr>
    <td width='18%'>Name</td>
    <td width='11%'>Registration No</td>
    <td width='10%'>Phone Number</td>
    <td width='13%'>Email</td>
    <td width='11%'>Home Address</td>
    <td width='16%'>Business Name</td>
    <td width='14%'>Shop Address</td>
    <td width='11%'>Bank Name</td>
    <td width='14%'>Account Name</td>
    <td width='15%'>Account Number</td>
    <td width='16%'>BVN</td>
    <td width='11%'>Passport</td>
    <td width='11%'>Shop Photo</td>
  </tr>
  <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['admNo'];?></td>
    <td><?php echo $row['phonenumber'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['homeAdd'];?></td>
    <td><?php echo $row['businessname'];?></td>
    <td><?php echo $row['shopaddress'];?></td>
    <td><?php echo $row['bankname'];?></td>
    <td><?php echo $row['accountname'];?></td>
    <td><?php echo $row['accountnumber'];?></td>
    <td><?php echo $row['bvn'];?></td>
    <td><?php
echo "<center><img style='border:8px solid grey' width='50' height='50' src=passport/".$row['admNo']."".$row['passportPhoto'].">";?></td>
    <td>
<?php echo "
<center><img style='border:8px solid grey' width='50' height='50' src=shopPhoto/".$row['admNo']."".$row['shopphoto'].">
";
?>    
    </td>
    
  </tr>
</table>
</body>
</html>


<?php

								
 }
				
}
}
?>





