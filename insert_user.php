<?php
include("conn.php");
if(isset($_POST['insert'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $passwordagin = $_POST['passwordagin'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $email = $_POST['email'];
    if($passwordagin ==$password){
        $insert ="INSERT INTO users (fname , lname , phone , password , city , street , email )VALUES('$fname','$lname','$phone','$password','$city' , '$street' , '$email')";
        mysqli_query($con,$insert);
        header("refresh:1;index.php");

    }else{
        echo "<script> alert ('يجب ان تكون كلمات المرور متساوية')</script>";
        header("refresh:1;singup.php");
    } 
}
?>