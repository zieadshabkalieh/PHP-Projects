<?php

include('config.php');



    if(isset($_POST['ok_up'])){
        $id=$_POST['id_up'];  
       $nam=$_POST['name_up'];
       $mark=$_POST['mark_up'];
       $max_ma=$_POST['max_ma_up'];
    //    echo  $nam;
      $stmt=$conn->prepare("update student set name=?,mark=? where id= $id");
          $stmt->execute(array($nam,$mark));
        //   $result=$stmt->fetchAll();
        //   echo $result['name'];
    }      

header('location:placement.php');
 

 

?>
