<html>
<div id="container" style="width:100%;" bgcolor="blue">

<div class="header" style="background-image:url(images/4.png);" width=1000px;>
<img src="images/rick2.jpg"; align="left" height=130px width=180px style="margin: 4px 0px 2px 6px;"><h1 ><font color="white"><b><center>Online Auto Booking System</h1>
<center><h2>E-Auto</h2></center>
<marquee>Book Your Auto in a click</font></marquee>
</div>
</html>

<?php
include("db.php");
session_start();
$pno=$_POST["ccno"];
$pname=$_POST["ccname"];
$ed=$_POST["edate"];
$cv=$_POST["cvv"];

$dn=$_POST["dbatch"];
$dc=$_POST["pdate"];
$km=$_POST["km"];
$amt=$_POST["amt"];
$dat=date('Y-m-d');
$ccon=$_SESSION["ucontact"];
$from=$_POST["floc"];
$to=$_POST["toloc"];
$tid=rand(10000,100000);
if(!preg_match('/^[0-9]*$/',$km))
echo"<script>alert('KM is Invalid');window.location.href='payment.php';</script>";
		
if(!preg_match('/^[0-9]*$/',$pno))
echo"<script>alert('Card is Invalid');window.location.href='payment.php';</script>";

		
if(!preg_match('/^[0-9]*$/',$cv))
echo"<script>alert('cvv is Invalid');window.location.href='payment.php';</script>";
if(!preg_match("/^[A-Za-z\s]+$/",$pname))
echo"<script>alert('Name must contain only letters');window.location.href='payment.php';</script>";

if((!preg_match('/^[0-9]*$/',$amt))||$amt<=0)
echo"<script>alert('Invalid amount');window.location.href='payment.php';</script>";

else

{

pg_query("insert into payment values('$tid','$ccon','$from','$to','$km','$dn','$dat','$amt')")or die("Transaction unsuccessful");;

echo"<center><h2>Transaction Details</h2>";
echo"<table border 1px solid black>
<tr><td>Transaction Status</td><td>Success</td></tr>
<tr><td>Transaction id.</td><td>$tid</td></tr>
<tr><td>Date</td><td>$dat</td></tr>
<tr><td>From-To</td><td>$from-$to</td>
<tr><td>Km</td><td>$km</td></tr>
<tr><td>Amount</td><td>$amt</td></tr></table>";

}
?>
