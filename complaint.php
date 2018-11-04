<?php
session_start();
include("db.php");
$ctype=$_POST["cname"];
$city=$_POST["ccity"];
$com=$_POST["complaint"];
$target="/var";
$target_file=$target_dir.basename($_FILES["ftoup"]["name"]);
$uploadok=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
if($ctype==""||$city==""||$com=="")
echo"<script>alert('Fill all the fields');window.location.href='regcomplaint.html';
</script>";
if(isset($_POST["submit"]))
{
$check=getimagesize($_FILES["ftoup"]["tmp_name"]);
if($check!=false)
{
$check["mime"].".";
$uploadok=1;
$fname=$_FILES["ftoup"]["name"];
}
else
{
$uploadok=0;
echo"<script>alert('File should be image file');';
</script>";
$uploadok=0;
}
}
$cid=date('dmyhi');
$uname=$_SESSION["uname"];
$ct=$_SESSION["ucontact"];
$st='accept';
pg_query("insert into complaint values($cid,'$ct','$ctype','$city','$com','$fname','accepted')");
?>
<DOCTYPE html>
<body>

<div id="container" style="width:100%;" bgcolor="blue">

<div class="header" style="background-image:url(images/4.png);" width=1000px;>
<img src="images/rick2.jpg"; align="left" height=130px width=180px style="margin: 4px 0px 2px 6px;"><h1 ><font color="white"><b><center>Online Auto Booking System</h1>
<center><h2>E-Auto</h2></center>
<marquee>Book Your Auto in a click</font></marquee>
</div>

<div class="container" style="width:1000px;height:auto" bgcolor="blue"></center>
&nbsp<h2> Dear Customer<br><h3><font color="red">Your complaint has been registered in our database.<br></h2></font>
Name:<?php echo $uname?><br>
Contact<?php echo $ct?><br>
Complaint id :<?php $o=0;echo date('dmyhi').($o+1)?><br>
Complaint date and time:<?php echo date('d-m-Y h:i:sa')?><br>
<h3>Track your complaint <a href="regcomplaint.html">here</a></div>
<br><br>Please provide us your valuable feedback on your ride experience by email on<a href="#"> eautohelpdesk@autodesk.com<div id="footer" style="background-image:url(images/4.png) ;text-align:center;height:60px; width:100%;border:1px solid black; margin:400px 0px 0px 0px;border:1px solid black;"><font color="white"><h3>Copyright @ Modern College Shivajinagar,pune
</div>

