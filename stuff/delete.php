<?php
 $id=$_GET['id'];
 include'config/connect.php';
 $sql="DELETE FROM reservation WHERE id = $id ";
 if ($conn->query($sql) === TRUE) {
       header("Location:main.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>