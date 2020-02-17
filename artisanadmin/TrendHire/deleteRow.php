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
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>TrendHire.....</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
    <text align="center">
</head>

<body>
    <main class="main_section">
    <?php $wel="You are Logged in as ";
		echo $wel.$_SESSION['user'];?>
   <br><br><br><br>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onClick="window.location ='../mainpage.php'">
<br><br>
<table  height="100" cellspacing="10" cellpadding="10" bordercolor='#FFFFFF' bgcolor='#90ee90' border="10">
<form method="POST" action="deleteCon.php">
<TR>

<TD>
<b style="color:#F00">ARTISAN REGISTRATION-NUMBER.</b>
</TD>
<TD>
<input type="text" name="admNo" style="width:150px;height:30px" required autofocus>
</TD>
</TR>
<TR>
<TD></TD>
<TD>
&nbsp;
<input type="submit" name="delete" value="Submit" style="height:30px; width:120px">

&nbsp;&nbsp;
</form>
</table>
</center>
    
    </main>
    
</body>

</html>