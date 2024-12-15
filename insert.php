<?php
include("conn.php");
if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id_cat= $_POST['items_id']; 
    $image = $_FILES['file'];
    $image_location = $_FILES['file']['tmp_name'];
    $image_name = $_FILES['file']['name'];
    $image_up = "images/".$image_name;
    if(move_uploaded_file($image_location,"images/".$image_name)){
        $insert ="INSERT INTO admin_prodect (NAME , price , image , id_cat)VALUES('$name','$price','$image_up',$id_cat)";
        mysqli_query($con,$insert);
        echo "<script> alert ('تم عملية التحميل بنجاح')</script>";
    }else{
        echo "<script> alert ('لم تتم عملية التحميل')</script>";
    }
     header("refresh:1;index2.php");
}
// echo "hhh";
?>