
<!DOCTYPE html >
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="student.css" class="css">
    <style>
        .active-row .imag{
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>
    <center>
    <table class="styled-table">
     <thead>
        <tr>
            <th>رقم الطلب</th>
            <th>اسم الطلب</th>
            <th>السعر</th>
            <th>رقم الزبون</th>
            <th>الصورة</th>
            <th>العسر الاجمالي</th>
            <th>الكمية</th>
            <th>حذف الطلب</th>
           
        </tr>
     </thead>
    <?php 
    include('conn.php');
    $select = "select * from request";
    $data = mysqli_query($con , $select);
    while($row = mysqli_fetch_array($data)){
        ?>
        
    <tbody> 
        <tr class="active-row">
            <td> <?php echo $row['id']?></td>
            <td><?php echo $row['name_pro']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['user_id']?></td>
            <td> <img src='<?php echo $row['image']?>' alt="" class="imag"></td>         
            <td><?php echo $row['total']?></td>
            <td><?php echo $row['quan']?></td>
            <td><?php echo"  <a href='delete_order.php? id=$row[id]' id ='delete'>حذف الطلب</a>"?></td>
      
    </tbody>
    
       
    <?php
}?>

<!--  <form action="in_re.php" method = "get">
        <input type="hidden" value="<?php// echo $row['user_id']?>" name ="id">
    <input type="submit" value ="تاكيد الطلب"> 
        </form> -->
        <!-- <tr>
            <td> </td>
            <td></td>
            <td></td>
            <td></td>
            <td> <form action="">
        <input type="submit" value ="طلب"> 
        </form> </td>         
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> -->
</table>        
    </center>
    <center>

    
        
    </center>

<img src="" alt="">
</body>
</html>