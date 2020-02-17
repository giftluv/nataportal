<?php
session_start();
if((!isset($_SESSION['user']))&&(!isset($_SESSION['pwd'])))
{
header('Location:../index.php') ;
}

ob_start();
include"../connection.php";
?>
<!DOCTYPE html>
<html>

<script src="main.js" type="text/javascript" language="javascript"> </script>
<head>
    <meta charset="UTF-8">
    <title>TrendHire.....</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
</head>

<body>

    <main class="main_section">
          
          <div align="center">
         <div class="section group"> 
          <br>
            
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onClick="window.location ='../mainpage.php'">
<h3 style="color:#FFF">Edit by Registration number</h3>
<table  height="100" cellspacing="10" cellpadding="10" bordercolor='#FFFFFF' bgcolor='#90ee90' border="10">


<form method="GET" action="editCustomer_pro.php">
<TR>
<TD>
<b>Registration NO.</b>
</TD>
<TD>
<input type="text" name="admno" style="width:150px;height:20px" required autofocus>
</TD>
<TD>
<input type="submit" name="edit" value="Search" style="height:50px;width:90px">
</form>


</table>
<h3 style="color:#FFF">Edit by Artisan Name</h3>
<table height="100" cellspacing="10" cellpadding="10" bordercolor='#FFFFFF' bgcolor='#90ee90' border="10">



<form method="GET" action="editCustomer.php">
<TR>
<TD>
<b>ARTISAN NAME:</b>
</TD>
<TD>
<input type="text" name="name" style="width:180px;height:20px" required>
</TD>
<TD>
<input type="submit" name="editbyname" value="Search" style="height:50px;width:90px">
</form>
</table>
</center>
        
  <?php
if(isset($_GET['editbyname']))
{


$name=$_GET['name'];
$sql = mysqli_query($con,"SELECT * FROM user_records WHERE name LIKE '%$name%'");
echo mysqli_num_rows($sql);
echo "<b>"." result found";
echo "<center>";
echo "<table  height='100' width='800' cellspacing='3' cellpadding='3' bordercolor='#FFFFFF' bgcolor='#90ee90' border='3'>
<tr>
<th bgcolor=''>Photo</th>
<th bgcolor=''>Registration No.</th>
<th bgcolor=''>Name</th>
<th bgcolor=''>More Details</th></tr>";
//And we display the results
while($row = mysqli_fetch_assoc($sql))
{
echo "<tr bgcolor='#90ee90'>";
$admNo=$row['admNo'];
echo "<td width='3%'>"."<center><img width='120' height='120' src=passport/".$row['passportPhoto'].">";
echo "<td width='3%' style=>"."<center>".$row['admNo']."</td>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>";
echo "<center><a href='editCustomer_pro.php?admno=$admNo&edit=Search'>Edit details</a>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";
}

?>             
               
               
               </div></main>
        
     <footer class="footer_section">
           
        
    
</body>

</html>
