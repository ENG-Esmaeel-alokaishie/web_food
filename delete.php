<?php
include('conn.php');
$id = $_GET['id'];
$del ="DELETE FROM admin_prodect where id =$id";
mysqli_query($con , $del);
echo "<script> alert ('تم عملية الحذف بنجاح')</script>";
header("refresh:1;prodect.php");
?>