<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/singup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
  <div class="login   col-lg-4  p-4">
    <form class="row g-3 " method ="post" action ="insert_user.php">
        <div class="col-lg-6 col-md-12 mt-sm-10">
          <label for="Name" class="form-label">الاسم</label>
          <input type="text" class="form-control" id="name" name = "fname">
        </div>
        <div class="col-lg-6 col-md-12">
          <label for="Last_nume" class="form-label">اللقب</label>
          <input type="text" class="form-control" id="last_name"  name = "lname">
        </div>
        <div class="col-12">
          <label for="phone" class="form-label">رقم الهاتف</label>
          <input type="number" class="form-control" id="inputAddress" placeholder="phone"  name = "phone">
        </div>
        <div class="col-12">
          <label for="email" class="form-label"> البريد الالكتروني</label>
          <input type="email" class="form-control" id="Date" name ='email'>
        </div>
        <div class="col-lg-6 col-md-12">
            <label for="inputPassword4" class="form-label">كلمة المرور</label>
            <input type="password" class="form-control" id="inputPassword4"  name = "password">
        </div>
        <div class="col-lg-6 col-md-12">
            <label for="inputPassword5" class="form-label">تاكيد كلمة المرور</label>
            <input type="password" class="form-control" id="inputPassword5"  name = "passwordagin">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">المحافظة</label>
          <input type="text" class="form-control" id="inputCity"  name = "city">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">الشارع</label>
          <input type="text" class="form-control" id="inputState"  name = "street">
          <!-- <select id="inputState" class="form-select"  name = "street">
            <option selected>اختار الشارع</option>
            <option>باب موسى</option>
            <option>شارع 26 </option>
            <option>شارع جمال </option>
            <option>بير باشا </option>
          </select> -->
        </div>
        <div class="col-12">
          <button type="submit" name = "insert" class="w-100 btn btn-primary">Sign in</button>
        </div>
      </form>
  </div>
</body>
</html>