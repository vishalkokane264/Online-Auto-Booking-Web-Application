<?php
include ("db.php");

session_start();
$_SESSION["sad"]=$_POST["usaddress"];
$_SESSION["ead"]=$_POST["ueaddress"];

$sadd=$_POST["saddress"];
$eadd=$_POST["eaddress"];
$dat=$_POST["To_Date"];
$tim=$_POST["To_time"];
$ano=$_POST["autono"];
$cn=$_SESSION["uname"];
$cc=$_SESSION["ucontact"];
if($sadd==""|| $eadd=="")
{
echo"<script>alert('Enter Start address and destination address')</script>";
}
else
{
$q1=pg_query("select * from driver where address like'%$d%' order by random() limit 1") or die("<tr><td><script>alert('There is no auto in current area'</script></td></tr>");
while($row=pg_fetch_array($q1))
{
pg_query("insert into bookauto1 values('$cc','$dat','$sadd','$eadd','$ano','$row[5]','$tim');")or die ("Server not responding .please try again later");
echo"<script>alert('Your request is submitted in our database.We will notify you on your registration number shortly.')</script>";
echo"<script>alert('Driver Name:$row[0]. Contact Number:$row[8].');window.location.href='afterlog.php';</script>";
}
}
/*pg_query("insert into bookauto values('$cn','$cc','$dat','$sadd','$eadd','$ano')")or die ("Server not responding .please try again later");
*/
/*pg_query("insert into custdri values('$row[0]','$cn','$cc','$dat','$tim','$sadd','$eadd')");
*/


?>

<html>
<head>
</head>
<style>
.button2{
    background-color: orange;
    border: 3px;
    color: white;

    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px px px 0px;
    cursor: pointer;
}
.button2 {
   width:150px;
   background-color: #008CBA;
   

} 
</style>
<body >
<center>
<div id="container" style="width:1000px; border:0px solid black;" bgcolor="blue">

<div id="header" style="background-image:url(images/4.png);" width=1000px;>
<img src="images/rick2.jpg"; align="left" height=130px width=180px style="margin: 4px 0px 2px 6px;"><h1 ><font color="white"><b>Online Auto Booking System</h1>
<h2>E-Auto</h2>
<blink >Book Your Auto in a click</blink>

</div>
<div id="nav" style="background-image:url(images/b26.png); width:181px ;height:350px;border:1px solid black; float:left; margin:0px 0px 0px -0px">

<table border=0px solid black cellspacing=1 cellpadding=2 width=160px>
 <tr><td><a href="layout.html">Home</a></tr>
    <tr><td><a href="login.html">Log in</a></tr>
    <tr><td><a href="find.php">Find nearest Auto</a></tr>
  <tr><td><a href="Teriff.html">Teriff</a></tr>
    <tr><td><a href="regcomplaint.html">Register Your complaint</a></tr>
<td><a href="help.html"> Help</a></tr>
<td><a href="aboutus.html">About</a></tr>  

</table>
</div>

<div id="nav" style="background-image:url(images/b32.png); width:815px ;height:350px; float:right;border:1px solid black; margin:0px 0px 0px 0px">

<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<font color="red">Hello <?php echo$_SESSION["uname"];?><a href="logout.php" button class="button2 button2" value="log out">Log out</a>
<table border=1px cellspacing=2 cellpadding=3 width=400px background-color="gray">

</table>

</table>
</div>
</div>
<div id="footer" style="background-image:url(images/4.png);text-align:center;height:60px; width:1000px;border:1px solid black; margin:350px 0px 0px 0px;border:1px solid black;">Copyright @ Modern College Shivajinagar,pune</div></div>
</html>
