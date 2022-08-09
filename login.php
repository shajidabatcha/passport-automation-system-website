<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db( $connection,"onine_passport");
$username=$_POST['email'];
$password=$_POST['password'];
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from register where pasword='$password' AND email='$username'");
if ( mysqli_num_rows($query) == 1)
{
echo '<script language="Javascript">
	alert("Logged In successfully ");
	window.location=("pesonal2.php");</script>';
} 
else
 {
echo '<script language="Javascript">
	alert("Invalid Username Or Password ");
	window.location=("login2.php");
	</script>';
}
mysqli_close($connection); // Closing Connection
?> 
