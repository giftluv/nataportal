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
  <br>
 </br></br></br> 
<div align="center"> <input type="button"  style="height:40px;width:200px" value="Go to Home" onClick="window.location ='../mainpage.php'"></div>
 <br><br>
<center>
<table height="100" cellspacing="10" cellpadding="10" bordercolor='#FFFFFF' bgcolor='#90ee90' border="10">
<form action="deleteT.php" method="POST" autocomplete="off">
<TR>
<TD><b>Master-Password</b></TD>
<TD>
<input type="password" name="masPass" style="width:180px;height:30px" required autofocus>
</TD>
</TR>
<TR>
<TD></TD>
<TD>
&nbsp;&nbsp;
<input type="submit" value="Continue" name="master" style="height:50px;width:80px">
&nbsp;
&nbsp;<input type="button" value="Cancel" style="height:50px;width:80px" onClick="window.location ='../mainpage.php'">
</form>
</table>     
    </main>
   
</body>

