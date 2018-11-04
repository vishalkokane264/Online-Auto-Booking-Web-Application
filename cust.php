<?php
include"db.php";
echo"<center><h2><b>Customer Details<b></h2></center>";
echo"<table border=1px solid black cellspacing=1 cellpadding=2>";
$q=pg_query("select * from custregister");
$n=0;
$i=1;
		
while($row=pg_fetch_array($q))
{

echo"<tr><td>$i</td><td><b>Customer name:</b></td><td>".$row[0]."</td></tr>";
echo"<tr><td></td><td><b>Address:</b></td><td>".$row[1]."</td></tr>";
echo"<tr><td></td><td><b>Age:</b></td><td>".$row[2]."</td></tr>";
echo"<tr><td></td><td><b>Gender:</b></td><td>".$row[3]."</td></tr>";
echo"<tr><td></td><td><b>Mobile No.:</b></td><td>".$row[4]."</td></tr>";
echo"<tr><td></td><td><b>E-mail id :</b></td><td>".$row[5]."</td></tr>";
echo"<tr><td></td><td><b>Disable(Y/N):</b></td><td>".$row[6]."</td></tr>";
echo"<tr></tr>";
$i++;
}
?>

