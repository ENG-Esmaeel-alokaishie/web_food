<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>prodect</title>
        
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
    </head>
    <style>
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
    </style>
</head>
<body>
    <div class="container ">
    
        <div class="txt_last text-center  fw-bold">
           <!-- <img src="LOGN.png" alt="" class="img_logo "> -->
           <p >جميع المنتجات</p>
         </div>
        
         <div class="row align-items-center">
            <?php
            $select = "SELECT * FROM admin_prodect";
            include('conn.php');
            $result = mysqli_query($con ,$select);
            while($row = mysqli_fetch_array($result)){
            ?>   
           <div class=" col-md-6 col-lg-4 p-1 mb-4">
             <div class="prodect" style="width: 18rem; ">
               <img class="card-img-top " src="<?php echo $row['image']?>" alt="Card image cap">
               <div class="card-body">
                <div class="par">
                    <h4 class="product"><?php echo $row['name']?></h4>
                    <h4 class="price"><?php echo $row['price']?></h4>
                </div>
               </div>
               <div class="par2">
                <?php echo" <a href='prodect_update.php? id=$row[id]' id='update'>تعديل</a>"?>
                <?php echo"  <a href='delete.php? id=$row[id]' id ='delete'>حذف</a>"?>
               </div>
             </div>
           </div>
           <?php
            }?>
           
         </div>
     </div>
</body>
</html>