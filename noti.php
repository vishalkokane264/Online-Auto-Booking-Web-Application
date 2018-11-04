<?php
include("db.php");
session_start();
$dn=$_SESSION["dname"];
$i=1;
echo"<center><table border=1px solid black cellspacing=1 cellpadding=2>";
$q=pg_query("select * from custdri where dri_name='$dn'");
$n=0;
echo"<tr><th>Sr.no</th><th>Customer name</th><th>Contact no.</th><th>Pick date</th><th>Time</th><th>From</th><th>To</th></tr>";
while($row=pg_fetch_array($q))
{
echo"<tr><td>$i</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>";
$i++;
}
echo"</table>";
?>

