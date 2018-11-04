<?php
include("db.php");
echo"<center><h2><b>Complaint Details<b></h2></center>";
echo"<table border=1px solid black cellspacing=1 cellpadding=2>";
$q=pg_query("select * from complaint");
$n=0;
while($row=pg_fetch_array($q))
{
echo"<tr><td><b>Complaint ID:</b></td><td>".$row[0]."</td></tr>";
echo"<tr><td><b>User name:</b></td><td>".$row[1]."</td></tr>";
echo"<tr><td><b>Contact Number:</b></td><td>".$row[2]."</td></tr>";
echo"<tr><td><b>Subject:</b></td><td>".$row[3]."</td></tr>";
echo"<tr><td><b>City:</b></td><td>".$row[4]."</td></tr>";
echo"<tr><td><b>Details:</b></td><td>".$row[5]."</td></tr>";
echo"<tr><td><b>Status:</b></td><td>".$row[7]."</td></tr>";
}
?>

