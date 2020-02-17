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
if(isset($_GET['edit']))
{

$admno =$_GET['admno'];
$result =mysqli_query($con,"SELECT * FROM  user_records WHERE admNo='$admno'");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
   <title>TrendHire..........</title>
   <link rel="stylesheet" type="text/css" href="../css/yle.css">
   </head>
<body>
<h1>KWARA  STATE  NATA  PORTAL</h1>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onClick="window.location ='../mainpage.php'">
<br><br>
<?php
echo "<center><img style='border:8px solid grey' width='120' height='120' src=passport/".$row['admNo']."".$row['passportPhoto'].">";
echo "</a><br>";
?>
<table width="60%" height="100" cellspacing="5" cellpadding="5" bordercolor='#FFFFFF' bgcolor='#90ee90' border="10">
<TR>
<TD><b><font color="#ff5722">Registration Number</b></TD>
<TD><center><?php echo $row['admNo'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">FullName</b></TD>
<TD><center><?php echo $row['name'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">Home Address</b></TD>
<TD><center><?php echo $row['homeAdd'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">Email</b></TD>
<TD><center><?php echo $row['email'];?></TD>
</TR>


<TR>
<TD><b><font color="#ff5722">Next Of Kin</b></TD>
<TD><center><?php echo $row['nok'];?></TD>
</TR>


<TR>
<TD><b><font color="#ff5722">Phone Number</b></TD>
<TD><center><?php echo $row['phonenumber'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">Date Of Birth</b></TD>
<TD><center><?php echo $row['Dob'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">Gender</b></TD>
<TD><center><?php echo $row['gender'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">Shop Photo</b></TD>
<TD><center><?php echo "
<img style='border:8px solid grey' width='100' height='100' src=shopPhoto/".$row['admNo']."".$row['shopphoto'].">
";
?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">What is your Business Name</b></TD>
<TD><center><?php echo $row['businessname'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">What Kind of Business Do You Do?</b></TD>
<TD><center><?php echo $row['kindofbusiness'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">What is your Weekly Turn Over?</b></TD>
<TD><center><?php echo $row['weeklyturnover'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">No of Apprentices?</b></TD>
<TD><center><?php echo $row['noofapprenthes'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">Please Type The Name of Your Business Referee?</b></TD>
<TD><center><?php echo $row['businessreferee'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">Please Type Your Business Shop Address?</b></TD>
<TD><center><?php echo $row['shopaddress'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">IS Your Business Registered?</b></TD>
<TD><center><?php echo $row['businessregistered'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">If Yes! when?</b></TD>
<TD><center><?php echo $row['IfYesWhen'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">How Long Have You Been In Your Business?</b></TD>
<TD><center><?php echo $row['businessTime'];?></TD>
</TR>
<TR>
<TD><b><font color="#ff5722">Bank Name</b></TD>
<TD><center><?php echo $row['bankname'];?></TD>
</TR>
<TR>
<TD><b><font color="#ff5722">Bank Branch</b></TD>
<TD><center><?php echo $row['bankbranch'];?></TD>
</TR>

<TR>
<TD><b><font color="#ff5722">Account Name</b></TD>
<TD><center><?php echo $row['accountname'];?></TD>
</TR>
<TR>
<TD><b><font color="#ff5722">Account Number</b></TD>
<TD><center><?php echo $row['accountnumber'];?></TD>
</TR>
<TR>
<TD><b><font color="#ff5722"> BVN</b></TD>
<TD><center><?php echo $row['bvn'];?></TD>
</TR>
</table>


</body>
<?php
}

ob_end_flush();
?>
</html>






