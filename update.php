<?php
include("conn.php");
if(isset($_POST['upload'])){
    $id =$_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['file'];
    $image_location = $_FILES['file']['tmp_name'];
    $image_name = $_FILES['file']['name'];
    $image_up = "images/".$image_name;
    if(move_uploaded_file($image_location,"images/".$image_name)){
        $updat ="UPDATE  admin_prodect  SET NAME='$name' , price='$price' , image='$image_up' , id_cat=1 where id =$id";
        mysqli_query($con,$updat);
        echo "<script> alert ('تم عملية التعديل بنجاح')</script>";
    }else{
        echo "<script> alert ('لم تتم عملية التعديل')</script>";
    }
     header("refresh:1;prodect.php");
}
// echo "hhh";
?>