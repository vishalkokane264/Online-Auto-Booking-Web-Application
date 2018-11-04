<?php
include("db.php");

$name=$_POST["name1"];
$address=$_POST["Address"];
$dat=$_POST["To_Date"];

$age=$_POST["age"];
$batch=$_POST["batchNo"];
$licno=$_POST["licNo"];
$autono=$_POST["autoNo"];
$gend=$_POST["gender"];
$contact=$_POST["mobileNo"];
$email=$_POST["email"];
$pass=$_POST["myPsw"];
$pass1=$_POST["myPsw1"];
if(!preg_match("/^[A-Za-z\s]+$/",$name))
echo"<script>alert('Name must contain only letters');window.location.href='driverregistration.php';</script>";

if(!ereg("^[A-Z]{2}[0-9]{13}$",$licno))
{
echo"<script>alert('Licence Number is Invalid');window.location.href='driverregistration.php';</script>";
}
if(!preg_match('/^[0-9]*$/',$contact))
echo"<script>alert('Mobile number Invalid');window.location.href='driverregistration.php';</script>";


$r=strlen($pass);
$rr=strlen($pass1);
if($r<6 || $rr<6)
echo"<script>alert('Password length should be greater than 6');window.location.href='driverregistration.php';</script>";

if($pass!=$pass1)
{
echo"<script>alert('Password does not match')</script>";
}
if($name==" "||$address==" "||$contact==" "||$licno==" "||$email==" "||$pass1==" "||$batch==" "||$autono==" ")
{
echo"<script>alert('Fill all the Fields');window.location.href='driverregistration.php';</script>";
}

$l=strlen($batch);
if((!preg_match('/^[0-9]*$/',$batch))||($batch<0)||$l>6)
echo"<script>alert('Batch number Invalid');window.location.href='driverregistration.php';</script>";


if(!ereg("^[a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$",$email))
{
echo"<script>alert('Email is Invalid');window.location.href='driverregistration.php';</script>";
}

if(!ereg("^[A-Z]{2}[0-9]{1,2}[A-Z]{1,2}[0-9]{4}$",$autono))
{
echo"<script>alert('Auto Number is Invalid');window.location.href='driverregistration.php';</script>";
}

else 
{
$q=pg_query("select * from driver");
$n=0;
while($row=pg_fetch_array($q))
{
if($row['batch_no']==$batch)
{
$n=1;
echo"<script>alert('You are already registered.')</script>";
}
}
if($n==0)
{
pg_query("insert into driver values('$name','$address','$dat','$age','$gend','$batch','$licno','$autono','$contact','$email','$pass')") or die("Something went wrong ");
echo"<script>alert('Record inserted successfully.You can login now.');window.location.href='driverlogin.html';</script>";
//header('location:driverlogin.html');
}
}
?> 
