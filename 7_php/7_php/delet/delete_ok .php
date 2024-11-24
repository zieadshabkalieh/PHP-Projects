<?php


include('config.php');




    if(isset($_POST['ok_del'])){
        $id=$_POST['id'];  
    //    $nam=$_POST['name_del'];
    //    $mark=$_POST['mark_del'];
    //    $max_ma=$_POST['max_ma_del'];
    //    echo  $nam;
      $stmt=$conn->prepare("delete from student where id=$id");
          $stmt->execute();
       
    }      

header('location:placement.php');
 

 

?>
