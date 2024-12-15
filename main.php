<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      .new .new_box{
        flex-wrap: wrap;
      }
      .new .new_box .image_food{
        margin: 50px 15px;
        
      }
      .new .new_box .image_food img{
        background-color: white
      }
      .new .new_box .image_food .number{

        text-align: center;
        border: 0;
        width: 30%;
        border-radius: 12px;
        border-bottom: 3px solid;
      }
      .new .new_box .image_food input[type='submit']{
        margin-right: 10px
        width: 30%;
        background-color: #2bb06c;
        border-radius: 12px;
        color: white;
      }
      .user_name{
        margin: 0 auto;
        padding-top: 12px;
        display: flex;
        position: absolute;
        left: 37%;
        z-index: 100;
        background-color: white;
        width: 26%;
        text-align: center;
        justify-content: space-around;
        border-radius: 17px;
        /* color: #2bb06c; */
      }
      .user_name #s{
        color: #2bb06c;
        font
      }
      .new{
        height: 100%;
      }
      #nav{
        color : #27ae69;
      }
    </style>
</head>
<body>
     <!-- Star Nav -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Image/logo1.png" alt="" class="ms-2">
        <span class="" >الفخامة للتوصيل</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link p-2  " href="#" id="nav">الرئسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  p-2 " href="#" id="">العروض</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  p-2 " href="#" id="">اطلب الان</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  p-2 " href="request.php" id="">طلباتي</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  p-2 " href="#" id="">الحساب</a>
          </li>
        </ul>
        <div class="search ps-3 pe-3">
          <i class="fa-solid fa-magnifying-glass d-none d-lg-block"></i>
        </div>
      </div>
    </div>
  </nav>
  <center>
    <div class="user_name">
      <p> Welcome To
        <span id ="s">
          <?php
          session_start();
          echo $_SESSION['name'];
          ?>
        </span>
      </p>
      
    </div>
  </center>
  
  <!-- End nav -->
  <!-- Start slide -->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="" data-slide-to="0" class="active"></li>
      <li data-target="" data-slide-to="1"></li>
      <li data-target="" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Image/a.jpg" alt="gray" width="100%" height="500">
        <div class="carousel-caption">
          <h3>عروض رائعة</h3>
          <p>بمناسبة شهر رمضان</p>
        </div>   
      </div>
      <div class="carousel-item">
       <img src="Image/bt1.jpg" alt="#cde8d2" width="100%" height="500">
        <div class="carousel-caption">
          <h3>عروض رائعة</h3>
          <p>بمناسبة شهر رمضان</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="Image/juse.jpg" alt="blue" width="100%" height="500">
        <div class="carousel-caption">
          <<h3>عروض رائعة</h3>
          <p>بمناسبة شهر رمضان</p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <!-- End slide  -->
  
  <!-- Star Categroty -->
  <p class="catp">ألتصنيفات </p>
 <div class="categ">
         <?php
            $select = "SELECT * FROM categ";
            include('conn.php');
            $result = mysqli_query($con ,$select);
            while($row = mysqli_fetch_array($result)){
            ?>  
    <!-- <div class="card1"> 
      <img src="Image/ice.png" alt="">
      <p> </p>
    </div> -->
    
     <div class="card"> 
      <img src="<?php echo $row['image']?>">
      <!-- <img src="Image/cake.png" alt=""> -->
      
      <?php echo"  <a href='prodect_user.php? id=$row[id]' id ='delete'>$row[name]</a>"?>
      
    </div>
    <?php
      }
      ?>
    <!-- <div class="card"> 
      <img src="Image/ramadn.png" alt="">
      <p> موكلات رمضانية </p>
    </div>
    <div class="card"> 
      <img src="Image/drink.jpg" alt="">
      <p>  مشروبات </p>
    </div>
    <div class="card"> 
      <img src="Image/brid.png" alt="">
      <p>  معجنات</p>
    </div>
    <div class="card"> 
      <img src="Image/alal.jpg" alt="">
      <p>  Ali Alabsi </p>
    </div> -->
 </div>
 <!-- End Categroty -->
 <h1 class="new_p"><span>ألموكلات الجديدة</span></h1> 
<div class="new">
 

<div class="new">
  <div class="new_box">
        <?php
            $select = "SELECT * FROM admin_prodect";
            include('conn.php');
            $result = mysqli_query($con ,$select);
            while($row = mysqli_fetch_array($result)){
            ?>  
      <div class="image_food">
          <img src="<?php echo $row['image']?>">
          <div class="info">
              <h2 class="name"><?php echo $row['name']?>[<?php echo $row['price']?>$]</h2>
              <form action="insert_request.php" method = "get">
                    <input type="number" value="0" name = "qun" class ="number">
                    <input type="hidden" value="<?php echo $row['id']?>" name ="id">             
                  <input type="submit" value ="طلب"> 
              </form>
          </div>
          
      </div>
      <?php
      }
      ?>

      <!-- <div class="image_food">
          <img src="image/bsbosa.png">
          <div class="info">
              <h2 class="name">بسبوية</h2>
          </div>
      </div>

      <div class="image_food">
          <img src="image/coffe.png">
          <div class="info">
              <h2 class="name">نسكفيا</h2>
          </div>
      </div>

      <div class="image_food">
          <img src="image/salis.png">
          <div class="info">
              <h2 class="name">Ali Alabsi</h2>
          </div>

      </div> -->

  </div>

</div>

 <!-- Footer -->
 <footer class=" footer text-center text-lg-start bg-#243b67 text-light " >
  <!-- Section: Social media -->
  <section class="justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <!-- <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div> -->
    <!-- Left -->

    <!-- Right -->
    
    <div class="d-flex justify-content-center ">
      <a href="" class="me-4 link-secondary  ">
        <i class="fab fa-facebook-f "></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <!-- <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"> -->
          <!-- Content -->
          <!-- <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div> -->
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 " style="color: black;">
           الروابط الرئسية
          </h6>
          <p>
            <a href="#!" class="text-reset">الرئسية</a>
          </p>
          <p>
            <a href="#!" class="text-reset">العروض</a>
          </p>
          <p>
            <a href="#!" class="text-reset">اطلب الان</a>
          </p>
          <p>
            <a href="#!" class="text-reset">طلباتي</a>
          </p>
          <p>
            <a href="#!" class="text-reset">الحساب</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>