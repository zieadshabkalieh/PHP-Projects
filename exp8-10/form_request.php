<?php
/*
$_REQUEST
$_POST
$_GET
$_SERVER
$_SESSION

*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_request.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="">
        <label for="last">Last:</label>
        <input type="text" name="last" id="">
        <label for="password">password:</label>
      <input type="password" name="password" id="">
      <input type="submit" value="submit" name="submit">



    </form>
    <?php
   
    /*
echo $_GET['name']."<br>";
echo $_GET['last']."<br>";
*/

/*
echo $_POST['name']."<br>";
echo $_POST['last']."<br>";
*/
//طلب عام 
if(isset($_REQUEST['submit'])){
echo $_REQUEST['name']."<br>";
echo $_REQUEST['last']."<br>";
}
?>
</body>
</html>