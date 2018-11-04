
<?php
include"db.php";
session_start();
$mode=$_POST["payment"];
$_SESSION[$mode]=$_POST["payment"];

?>


<!DOCTYPE html>
<html>
<head>
<style>
body {
    
}
div.container {
    height:25% 50% 25%;
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
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 2.5em;
    overflow: hidden;
}


img.avatar {
    width: 18%;
    border-radius:20px;
     margin:left;
}

.button {
  display: inline-block;
  padding: 10px 5px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: brown;
  border: 5px;
  border-radius: 60px;
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
.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {  padding: 10px 20px;background-color: gray;border-radius: 5px;} /* Blue */
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
<div id="nav" style="background-image:url(images/b26.png); width:181px ;height:400px;border:1px solid black; float:left; margin:0px 0px 0px -0px">
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


<div id="nav" style="background-image:url(images/b32.png); width:815px ;height:400px; float:right;border:1px solid black; margin:0px 0px 0px 0px">
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<font color="red">Hello, <?php echo$_SESSION["uname"];?><a href="logout.php" button class="button2 button2" value="log out">Log out</a></font>
<form action="ccard.php" method="post">

<?php
echo"<h4>Driver's Batch no.:<input type='text' value='' name='dbatch' maxlength=6>";
	echo"Pick Date<input type='date' placeholder='dd/mm/yyyy' name='pdate' maxlength=10><br><br>";
	echo"From<input type='text' name='floc'>To<input type='text' name='toloc'><br><br>KM:<input type='text' name='km' value=><br>";
	echo"<table border=1px solid black width:200px> ";
	
switch($mode)
{
case "cc":
	echo"<tr><td>Credit card no:</td><td><input type='text' name='ccno' maxlength=16><br></td></tr>";
	echo"<tr><td>Card Holder name:</td><td><input type='text' name='ccname' maxlength=16><br></td></tr>";
	echo"<tr><td>Expiry Date:</td><td><input type='text' name='edate' maxlength=16><br></td></tr>";
	echo"<tr><td>CVV:</td><td><input type='password' name='cvv' maxlength=4><br></td></tr>";		
	echo"<tr><td>Amount:</td><td><input type='number' name='amt' maxlength=16></td></tr>";
	echo"<tr><td><input type= 'submit' value='pay' name='pay'>";	
break;
case "dc":
	echo"<tr><td>Debit card no:</td><td><input type='text' name='ccno' maxlength=16><br></td></tr>";
	echo"<tr><td>Card Holder name:</td><td><input type='text' name='ccname' maxlength=16><br></td></tr>";
	echo"<tr><td>Expiry Date:</td><td><input type='text' name='edate' maxlength=16><br></td></tr>";
	echo"<tr><td>Amount to pay:</td><td><input type='number' name='amt' maxlength=16></td></tr>";
	echo"<tr><td><input type= 'submit' value='pay' name='pay'>";	
break;
case "py":
	echo"<tr><td><a href='www.paytm.com'>Paytm.com</a></td></tr>";
	break;
		
}
echo"</table>";
?>
</form>
 </div>
</form>
<div id="footer" style="background-image:url(images/4.png) ;text-align:center;height:60px; width:1000px;border:1px solid black; margin:400px 0px 0px 0px;border:1px solid black;"><font color="white">Copyright @ Modern College Shivajinagar,pune</div></div>



