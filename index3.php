<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add items</title>
    <link rel="stylesheet" href="index.css">
   
</head>
<?php
      include('conn.php');
    $spc=mysqli_query($con,'select * from categ');
?>
<body>
    <div class="main">
        <form action="items.php" method="post" enctype="multipart/form-data">
            <h2>admin items</h2>
            <img src="" alt="">
        <br>
           
            <input type="text" name ="name" placeholder=" اسم الصنف">
            <br>
           
    
                
            <input type="file" id="file" name='file'>
            <!-- <br> -->
            <label for="file"> أختيار صورة </label>
          
            <button type="submit" name ="insert">رفع الملف</button>
            <br>
           

             <h3> جميع الاصناف </h3>
           
                
                
            
        
       

        </form>

    </div>
</body>
</html>