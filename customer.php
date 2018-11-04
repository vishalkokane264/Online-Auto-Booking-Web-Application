<?php

include("db.php");

$name=$_POST["name1"];
$address=$_POST["Address"];
$age=$_POST["age"];
$gend=$_POST["gender"];
$contact=$_POST["mobileNo"];
$email=$_POST["email"];
$dis=$_POST["disab"];
$pass=$_POST["myPsw"];
$pass1=$_POST["myPsw1"];
if(!preg_match("/^[A-Za-z\s]+$/",$name))
echo"<script>alert('Name must contain only letters');window.location.href='registration.html';</script>";

$r=strlen($contact);
if($r<=9)
echo"<script>alert('Mobile number Invalid');window.location.href='registration.html';</script>";

if(!preg_match('/^[0-9]*$/',$contact))
echo"<script>alert('Mobile number Invalid');window.location.href='registration.html';</script>";

if($pass!=$pass1)
{
echo"<script>alert('Password does not match');window.location.href='registration.html';</script>";
}

$r=strlen($pass);
$rr=strlen($pass1);
if($r<6 || $rr<6)
echo"<script>alert('Password length should be greater than 6');window.location.href='registration.html';</script>";

if($name==" "||$address==" "||$contact==" "||$email==" "||$pass1=="")
echo"<script>alert('Fill all the Fields');window.location.href='registration.html';</script>";

if(!ereg("^[a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$",$email))
{
echo"<script>alert('Email is Invalid');window.location.href='registration.html';</script>";
}
else 
{
$q=pg_query("select * from custregister");
$n=0;
while($row=pg_fetch_array($q))
{
if($row['mobile_no']==$contact)
{
$n=1;
echo"<script>alert('User already exist');window.location.href='registration.html';</script>";
}
}
if($n==0)
{
pg_query("insert into custregister values('$name','$address','$age','$gend','$contact','$email','$dis','$pass1')")or die ("<script>alert('Record not inserted successfully.');window.location.href='login.html';</script>");
echo "<script>alert('Details registered successfully.');window.location.href='login.html';</script>";
//pg_query("insert into logt values('$contact','$pass1')")or die ("<br>Record 2 not inserted");
//echo"<script>alert('Record inserted successfully.');window.location.href='login.html';</script>";


}
}

?> 
