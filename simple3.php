<?php
$conn= new mysqli("localhost","root","dhanya2003","db2");
   $sql="update outpass set status='Approved' where status='Waiting'";
   $conn->query($sql);

?>
