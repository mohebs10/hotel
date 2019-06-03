<?php if (isset($_POST['submit'])) {
	include 'connect.php';
	$loginname= $_POST['log_name'];
	$loginpass= $_POST['log_pass'];

	$select = "SELECT * FROM admins WHERE ad_name='$loginname' AND ad_password='$loginpass'" ;
    $result = $conn->query($select);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        header("Location:../main.php") ;
        setcookie("adminlogin");
    }
} else {
    echo "<a href = '../' >wrong login data</a> ";
}
}


?>