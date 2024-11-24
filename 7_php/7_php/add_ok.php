<?php
include('config.php');



if(isset($_POST['ok'])){
 $nam=$_POST['name'];
 $mark=$_POST['mark'];
 $max_ma=$_POST['max_ma'];
//  $num_unv=$_POST['num_unv'];
                                  
// $stmt=$conn->prepare("insert into student (id,num_unv,name,mark,max_mark)	  
//      VALUES(?,?,?,?,?)");
$stmt=$conn->prepare("insert into student (id,name,mark,max_mark)	  
     VALUES(?,?,?,?)");

    //  $stmt->execute([null,$num_unv,$nam,$mark,$max_ma]);
    $stmt->execute([null,$nam,$mark,$max_ma]);
//   $result=$stmt->fetchAll();
//   foreach($result as $values){
//     echo $values['name']."<br>";
//   }
 }

//delete
 if(isset($_POST['ok_del'])){
    $id=$_POST['id'];  

  $stmt=$conn->prepare("delete from student where id=$id");
      $stmt->execute();
   
}  
//update
if(isset($_POST['ok_up'])){
    $id=$_POST['id'];  
   $nam=$_POST['name'];
   $mark=$_POST['mark'];
   $max_ma=$_POST['max_ma'];
//    echo  $nam;
  $stmt=$conn->prepare("update student set name=?,mark=? where id= $id");
      $stmt->execute(array($nam,$mark));
    //   $result=$stmt->fetchAll();
    //   echo $result['name'];
}   

 header('location:placement.php');

?>
