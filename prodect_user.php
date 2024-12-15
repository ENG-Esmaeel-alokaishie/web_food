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
      .par{
        display: flex;
        justify-content:space-between;

        margin: 0 12px;
        margin-bottom: 80px;
        /* margin-top: 5px; */
        color: var(--main-color);
      }
      .par2{
        display: flex;
        justify-content:space-between;
        color: var(--main-color);
        margin-bottom : 7px;
      }
      .p-1{
        margin-top: 20px;
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
            <a class="nav-link p-2  " href="main.php" id="nav">الرئسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  p-2 " href="#" id="nav">العروض</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  p-2 " href="#" id="nav">اطلب الان</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  p-2 " href="request.php" id="nav">طلباتي</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  p-2 " href="#" id="nav">الحساب</a>
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
  
    <div class="container ">
         <div class="row align-items-center">
            <?php
            include('conn.php');
            $id_cat = $_GET['id'];
            $select_cat ="SELECT name FROM categ where id = $id_cat";
            $result_cat = mysqli_query($con ,$select_cat);
            $row_cat = mysqli_fetch_array($result_cat);
            $name_cat = $row_cat['name'];       
            $select = "SELECT * FROM admin_prodect where id_cat =$id_cat";
            $result = mysqli_query($con ,$select);
            echo "<h1 class='new_p'><span> $name_cat </span></h1>";
            while($row = mysqli_fetch_array($result)){
            ?>
           <div class=" col-md-6 col-lg-4 p-1 mb-4">
             <div class="prodect" style="width: 18rem; ">
               <img class="card-img-top " src="<?php echo $row['image']?>" alt="Card image cap">
               <div class="card-body">
                 <!-- <h5 class="card-title">أيسكريم  <span>1500 ريال</span></h5> -->
                 <div class="par">
                  <h4 class="product"><?php echo $row['name']?></h4>
                  <h4 class="price"><?php echo $row['price']?></h4>
                 </div>
                  <form action="insert_request.php" method = "get">
                    <input type="number" value="0" name = "qun">
                    <input type="hidden" value="<?php echo $row['id']?>" name ="id">                   
                  <input type="submit" value ="طلب"> 
                  </form>
                 <!-- <a href="#" class="btn btn-primary">قراءة المزيد</a> -->
               </div>
             </div>
           </div> 
           <?php
            }?>
        </div>
    </div>
</body>
</html>