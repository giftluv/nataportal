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
<!DOCTYPE html>
<html>

<script src="main.js" type="text/javascript" language="javascript"> </script>
<head>
    <meta charset="UTF-8">
    <title>TrendHire.........</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
</head>

<body>

    <main class="main_section">
       <?php
//$selDB=mysql_select_db('nden');
//if($selDB){
$sql="SELECT * FROM last_entry WHERE id='1'";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
{
	
echo '<b>Last  Artisan registered ';
echo "</br>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo $row['admNo'];

}
else
{
echo "Last Entry not Found";
}

?>
             <br>
          
          <div align="center"><?php $wel="You are Logged in as ";
		echo $wel.$_SESSION['user'];?></div>
        <br><br>
         <div class="section group"> 
<center>
<input type="button"  style="height:50px;width:200px" value="Go to Home" onClick="window.location ='../mainpage.php'">
<br><br>
<table border="10" height="100" cellspacing="10" cellpadding="10"  bordercolor='#FFFFFF' bgcolor='#90ee90/'>
<form method="POST" action="enrollCustomer.php">
<TR>

<TD>
<b>REGISTRATION NO.</b>
</TD>
<TD>
<input type="text" name="admNo" style="width:150px;height:20px" required autofocus>
</TD>
</TR>
<TR>
<TD>
<b>ARTISAN NAME</b>
</TD>
<TD>
<input type="text" name="name" style="width:150px;height:20px" required>
</TD>
</TR>
<TR>
<TD></TD>
<TD>
&nbsp;
<input type="submit" name="enroll" value="Enroll" style="height:50px; width:90px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Clear" style="height:50px;width:90px">
</form>
</table>
</center>
</div></main>
        
    
    <footer class="footer_section">
        <p>&nbsp;</p>
    </footer>
</body>

</html>
