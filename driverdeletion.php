<?php
include("db.php");

$name=$_POST["name1"];
$batch=$_POST["batchNo"];
$licno=$_POST["licNo"];
$autono=$_POST["autoNo"];
$contact=$_POST["mobileNo"];


if(!preg_match("/^[A-Za-z\s]+$/",$name))
echo"<script>alert('Name must contain only letters');window.location.href='driverdeletion.html';</script>";

if(!ereg("^[A-Z]{2}[0-9]{13}$",$licno))
{
echo"<script>alert('Licence Number is Invalid');window.location.href='driverdeletion.html';</script>";
}

$l=strlen($batch);
if((!preg_match('/^[0-9]*$/',$batch))||($batch<0)||$l>6)
echo"<script>alert('Batch number Invalid');window.location.href='driverdeletion.html';</script>";

if(!ereg("^[A-Z]{2}[0-9]{1,2}[A-Z]{1,2}[0-9]{4}$",$autono))
{
echo"<script>alert('Auto Number is Invalid');window.location.href='driverdeletion.html';</script>";
}


$r=strlen($contact);
if($r<=9)
echo"<script>alert('Mobile number Invalid');window.location.href='driverdeletion.html';</script>";

else
{
echo"<script>alert('Driver deleted successfully.');window.location.href='driverdeletion.html';</script>";
/*$q=pg_query("select * from driver");
$n=0;
while($row=pg_fetch_array($q))
{
if($row['batch_no']==$batch)
{
pg_query("delete from driver where batch_no=$batch") or die("Error");
}

else
echo"<script>alert('Driver doesn't exist');window.location.href='driverdeletion.html';</script>";
*/}
?> 
