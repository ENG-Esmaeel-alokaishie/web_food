<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<?php
include('conn.php');
if(isset($_POST['send'])){
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $select = "SELECT * FROM users WHERE phone = '$phone' AND password = '$password' ";
    $data = mysqli_query($con , $select);
   
    $result = mysqli_query($con ,$select);
    while($row = mysqli_fetch_array($result)){
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['fname'];
    }
    
    if(mysqli_num_rows($data)>0){

        if($phone == "777777777" AND $password == "1234" OR $phone == "666" AND $password == "1111" ){

                     header('location:admin.php');
            
             }else {
                    header('location:main.php');
             
              }


        // echo 'ok';
    //   header('location:main.php');
    }else {
        echo "<script> alert ('أسم المستخدم او كلمة المرور خاطئة')</script>";
    }
}
?> 


<body>

    <div class="login">

        <h3 class="text-center">تسجيل الدخول</h3>
        
        <form class="needs-validation" method ='post'>
            <div class="frm was-validated">
                <label class="form-label" for="number">رقم الهاتف</label>
                <input class="form-control" type="number" id="number"  required  name ='phone'>
                <div class="invalid-feedback  text-black-50">
                    من فضلك قم بادخال رقم الهاتف
                </div>
            </div>
            <div class="frm was-validated">
                <label class="form-label" for="password">كلمة المرور</label>
                <input class="form-control" type="password" id="password" required name="password">
                <div class="invalid-feedback text-black-50">
                     فضلك قم بادخال كلمة السر 
                </div>
            </div>
            <div class="frm form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">أظهار كلمة السر</label>
            </div>
            <input class="btn w-100" name="send" type="submit" value="SIGN IN" >
            <p class="signup_link">لا أمتلك حساب <a href="singup.php">أنشاء حساب</a></p>
        </form>
        

    </div>

</body>
</html>
