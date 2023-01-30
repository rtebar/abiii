<?php
    function OpenCon()
     {
     $dbhost = $_SERVER['DBHOSTNAME'];
     $dbuser = $_SERVER['DBUSER'];
     $dbpass = $_SERVER['PASS'];
     $db = $_SERVER['DBNAME'];
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
?>