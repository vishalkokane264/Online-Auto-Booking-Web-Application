<?php
include"db.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>

.button {
    background-color: orange;
    border: 3px;
    color: white;
    padding: 15px 60px;
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
   

} /* Blue */


.button9{
    background-color: orange;
    border: 3px;
    color: white;
align:right;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px px px 0px;
    cursor: pointer;
}
.button9 {
   width:150px;
   background-color: #008CBA;
   

} 

</style>
</head>


<body >
<center>
<div id="container" style="width:1000px;min-height:560px;border:0px solid black; " bgcolor="blue">

<div id="header" style="background-image:url(images/4.png);" width=1000px;>
<img src="images/rick2.jpg"; align="left" height=130px width=180px style="margin: 4px 0px 2px 6px;"><h1 ><font color="white"><b>Online Auto Booking System</h1>
<h2>E-Auto</h2>
<blink >Book Your Auto in a click</blink>
</div>
<div id="nav" style="background-image:url(images/b26.png); width:181px ;height:350px; float:left;border:1px solid black; margin:0px 0px 0px 0px">

<table border=0px solid black cellspacing=1 cellpadding=2 width=160px>
 <tr><td><a href="layout.html">Home</a></tr>
    <tr><td><a href="login.html">Log in</a></tr>
    <tr><td><a href="find.php">Find nearest Auto</a></tr>
  <tr><td><a href="Teriff.html">Terrif</a></tr>
    <tr><td><a href="regcomplaint.html">Register Your complaint</a></tr>
<td><a href="help.html"> Help</a></tr>
<td><a href="aboutus.html">About</a></tr>  
</table>
</div>

<div id="nav" style="background-image:url(images/b32.png); width:815px ;border:1px solid black;height:350px; float:right; ">

<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<font color="red">Hello <?php echo$_SESSION["uname"];?><a href="logout.php" button class="button9 button9" value="log out">Log out</a>

</p><p>&nbsp<br></p><p> <a href="bookride.php" button class="button button2">Book a ride&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a><br><br></p>
<p><a href="payment.php"button class="button button2">Pay a Bill&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a><br><br>
<p><a href="find.php" button class="button button2">Find Nearest auto</a><br><br>
<p><a href="Teriff.html" button class="button button2">What is Terriff??</a><br><br>


</div>

<div id="footer" style="border:1px solid black;background-image:url(images/4.png);height:60px; width:1000px;clear:both; text-align:center;"><font color="white">Copyright @ Modern College Shivajinagar,pune
</div>
</div></html>

