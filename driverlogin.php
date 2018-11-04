
<?php
session_start();
include("db.php");
$uname=$_POST["uname"];
$pass=$_POST["upasswd"];
$_SESSION['uid']=$_POST["uname"];
$q=pg_query("select * from driver");
$n=0;
$st=0;
while($row=pg_fetch_array($q))
{
if($row[0]==$uname &&$row[10]==$pass)
{
$n=1;
$_SESSION["dname"]=$row[0];

}
}

if($n==1)
header('location:drivermenu.html');

else
{
echo"<script>alert('Please enter correct details');window.location.href='driverlogin.html';</script>";
}

?>
