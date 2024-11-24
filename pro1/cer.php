<?php
session_start();
if(isset($_POST['add'])){

    $image=imagecreatefromjpeg("images/Certificate-Template.jpg");
 $color=imagecolorallocate($image,10,10,150);  
  $font=realpath("arial.ttf");
imagettftext($image,25,0,430,350,$color,$font,$_POST['name']);//(image,font size,angle,x,y,$color,$font,$_POST['name'])
imagettftext($image,25,0,447,477,$color,$font,$_POST['course']);
imagettftext($image,23,0,195,563,$color,$font,$_POST['teacher']);

$file_name=$_POST['name'].time().".jpg";
$file="stu/".$file_name;
// imagejpeg($image,"stu/".$_POST['name'].time().".jpg");//output

imagejpeg($image,$file);//output

$_SESSION['file']=$file;
// $_SESSION['file']="Noor-Book.com.pdf";
imagedestroy($image);//هدم الصورة لتحرير الذاكرة
header("location: read-image.php");

}



?>