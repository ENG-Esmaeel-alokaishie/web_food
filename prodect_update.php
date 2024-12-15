<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add prodect</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main">
        <?php
            $id = $_GET['id']; 
            $select = "SELECT * FROM admin_prodect where id =$id";
            include('conn.php');
            $result = mysqli_query($con ,$select);
            while($row = mysqli_fetch_array($result)){
            ?>  
        <form action="update.php" method="post" enctype="multipart/form-data">
            <h2>Update prodect</h2>
            <img src="" alt="">
            <br>
            
            <input type="hidden" name ="id" value =<?php echo $row['id']?>>
            <br>
            <input type="text" name ="name" value =<?php echo $row['name']?>>
            <br>
            <input type="text" name="price" id="" value =<?php echo $row['price']?>>
            <br>
            <input type="file" id="file" name='file' value =<?php echo $row['image']?>>
            <!-- <br> -->
            <label for="file"> أختيار صورة </label>
            <button type="submit" name ="upload">رفع الملف</button>
            <br>
            <br>
            <a href="prodect.php">عرض جميع المنتجات </a>
        </form>
        <?php
        }?>
    </div>
</body>
</html>