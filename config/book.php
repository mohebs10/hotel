<?php include'../includes/connect.php'; 
if (isset($_POST['submit'])) {
	$arrive=$_POST['arrive'];
	$leave=$_POST['leave'];
	$room=$_POST['room'];
	$guest=$_POST['guest'];
	$email=$_POST['email'];
	$note=$_POST['note'];
	$sql=" INSERT INTO reservation (res_date,leave_date,room,guest,email,note) VALUES ('$arrive','$leave','$room','$guest','$email','$note')";
	
	if ($conn->query($sql) === TRUE) {
       header("Location:../bookingdone.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}





			








?>
