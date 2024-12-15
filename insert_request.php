<?php
include("conn.php");
// if(isset($_POST['upload'])){
    $id = $_GET['id'];
    $check = false;
    $select = "SELECT * FROM request";
    $result = mysqli_query($con ,$select);
    while($row = mysqli_fetch_array($result)){
        if($id == $row['id_pro']){
            $check = true;
            $id_request = $row['id'];
            $qun_db = $row['quan'];           
            break;
        }else{
            $check = false;
        }
    }
    if( $check == false){
        $Qun = $_GET['qun'];
        $slect = mysqli_query ($con ,"SELECT * FROM admin_prodect where id =$id");
        $data = mysqli_fetch_array($slect);
        $name =   $data['name'];
        // $user_id =echo $data['name'];
        $price =  $data['price'];

            $total = $price * $Qun;
        $image =  $data['image'];
        // $image_location = $_FILES['file']['tmp_name'];
        // $image_name = $_FILES['file']['name'];
        // $image_up = "images/".$image_name;
        $insert = "INSERT INTO request (user_id,name_pro,total,image,price,quan,id_pro) value (1,'$name','$total','$image',$price,$Qun,$id)";
        mysqli_query($con,$insert);
        echo "<script> alert ('تم عملية الطلب بنجاح!')</script>";
        header("refresh:0;request.php");
    }else{
        include("conn.php");   
        $Qun = $_GET['qun'];
        echo $Qun;
        $q = $qun_db + $Qun ;
        
        echo $q;
        $updat ="UPDATE  request  SET quan = $q where id =$id_request";
        mysqli_query($con,$updat);
        echo "<script> alert ('تم عملية تعديل الطلب بنجاح')</script>";
        header("refresh:0;request.php");
    }
    
    
// }

?>