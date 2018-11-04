<?php
include("db.php");
session_start();
$dn=$_SESSION["dname"];
$i=1;
echo"<center><table border=1px solid black cellspacing=1 cellpadding=2>";
$q=pg_query(" select custregister.customer_name,custregister.mobile_no,bookauto1.pickdate,bookauto1.from_loc,bookauto1.to_loc,bookauto1.time from bookauto1,driver,custregister where bookauto1.batch_no=driver.batch_no and custregister.mobile_no=bookauto1.contact and 
dr_name='$dn'");
$n=0;
echo"<tr><th>Sr.no</th><th>Customer name</th><th>Contact no.</th><th>Pick date</th><th>From</th><th>To</th><th>Time</th></tr>";
while($row=pg_fetch_array($q))
{
echo"<tr><td>$i</td><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
$i++;
}
echo"</table>";
/*

$stat=$_POST['ol'];
//echo"<center><table border=1px solid black cellspacing=1 cellpadding=2>";
if($stat=1)
$q=pg_query("update driver set status='on' where dname='$dn'");
else
$q=pg_query("update driver set status='off' where dname='$dn'");
*/

?>

