<?php
include("db.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>

.button {
  display: inline-block;
  padding: 5px 3px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: brown;
  border: 0px;
  border-radius: 3px;
  box-shadow: 0  ;
}
.button:hover {background-color: #3e8e42}

.button:active {
  background-color: #3e8e41;
  box-shadow: 10 5px #666;
  transform: translateY(4px);
}
.button1 {.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
    transition-duration: 1s;
}
} /* Blue */
.button1:hover 
{
     background-color: #008CBA;
     color: white;
}
.button2{
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
.button2 {
   width:150px;
   background-color: #008CBA;
   

} 

.button2
{
     background-color: #008CBA;
} /* Blue */

.button3 
{
     padding: 10px 20px;
     background-color: gray; 
     border-radius: 5px;
} /* Blue */

</style>
</head>
<body>

<center>
<div id="container" style="width:1000px; border:0px solid black;" bgcolor="blue">

<div id="header" style="background-image:url(images/4.png);" width=1000px;>
<img src="images/rick2.jpg"; align="left" height=130px width=180px style="margin: 4px 0px 2px 6px;"><h1 ><font color="white"><b>Online Auto Booking System</h1>
<h2>E-Auto</h2>
<blink >Book Your Auto in a click</blink></font>
</div>
<div id="container" style="width:1000px;" bgcolor="blue">

<div id="nav" style="background-image:url(images/b26.png); width:181px ;height:350px;border:1px solid black; float:left; margin:0px 0px 0px -0px">

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

<div id="nav" style="background-image:url(images/b32.png); width:815px ;height:350px; float:right;border:1px solid black; margin:0px 0px 0px 0px">
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<font color="red">Hello, <?php echo$_SESSION["uname"];?><a href="logout.php" button class="button2 button2" value="log out">Log out</a></font>
<table border=0px solid black cellspacing=1 cellpadding=2 width=500px style="margin:0px 0px 0px 0px">

<form method="POST" action="book.php">
 <tr>
	<td>Enter a start point:</td>
	<td><input type="text" placeholder="Enter Address" name="saddress" required>&nbsp<a href="gmap.html" button class="button button1" >Choose point</a>
	</td>
</tr>
<tr>
     <td>&nbsp</td>
</tr>
<tr>
	<td>Enter a End point:</td><td><input type="text" placeholder="Enter Address" name="eaddress" required>&nbsp<a href="gmap.html" button class="button button1" >Choose point</a>
	</td>
</tr>
<tr>
     <td>&nbsp</td>
</tr>
<tr>
	<td>Date & Time:</td><td><input type="date" name="To_Date" value="<?php echo date('Y/m/d ')?>"></tr>
<tr><td></td>	<td><input type="date" name="To_time" value="<?php echo date('h:i:sa')?>">
	</td>
</tr>
<tr>
     <td>&nbsp</td>
</tr>
<tr>
	<td>How many seats</td><td><select name="autono"><option value=1 select>1</option><option value=2 select>2</option>
<option value=3 select>3</option>
	</td>
</tr>

<tr>
     <td>&nbsp</td>	<td align="right"><input type="submit" value="Book a ride" name="submit">
	</td>

</tr>
</form>
</table>
</div>
</div>
<div id="footer" style="background-image:url(images/4.png) ;text-align:center;height:60px; width:1000px;border:1px solid black; margin:350px 0px 0px 0px;border:1px solid black;"><font color="white">Copyright @ Modern College Shivajinagar,pune</div></div>
