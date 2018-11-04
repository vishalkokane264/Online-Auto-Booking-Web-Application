<?php
include("db.php");
session_start();
?>

<html>
<body >
<script>
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
   background-color: #008CBA;   } 
</script>
<center>
<div id="container" style="width:1000px; border:0px solid black;" bgcolor="blue">

<div id="header" style="background-image:url(images/4.png);" width=1000px;>
<img src="images/rick2.jpg"; align="left" height=130px width=180px style="margin: 4px 0px 2px 6px;"><h1 ><font color="white"><b>Online Auto Booking System</h1>
<h2>E-Auto</h2>
<marquee>Book Your Auto in a click</font></marquee>
</div>
<div id="nav" style="background-image:url(images/b32.png); width:181px ;height:370px;border:1px solid black; float:left; margin:0px 0px 0px -0px">

<table border=0px solid black cellspacing=1 cellpadding=2 width=160px>
 <tr><td><a href="layout.html">Home</a></tr>
    <tr><td><a href="login.html">Log in</a></tr>
    <tr><td><a href="registration.html">New User Register</a></tr>
   <tr><td><a href="forgot.html">Forgot user name/password</a></tr>
    <tr><td><a href="find.html">Find nearest Auto</a></tr>
  <tr><td><a href="Terrif.html">Terrif</a></tr>
    <tr><td><a href="regcomplaint.html">Register Your complaint</a></tr>
<td><a href="help.html"> Help</a></tr>
<td><a href="aboutus.html">About</a></tr>  
</table>
</div>
<div id="nav" style="width:815px ;height:370px; float:right;border:1px solid black; margin:0px 0px 0px 0px">
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<font color="red">Hello, <?php echo$_SESSION["uname"];?><a href="logout.php" button class="button2 button2" value="log out">Log out</a></font>

<form name=f><p>Enter complaint id<input type="text" name="cid"maxlength=30> <input type=button value="Track" onclick=chk()>
</div>
<div id="footer" style="background-image:url(images/4.png) ;text-align:center;height:60px; width:1000px;border:1px solid black; margin:370px 0px 0px 0px;border:1px solid black;"><font color="white"><h3>Copyright @ Modern College Shivajinagar,pune<br>
</div>

