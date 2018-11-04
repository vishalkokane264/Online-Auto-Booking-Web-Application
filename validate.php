<?php
include "db.php";
$add=$_POST["address"];

$q1=pg_query("select * from driver where address like'%$add%' order by random()") or die("<tr><td>There is no auto in current area</td></tr>");
echo"<center>";
echo "<h1><center>Driver details are</h1>";
echo "<h3>Address:".$add."<br>";

echo"<table border=1px solid black  width=500px;>";
echo"<tr><th>&nbsp</th><th>Driver Name </th><th>Contact</th></tr>";

$i=1;
while($row=pg_fetch_array($q1))
{

echo"<tr><td><h5>$i</td><td>".$row[0]."</td><td>".$row[8]."</td></tr>";
$i++;
}
echo"</table>";
?>
