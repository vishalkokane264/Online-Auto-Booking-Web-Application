<?php
session_start();
if(isset($_REQUEST['sts']))
{
  echo $_REQUEST['sts'];
}
if(!isset($_POST['nm']) || !isset($_POST['cap']))
{
	
// Create a blank image and add some text
$im = imagecreatetruecolor(120, 40);

$text_color = imagecolorallocate($im, 233, 14, 91);
$val= rand(9,true).rand(9,true).rand(9,true).rand(9,true).rand(9,true).rand(9,true);
imagestring($im, 5, 5, 5,  $val , $text_color);

// Save the image as 'simpletext.jpg'
imagejpeg($im, 'captcha.jpg',100);

// Free up memory
imagedestroy($im);
$_SESSION['val_cap']=$val;
echo "<form action=index.php method='post'>
		<input type='text' name='nm' placeholder='Name'/>
		<br><img src=captcha.jpg>
		<br><input type='text' name='cap' placeholder='Type above Text'/>
		<br><input type='submit' value='Send' />";
}

else
{
	//echo $_SESSION['val_cap'];
	if($_POST['cap']==$_SESSION['val_cap'])
	{
		echo "Welcome here...".$_POST['nm'];
		// Write your code, that will be executed once successful captcha entry...
	}
	else
		header("location:index.php?sts=Invalid Capcha");
}
?>