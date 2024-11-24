<?php
session_start();
$file=$_SESSION['file'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Image</title>
    <style>
        body{
            background-color: black;
            padding-top: 50px;
        }
        a{
            text-decoration: none;
            color: white;
            background-color: purple;
            font-weight: bolder;
            text-align: center;
            padding: 5px;
           
        }
    </style>
</head>
<body>
    <center>
    <a href=" download.php ">download</a>
    <br>
<br>
<img src="<?php echo $file ??''      ?>" alt="">


    </center>
</body>
</html>