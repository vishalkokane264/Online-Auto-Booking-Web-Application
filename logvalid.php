
<?php
session_start();

include("db.php");
$uname=$_POST["uname"];
$pass=$_POST["upasswd"];
$q=pg_query("select * from custregister");
$n=0;
while($row=pg_fetch_array($q))
{
if($row[0]==$uname &&$row[7]==$pass)
{
$n=1;
$_SESSION["uname"]=$row[0];
$_SESSION["ucontact"]=$row[4];

}
}

if($n==1)
{
header('location:afterlog.php');
echo "l";
}
else
{
echo"<script>alert('username or Pasword Invalid');window.location.href='login.html';
</script>";

}

?>
