<?php
include"db.php";
$fn=$_POST["fname"];
$fc=$_POST["fcont"];
echo"Hi";
$fetch=pg_query("select customer_name,mobile_no from custregister;");
$q=pg_query("select customer_name,mobile_no from custregister");
$n=0;
while($row=pg_fetch_array($q))
{
if($row[0]==$fn &&$row[1]==$fc)
{
$n=1;
echo"<script>alert('Your password is sent on your registered Email-id shortly');window.location.href='login.html';</script>";

}
else
echo"<script>alert('Invalid user name or contact number');window.location.href='forgot.html';</script>";

}

