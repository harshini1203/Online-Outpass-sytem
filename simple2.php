<?php
$conn= new mysqli("localhost","root","dhanya2003","db2");
if(isset($_POST['new_value'])){
   $sql="update outpass set status='Approved' where out_no=".$_POST['new_value'];
   $conn->query($sql);
}
?>
