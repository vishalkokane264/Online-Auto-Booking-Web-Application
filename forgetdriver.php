<?php
include"db.php";
$fn=$_POST["fname"];
$fc=$_POST["fcont"];
echo"Hi";
//$fetch=pg_query("select batch_no,lic_no from driver;");
if($fn==""||$fc=="")
echo"<script>alert('Fill all the fields');window.location.href='dforget.html';</script>";

$q=pg_query("select batch_no,lic_no from driver;");
$n=0;
while($row=pg_fetch_array($q))
{
if($row[5]==$fn &&$row[6]==$fc)
{
$n=1;
echo"<script>alert('Your password is sent on your registered Email-id shortly');window.location.href='driverlogin.html';</script>";

}
else
echo"<script>alert('Driver not registered');window.location.href='dforget.html';</script>";

}

