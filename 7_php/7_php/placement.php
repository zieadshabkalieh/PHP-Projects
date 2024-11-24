<?php
include('config.php');
//
//   $hos="localhost";
//   $user="root";
//  $password="";
//  $db="edu";

 $nam;
 $mark;
 $max_ma;


// $conn= new PDO('mysql:host=localhost;dbname=edu','root','');//تم الاتصال بقاعدة البيانات 
// $conn= new PDO("mysql:host=$hos;dbname=$db",$user, $password);



 $stmt=$conn->prepare("select * from student ");
	   $stmt->execute();
	   $result=$stmt->fetchAll();


?>

<!Doctype html>
<html>
<head>
	<title>Online Education</title>

	<link rel="stylesheet" type="text/css" href="placement-style.css">
	<link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="forms.css">
</head>
<body id="body">
<!--<header>--> <!--style="position: sticky; top: 0px; background-color: white; z-index: 1"z-index to avoid absolute elem., affected by img opacity 60%
		 <h1 id="logo-name">E-learn</h1>
		<nan class="navbar">
			<a href="">Home</a>
			<a href="">About</a>
			<a href="">Courses</a>
			<a href="">Videos</a>
			<a href="">Price</a>
			<a href="">Contact</a>
		</nan>
	</header> -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
		<div class="container-fluid ">
		  <a class="navbar-brand logo-name" href="#">E-learn</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto ms-5 mb-2 mb-lg-0">
			  <li class="nav-item ">
				<a class="nav-link active" aria-current="page" href="#">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">About</a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="#">Courses</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Videos</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Price</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
		  
		  </div>
		</div>
   </nav>
	<div id="banner">
		<img src="img/img2.jpg" class="banner-img" />
		<div class="banner-txt1">
			<h1>Start Online Education</h1>
			<P>free online education for e-learning ... </P>	
		</div>
	</div>

<div class="card-box" style="width: 80%; margin: auto; box-shadow: 0 0 7px darkblue;">
			<div class="card-box-icon">
				<img src="img/4.png" alt="" />
			</div>
			<h2>Placement</h2>
			<b id="a1"><p>read more</p></b>
			<p id="p1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Praesent tempus eleifend risus ut congue
			eset nec lacus elit dor broma.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Praesent tempus eleifend risus ut congue
			eset nec lacus elit dor broma.</p>
		</div>

<div class="table-container">

<!-- <form action="add_ok.php" method="post"> -->
<button id="btn1" type="submit" name="add" >add row</button>
<button id="btn2" type="submit"  name="delet">delete row</button>
<button id="btn3" type="submit" name="update">update row</button>
<!-- <script>
	document.getElementById("btn3").addEventListener("click",update_row);
   function update_row(){
  //    document.getElementById("body").style.backgroundColor="red"
   document.getElementById("form1").style.opacity="1"; 
   document.getElementById("num2").style.display="block"; 
   
   document.getElementById("ok").addEventListener("click",ok_up);
     document.getElementById("cancel").addEventListener("click",cancel);
   // var to=parseInt(document.getElementById("Total").innerText);
   // console.log(to);



		function ok_up(){
			document.getElementById("form1").style.opacity="0"; 
		//  text3=document.createTextNode(t3);
		}  
		}
</script> -->
<!-- </form> -->
<!-- add student -->
<form action="add_ok.php" id="form1" method="post">
<!-- <div id="form1"> -->
		<input id="num2" type="number" placeholder="id"  name="id" >
		<input id="num1" type="number" placeholder="enter mark" name="mark">

		<!-- <input id="num2" type="number" placeholder="enter num_unv" name="num_unv"> -->
		<input id="t1" type="text" placeholder="enter name" name="name">
		<!-- <input id="t2" type="text" placeholder="enter mark" name="mark"> -->
		<input id="t3" type="text" value="100" name="max_ma">
		<div class="bt" id="div1">
				<input id="ok" type="submit" value="ok" name="ok">
				<!-- <input id="ok" type="button" value="ok"> -->
				<input id="cancel" type="reset" value="cancle">
		</div>
		
		<div class="bt" id="div2">
			   <input id="ok2" type="submit" value="ok" name="ok_del">
			
				<input id="cancel2" type="reset" value="cancle">
	
		</div>
		<div class="bt" id="div3">
				<input id="ok3" type="submit" value="ok" name="ok_up">
				<!-- <input id="ok" type="button" value="ok"> -->
				<input id="cancel3" type="reset" value="cancle">
		</div>
<!-- </div> -->

</form>
<!-- delete student -->

<!-- <form action="delete_ok.php" id="form2" method="post">
<input id="num2" type="number" placeholder="enter mark" name="delete_mark">
<input id="t2" type="text" placeholder="enter name" name="delete_name">

<input id="t4" type="text" value="100" name="delete_max_ma">
	<div>
		<input id="delete_ok" type="submit" value="ok" name="delete_ok">
	
		<input id="delete_cancel" type="reset" value="cancle">
	</div>
</form> -->
<!-- update student -->




<!-- <form action="update_ok.php" id="form3" method="post">
<input id="num2" type="number" placeholder="enter mark" name="update_mark">
<input id="t2" type="text" placeholder="enter name" name="update_name">

<input id="t4" type="text" value="100" name="update_max_ma">
	<div>
		<input id="update_ok" type="submit" value="ok" name="update_ok">
	
		<input id="update_cancel" type="reset" value="cancle">
	</div>
</form> -->

<table class="table" >
	<thead>
		<tr id="thead1">
			<th>#</th>
			<th>Name</th>
			<tH>Mark</th>
			<th>Superstate Mark</th>
			</tr>
	</thead>
	<tbody id="tb">
	<?php foreach($result as $value){?>
	
		<tr class='tbody1'> 
			<td id='td1'> <?php echo $value['id'] ??'' ?> </td>
			<!-- <td id='td1'> <?php // echo $value['num_unv'] ??'' ?> </td> -->
			<td><?php echo $value['name'] ??'' ?>  </td>
			<td> <?php echo $value['mark'] ??'' ?> </td>
			<td>100</td>
		</tr>

		<?php  }?>	
<!--		
		<tr  class="tbody1">
			<td>2</td>
			<td>Laila</td>
			<td>75</td>
			<td>100</td>
		</tr>
		<tr  class="tbody1">
			<td>3</td>
			<td>Iman</td>
			<td>67</td>
			<td>100</td>
		</tr>
		<tr  class="tbody1">
			<td>4</td>
			<td>Ali</td>
			<td>50</td>
			<td>100</td>
		</tr>
		<tr  class="tbody1">
			<td>5</td>
			<td>Nour</td>
			<td>88</td>
			<td>100</td>
		</tr>
		<tr  class="tbody1">
			<td>6</td>
			<td>Amin</td>
			<td>96</td>
			<td>100</td>
		</tr>
		<tr  class="tbody1">
			<td>7</td>
			<td>jihad</td>
			<td>75</td>
			<td>100</td>
		</tr>
		<tr  class="tbody1">
			<td>8</td>
			<td>Najlaa</td>
			<td>45</td>
			<td>100</td>
		</tr>
		<tr  class="tbody1">
			<td>9</td>
			<td>Aya</td>
			<td>83</td>
			<td>100</td>
		</tr>
		<tr  class="tbody1">
			<td>10</td>
			<td>Farah</td>
			<td>79</td>
			<td>100</td>
		</tr>
		<tr  class="tbody1">
			<td>11</td>
			<td>Lama</td>
			<td>78</td>
			<td>100</td>
		</tr>
-->		
	</tbody>
<tfoot>
	<?php
	$c=0;
foreach($result as $value){
   $c++;
}

	?>
	<td>Total Num. of students : <span id="Total"><?php echo $c ;  ?></span></td>
	<td colspan="3">
		<div class="pager">
			<a href="">Previous</a>
			<a href="#td1">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<a href="">5</a>
			<a href="">Next</a>
		</div>
	</td>
</tfoot>
</table>
</div>

<footer>
	<div class="site-map ">
		<div class="course-cat col-md-6 col-lg-3 col-12">
			<p class="map-list-title">Course Categories</p>
			<ul class="map-list">
				<li>Technology</li>
				<li>Business</li>
				<li>Photography</li>
				<li>Language</li>
			</ul>
		</div>
		<div class="product-cat col-md-6 col-lg-3 col-12">
			<p class="map-list-title">Product Categories</p>
			<ul class="map-list">
				<li>Individual</li>
				<li>Business</li>
				<li>Academic</li>
				<li>Trial</li>
			</ul>
		</div>
		<div class="browse-cat col-md-6 col-lg-3 col-12">
			<p class="map-list-title">Browse by Categories</p>
			<ul class="map-list">
				<li>All Courses</li>
				<li>All Members</li>
				<li>All Groups</li>
			</ul>
		</div>
		<div class="contact col-md-6 col-lg-3 col-12">
			<p class="map-list-title">Contact</p>
			<ul class="map-list">
				<li>Lorem reksi this dummy text </li>
				<li>Azizia, Aleppo, Syria</li>
				<li>00963 922 000 111</li>
				<li>Facebook/EnjazCo.</li>
			</ul>
		</div>
	</div>
	<div class="footer-box">
		<p class="copy-box">2020 Copyright &copy; .</p>
	</div>
</footer>

<script src="bootstrap-5.0.0-beta2-dist/js/bootstrap.js"></script>

<!-- <script src="script update.js"></script>
<script src="script delete.js"></script>
<script src="script.js"></script> -->
<script src="script copy.js"></script>
</body>
</html>