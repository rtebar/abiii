<?php 

echo '<h1>Using PHP</h1>';
include 'dbconnect.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);

?>