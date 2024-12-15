<?php
include("conn.php");

if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $image = $_FILES['file'];
    $image_location = $_FILES['file']['tmp_name'];
    $image_name = $_FILES['file']['name'];
    $image_up = "images/".$image_name;
    if(move_uploaded_file($image_location,"images/".$image_name)){
        $insert ="INSERT INTO categ (NAME , image )VALUES('$name','$image_up')";
        mysqli_query($con,$insert);
        echo "<script> alert ('تم عملية التحميل بنجاح')</script>";
    }else{
        echo "<script> alert ('لم تتم عملية التحميل')</script>";
    }
     header("refresh:1;index3.php");
}



   
//     if($name != NULL){
//         $insert ="INSERT INTO items (Name)VALUES('$name')";
//         mysqli_query($con,$insert);
//         echo "<script> alert ('تم انشاء صنف جديد')</script>";
//         header("refresh:1;index3.php");

//     }else{
//         echo "<script> alert ('يجب  ادخال اسم الصنف جديد ')</script>";
//         header("refresh:1;index3.php");
//     } 
// }
?>