  <?php
  include('connection.php');
	session_start();
	
if(isset($_POST['submit']))
{
	
$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con,"select * FROM admin WHERE username='$username' AND password='$password'");
if($row = mysqli_fetch_array($result))
{
$_SESSION['user']=$row['username'];//stores userid session
$_SESSION['pwd']=$row['password'];//stores password session
//$_SESSION['id']=$row['userid'];
echo"<script language=javascript>window.location='mainpage.php'</script>;";
}
else
{
echo" <script type='text/javascript'>alert('Invalid Username or Password!')</script>
<script language=javascript>window.location='index.php'</script>;
						";	
}
}


?>