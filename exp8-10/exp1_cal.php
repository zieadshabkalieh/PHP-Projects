<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type='number'],input[type='text']{
            width:200px;
            border-radius: 5px;
            margin-bottom: 5px;
            display: block;
        }
        input[type='submit']{
          background-color: lightblue;
          display: block;
        }
    </style>
</head>
<body>
    <form action="exp1_cal.php" method="GET">
<label for="">Enter Num1</label>
<input type="number" name="Num1" id="" >
<label for="">Enter Num1</label>
<input type="number" name="Num2" id="">
<label for="">operation</label>
<input type="text" name="op">
<?php
// echo
// '<input type="text" name="Num2" id="" value='.$result.'> <br>';
?>
<input type="submit" value="submit" name="submit">


    </form>
    <?php


if (isset($_GET['submit'])){
    $n1=$_GET['Num1'] ;
    $n2= $_GET['Num2'] ;
    $op=$_GET['op'];


    if(!empty($n1)&& !empty($n2)&& !empty($op)){
        // global $result;
        if($op=='+'){
            $result= $n1 +$n2;
           
        }
        else if($op=='-'){
            $result= $n1 - $n2;
            
        }
        else if($op=='*'){
            $result= $n1 * $n2;
           
        } 
        else if($op=='/'){
            $result= $n1 / $n2;
            
        }
        else{
            $result= "error";  
           
        }
        echo $result;
    }
    else{
        $result="";
        if(empty($n1)){
            $result= "first num empty <br>"; 
            // echo $result; 
            // echo "first num empty <br>";
          }
           if(empty($n2)){
              $result.="second num empty <br>";
            //   echo $result;  
            // echo "second num empty <br>";
          }
          if(empty($op)){
            $result.="operation  empty <br>";  
            // echo $result;
            // echo "operation  empty <br>";  
            
        }
        echo $result;
    }
    
 
}

?>
</body>
</html>