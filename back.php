<?php 

echo '<p>Using PHP</p>'; 
include 'dbconnect.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);

?>