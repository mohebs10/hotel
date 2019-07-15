<?php
if (isset($_POST["submit"])) {
	include'config/connect.php';
	$idd=$_POST['id'];
  $arrive=$_POST['arrive'];
	$leave=$_POST['leave'];
	$room=$_POST['room'];
	$guest=$_POST['guest'];
	$sql="UPDATE reservation (res_date,leave_date,room,guest) 
	    SET ('$arrive','$leave','$room','$guest') WHERE (id)=[$idd]";
}
?>