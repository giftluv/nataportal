<?php
session_start();
if((!isset($_SESSION['user']))&&(!isset($_SESSION['pwd'])))
{
header('Location: index.php') ;
}

ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>TrendHire .....</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
    <text align="center">
</head>

<body>
    <main class="main_section">

<br>
		<?php $wel="You are Logged in as ";
		echo $wel.$_SESSION['user'];?>
            <div class="section group"> 
            <br>
             <br>
             <br>

             <br>
             <br>
        
<center>
<table height="200" width="100" cellpadding="10"  cellspacing="10" bordercolor='#FFFFFF' bgcolor='#90ee90' border="10">
<TR>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Register New Artisan" onClick="window.location ='TrendHire/enroll.php'">
</TD>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Edit Artisan Details" onClick="window.location ='TrendHire/editCustomer.php'">
</TD>
</TR>

<TR>
<TD>
<center><input type="button" style="height:50px;width:200px" value="View Artisan Details" onClick="window.location ='TrendHire/viewCustomer.php'">
</TD>
<TD>
<center><input type="button" style="height:50px;width:200px" value="Delete Artisan Details" onClick="window.location ='TrendHire/delete.php'">
</TD>
</TR>
<TR>
<TD>
<center><input type="button" style="height:50px;width:200px" value="View All Artisan Details" onClick="window.location ='TrendHire/viewAll.php'">
</TR>
</TD>
</table></center>
<br>
<br>
<br>
<div align="center">
<input type="button" style="width:150px;height:50px"  value="Click here to Logout" onClick="window.location ='logout.php'" />
</div>
<br>
<br>
<br>
    
    </main>
   
</body>

</html>