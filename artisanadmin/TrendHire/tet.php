<?php
session_start();
if((!isset($_SESSION['user']))&&(!isset($_SESSION['pwd'])))
{
header('Location:../index.php') ;
}
include"../connection.php";
ob_start();
?>

<?php
if(isset($_POST['upd']))
{

//Beginning of accepting text fields			
$admNo=$_POST['admNo'];
$name=$_POST['name'];
$homeAdd=$_POST['homeAdd'];
$email=$_POST['email'];
$nextofking=$_POST['nextofking'];
$phone=$_POST['phone'];
$Dob=$_POST['Dob'];
$gender=$_POST['gender'];

$businessname=$_POST['businessname'];
$kindofbusiness=$_POST['kindofbusiness'];
$weeklyturnover=$_POST['weeklyturnover'];
$noofapprenthes=$_POST['noofapprenthes'];
$businessreferee=$_POST['businessreferee'];
$shopaddress=$_POST['shopaddress'];
$businessregistered=$_POST['businessregistered'];
$IfYesWhen=$_POST['IfYesWhen'];
$businessTime=$_POST['businessTime'];


$bankname=$_POST['bankname'];
$bankbranch=$_POST['bankbranch'];
$accountname=$_POST['accountname'];
$accountno=$_POST['accountno'];
$bvn=$_POST['bvn'];
//The End of text fields Declaration	

//First Image Personal Picture
$temp=$_FILES['file1']['tmp_name'];
$Imagename=basename($_FILES['file1']['name']);
$upload_dir="passport";
$size= $_FILES['file1']['size'];
$type=$_FILES['file1']['type'];
if($size > 400000)
{
echo"<script type='text/javascript'>alert('File is too large');</script>";
}
else{
if(move_uploaded_file($temp,$upload_dir.'/'.$admNo.$Imagename))
{
echo"";
}
else{							
echo"<script type='text/javascript'>alert('Passport Photo exceed 40kb! Please Try Again ');</script>";
}
} 

//Second Image Shop Photo				
$temp=$_FILES['file2']['tmp_name'];
$file_name=basename($_FILES['file2']['name']);
$upload_dir="shopPhoto";
$size= $_FILES['file2']['size'];
$type=$_FILES['file2']['type'];
if($size > 400000)
{
echo"<script type='text/javascript'>alert('Shop Photo exceed 40kb! Please Try Again!!!!');</script>";
exit;
}
else{
if(move_uploaded_file($temp,$upload_dir.'/'.$admNo.$file_name))
{
echo"";
}
else{							
echo"<script type='text/javascript'>alert('File not moved ');</script>";
}
} 			
//The end of Image Declaration

$result = mysqli_query($con,"UPDATE  user_records SET 
name='$name',
homeAdd='$homeAdd',
email='$email',
nok='$nextofking',
phoneNumber='$phone',
Dob='$Dob',
gender='$gender',
passportPhoto='$Imagename',

businessname='$businessname',
kindofbusiness='$kindofbusiness',
weeklyturnover='$weeklyturnover',
noofapprenthes='$noofapprenthes',
businessreferee='$businessreferee',
shopaddress='$shopaddress',
businessregistered='$businessregistered',
IfYesWhen='$IfYesWhen',
businessTime='$businessTime',


shopphoto='$file_name',
bankname='$bankname',
bankbranch='$bankbranch',
accountname='$accountname',
accountnumber='$accountno',
bvn='$bvn' WHERE admNo='$admNo'");
if($result)
{
echo"<script type='text/javascript'>alert('***Uploaded Successfully***');</script>";
echo "<script language=javascript>window.location='../mainpage.php'</script>";	  	

}
else
{
echo"<script type='text/javascript'>alert('***Please Try Again***');</script>";
echo "<script language=javascript>window.location='editCustomer.php'</script>";		
}
}

?>
<body>
<br><br>
<main class="main_section">
<center>
<input type="button" style="height:40px;width:200px" value="Go to Home" onClick="window.location ='../main.php'">
</center>
</body>