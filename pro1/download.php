<?php 
session_start();
$file=$_SESSION['file'];
$mim_type=mime_content_type($file);
 header('Content-Type: '.$mim_type); 
header("Content-Disposition: attachment;filename=$file"); 
// readfile($file);
?> 