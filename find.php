
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>
div.container {height:25% 50% 25%;
    align:center;
    width: 80%;
    border: 1px solid gray;
 }

header, footer {
    padding: 1em;
    color: white;
    background-color: green;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
    border-right: 3px solid gray;
    text-align:left;
}


nav ul {
    list-style-type: none;
    padding: 1;
    text-align:center;
}
   
nav ul a {
    text-decoration: bold;
}



article {
    background-color:skyblue;
    margin-left: 170px;
    padding: 2.5em;
    overflow: hidden;

}


}	
img.avatar {
    width: 18%;
    border-radius:20px;
     margin:left;
	opacity=0.3;
}

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
<div id="container" style="width:1000px;" bgcolor="blue">

<div id="header" style="background-image:url(images/4.png);" width=1000px;>
<img src="images/rick2.jpg"; align="left" height=130px width=180px style="margin: 4px 0px 2px 6px;"><h1 ><font color="white"><b>Online Auto Booking System</h1>
<h2>E-Auto</h2>
<blink >Book Your Auto in a click</font></blink>
</div>

<div id="nav" style="background-image:url(images/b26.png);border:1px solid black; width:180px ;height:350px; float:left; margin:0px 0px 0px 0px">
<table border=0px solid black cellspacing=1 cellpadding=2 width=160px>
 <tr><td><a href="layout.html">Home</a></tr>
    <tr><td><a href="login.html">Log in</a></tr>
    <tr><td><a href="registration.html">New User Register</a></tr>
   <tr> <td><a href="forgot.html">Forgot user name/password</a></tr>
    <tr><td><a href="find.php">Find nearest Auto</a></tr>
  <tr><td><a href="Teriff.html">Teriff</a></tr>
    <tr><td><a href="regcomplaint.html">Register Your complaint</a></tr>
  <td><a href="help.html"> Help</a></tr>
  <td><a href="aboutus.html">About</a></tr>  
</table>

</div>

<div id="nav" style="background-image:url(images/b32.png); width:815px ;height:350px; float:right;border:1px solid black; margin:0px 0px 0px 0px">
<table border=0px solid black cellspacing=1 cellpadding=2 width=500px style="margin:50px 0px 0px 0px">
<form method="POST" action="validate.php">
 <tr>
	<td>Address:</td>
	<td><input type="text" placeholder="Enter Address" name="address" required>	<td align="right"><input type="submit" value="Search" name="submit">
	
</form>
</table>
</div>
<div id="footer" style="background-image:url(images/4.png) ;text-align:center;height:60px; width:1000px; margin:350px 0px 0px 0px"><h4>Copyright @ Modern College Shivajinagar,pune
</div>

