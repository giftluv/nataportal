<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if((!isset($_SESSION['user']))&&(!isset($_SESSION['pwd'])))
{
header('Location: index.php') ;
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
   <title>Registration Form</title>
   <link rel="stylesheet" type="text/css" href="../css/yle.css">
   </head>
<body>
<h1>KWARA  STATE  NATA  PORTAL</h1>
<form action="tet.php" method="POST" enctype="multipart/form-data">
Registration Number
<input type="text" name="admNo" value="<?php echo $row['admNo'];?>"  readonly>
Name:
<input type="text" name ="name" placeholder="Full Name" value="<?php echo $row['name'];?>" readonly>
Home Address
<input type="address" name="homeAdd"  value="<?php echo $row['homeAdd'];?>" required >
Email
<input type="email" name="email"  value="<?php echo $row['email'];?>" >
Next Of Kin
<input type="text" name="nextofking" value="<?php echo $row['nok'];?>" required>
Phone Number
<input type="phone" name="phone" value="<?php echo $row['phonenumber'];?>" required>

<label for="inputdob">Date Of Birth</label><input type="date" name="Dob"  value="<?php echo $row['Dob'];?>" required>
<div>
Gender <br>
<select name="gender" required class="opp">
<option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?></option>
<option>Male</option>
<option>Female</option>
</select>
</div>
<div>
   Upload Passport Photo
	<input type="file" name="file1" id="file1" required class="opp">

</div>

<h2>BUSINESS INFORMATION</h2>
What is your Business Name
<input type="text" name="businessname" value="<?php echo $row['businessname'];?>" required>

Select The Kind of Business You Do
<select  name="kindofbusiness" id="kindofbusiness" required class="opp">
<option value="<?php echo $row['kindofbusiness'];?>"><?php echo $row['kindofbusiness'];?></option>
<option value="">kindofbusiness</option>
<option  value="ACRepair">A C Repair</option>
<option  value="Alminium">Alminium</option>
<option value="Bricks Layer">Bricks Layer</option>
<option value="Blumbing">Blumbing</option>
<option value="Berber">Berber</option>
<option value="Cobler">Cobler</option>
<option value="Carpenter">Carpenter</option>
<option value="Electrician">Electrician</option>
<option value="Laundry Service">Laundry Service</option>
<option value="Interior Deco">Interior Deco</option>
<option value="Rewirer">Rewirer</option>
<option value="Furniture">Furniture</option>
<option value="Phone Dealer and repair">Phone Dealer and repair</option>
<option value="News paper vendor">News paper vendor</option>
<option value="Graphics Designer">Graphics Designer</option>
<option value="Software Developer">Software Developer</option>
<option value="Printer">Printer</option>
<option value="Rug wash">Rug wash</option>
<option value="Photegrapher">Photegrapher</option>
<option value="Radionic">Radionic</option>
<option value="Farming">Farming</option>
<option value="Herbs and roots">Herbs and roots</option>
<option value="Tailing">Tailing</option>
<option value="Gardner">Gardner</option>
<option value="Hair Dressing">Hair Dressing</option>
<option value="Vulcanizer">Vulcanizer</option>
<option value="Trader">Trader</option>
<option value="Iron Bender">Iron Bender</option>
<option value="Fashion Designer">Fashion Designer</option>
<option value="Welder">Welder</option>
<option value="Mechanic">Mechanic</option>
</select>
</div>

What is your Weekly Turn Over?
<input type="text" name="weeklyturnover" value="<?php echo $row['weeklyturnover'];?>"required>
No of Apprentices?
<input type="text" name="noofapprenthes" value="<?php echo $row['noofapprenthes'];?>" required>
Please Type The Name of Your Business Referee
<input type="text" name="businessreferee" value="<?php echo $row['businessreferee'];?>" >
Please Type Your Business Shop Address
<input type="address" name="shopaddress"  value="<?php echo $row['shopaddress'];?>" required>
<div>
IS Your Business Registered?
<select  name="businessregistered" required class="opp">
<option value="<?php echo $row['businessregistered'];?>"><?php echo $row['businessregistered'];?></option>
<option  value="Yes">Yes</option>
<option  value="No">No</option>
</select>
If Yes! when?
<input type="text" name="IfYesWhen" value="<?php echo $row['IfYesWhen'];?>">
</div>
<div>
How Long Have You Been In Your Business?
	<input type="text" name="businessTime" value="<?php echo $row['businessTime'];?>" required>
	
    Upload Your Work Photo OR Shop Photo
	<input type="file" name="file2" id="file2" required class="opp">

</div>

<h3>BANK INFORMATION</h3>
Select Your Bank
<select  name="bankname" id="bankname" required class="opp">
<option value="<?php echo $row['bankname'];?>"><?php echo $row['bankname'];?></option>
<option value="">Select Your Bank</option>
<option  value="AccessBank">Access Bank</option>
<option  value="Citibank">Citibank</option>
<option value="Fidelitybank">Fidelity Bank</option>
<option value="Ecobank">Ecobank</option>
<option value="Enterprisebank">Enterprise Bank</option>
<option value="FCMB">First City Monument Bank</option>
<option value="FirstBank">First Bank</option>
<option value="GTB">Guaranty Trust Bank</option>
<option value="FSDH">FSDH Merchant Bank</option>
<option value="Heritagebank">Heritage Bank</option>
<option value="KeystoneBank">Keystone Bank</option>
<option value="RandMerchant">Rand Merchant Bank</option>
<option value="SkyeBank">Skye Bank</option>
<option value="StanbicIBTC">Stanbic IBTC Bank</option>
<option value="StandardChartered">Standard Chartered Bank</option>
<option value="SterlingBank">Sterling Bank</option>
<option value=">UnionBank">>Union Bank</option>
<option value="UBA">United Bank for Africa</option>
<option value="UnityBank">Unity Bank</option>
<option value="ZenithBank">Zenith Bank</option>
<option value="WemaBank">Wema Bank</option>
<option value="SuntrustBank">Suntrust Bank Nigeria Limited</option>
<option value="FBNHoldings">FBN Holdings Plc</option>
<option value="StanbicIBTCHoldings">Stanbic IBTC Holdings Plc</option>
<option value="FBNMerchantBank">FBN Merchant Bank</option>
</select>
</div>	
Bank Branch
<input type="text" name="bankbranch" value="<?php echo $row['bankbranch'];?>" required>
Account Name
<input type="text" name="accountname" value="<?php echo $row['accountname'];?>" required>
Account Number
<input type="text" name="accountno" value="<?php echo $row['accountnumber'];?>" required>
Please Type Your BVN
<input type="text" name="bvn" value="<?php echo $row['bvn'];?>" required>





<input type="submit" name="upd" value="Confirm & Update" /><br>
<input type="button" value="Cancel" style="width:120px; height:30px;" onClick="window.location ='../mainpage.php'">

</form>

</body>
<?php
}

ob_end_flush();
?>
</html>






