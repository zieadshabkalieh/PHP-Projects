<?php

include ('config.php');
session_start();

if(isset($_POST['submit'])){

   $email =  $_POST['email'];
  $pass =  md5($_POST['password']);//md5:لتشفير كلمة السر

 

   $stmt=$conn->prepare("select * from users WHERE email = '$email' AND password = '$pass'");
   $stmt->execute(array());
   $result=$stmt->fetch();


if(count($result)>0){
   $_SESSION['user_id'] = $result['id'];
   header('location:index.php');
}


else{
      $message[] = 'incorrect password or email!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
   input{
      text-align: center;
   }
   </style>
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $val){
      echo '<div class="message" onclick="this.remove();">'.$val.'</div>';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>تسجيل الدخول</h3>
      <input type="email" name="email" required placeholder="البريد الالكتروني" class="box">
      <input type="password" name="password" required placeholder="كلمة المرور" class="box">
      <input type="submit" name="submit" class="btn" value="تسجيل الدخول">
      <p>هل تملك حساب بالفعل؟ <a href="register.php"> حساب جديد</a></p>
   </form>

</div>

</body>
</html>