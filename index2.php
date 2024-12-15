<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add prodect</title>
    <link rel="stylesheet" href="index.css">
</head>
<?php
      include('conn.php');
    $spc=mysqli_query($con,'select * from categ');
?>
<body>
    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>admin prodect</h2>
            <img src="" alt="">
            <br>
            <input type="text" name ="name" placeholder=" اسم الوجبة">
            <br>
            <input type="text" name="price" id="" placeholder=" السعر">

            <input list="browsers" name="items_id" placeholder=" اسم الصنف">
            <datalist id="browsers">
            <?php
         while($s=mysqli_fetch_array($spc)){
            
        echo "<option value='$s[0]' > $s[1] </option>";
         }
        ?>
            
            <br>
            
       
        </datalist>

            <br>
            <input type="file" id="file" name='file'>
            <!-- <br> -->
            <label for="file"> أختيار صورة </label>

           
            <button type="submit" name ="upload">رفع الملف</button>
            <br>
            <br>
            <a href="prodect.php">عرض جميع المنتجات </a>
        </form>
    </div>
</body>
</html>