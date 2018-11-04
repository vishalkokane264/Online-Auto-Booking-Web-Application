
<?php
session_start();
include("db.php");
$uname=$_POST["uid"];
$pass=$_POST["adpsw"];
$_SESSION['uid']=$_POST["aduser"];
$q=pg_query("select * from admin");
$n=0;
while($row=pg_fetch_array($q))
{
if($row[0]==$uname &&$row[5]==$pass)
{
$n=1;
$_SESSION["uname"]=$row[1];

}
}

if($n==1)
header('location:adminmenu.html');

else
{
echo"<script>alert('User ID or Pasword Invalid');window.location.href='adminlogin.html';
</script>";
}

?>
