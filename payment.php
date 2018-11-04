<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<style>
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
</head>
<body>

<center>
<div id="container" style="width:1000px; border:0px solid black;" bgcolor="blue">

<div id="header" style="background-image:url(images/4.png);" width=1000px;>
<img src="images/rick2.jpg"; align="left" height=130px width=180px style="margin: 4px 0px 2px 6px;"><h1 ><font color="white"><b>Online Auto Booking System</h1>
<h2>E-Auto</h2>
<blink >Book Your Auto in a click</blink>
</div></font>
<div id="nav" style="background-image:url(images/b26.png); width:181px ;height:350px;border:1px solid black; float:left; margin:0px 0px 0px -0px">
<table border=0px solid black cellspacing=1 cellpadding=2 width=160px>
 <tr><td><a href="layout.html">Home</a></tr>
    <tr><td><a href="login.html">Log in</a></tr>
    <tr><td><a href="registration.html">New User Register</a></tr>
    <tr> <td><a href="forgot.html">Forgot user name/password</a></tr>
    <tr><td><a href="find.php">Find nearest Auto</a></tr>
    <tr><td><a href="Teriff.html">Terrif</a></tr>
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
<font color="red">Hello, <?php echo$_SESSION["uname"];?><a href="logout.php" button class="button2 button2" value="log out">Log out</a></font>
<form action="pay.php" method="post">
   <h3>Select Payment Type</h3>
    <p><input type="radio" name="payment" value="cc" checked>Credit Card</p>
    <p><input type="radio" name="payment" value="dc">Debit Card</p>
    <p><input type="radio" name="payment" value="py">Paytm</p>
    <p><input type="submit" value="submit" ></p>
 </div>
</form>
<div id="footer" style="background-image:url(images/4.png) ;text-align:center;height:60px; width:1000px;border:1px solid black; margin:350px 0px 0px 0px;border:1px solid black;"><font color="white">Copyright @ Modern College Shivajinagar,pune</div></div>



