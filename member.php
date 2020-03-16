<!DOCTYPE html>
<html lang="en">
<head>
	<title>NAI</title>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
body {
	background-color: #444 ;
}
/* .filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
} */
</style>
<body>

<!-- เชื่อมต่อฐานข้อมูล -->
<?php 
session_start();  
include('condb.php');
$sql="select * from image";
$result=mysqli_query($con,$sql);

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='member'){
    Header("Location: ../logout.php");  
  }  
?>
<header> 

<!-- munu-bar-one -->
<div class="nav">
	<ul>
		<li class="home" id="home"><a href="#">HOME</a></li>
		<li class="about"><a class="active" href="#">ABOUT</a></li>
		<li class="contact" id="contact"><a href="#">CONTACT</a></li>
		<li class="member"><a href="#">MEMBER</a>
			<ul>
				<li><a href="logout.php">ออกจากระบบ</a></li>
			</ul>
		</li>
	</ul>

</div>
</header>
<div class="menubar">
        <div class="menuber-one">
            <div class="logo">
                <h1>NAI</h1>
			</div>
			<div align="center">
			<!-- <ul class="menu" style="font-size: 20px; padding: 5px; text-align: center;"> -->
            <a href="member.php"><button class="btn btn-default filter-button">All</button></a>
            <a href="animal.php"><button class="btn btn-default filter-button">Animal</button></a>
            <a href="background.php"><button class="btn btn-default filter-button" >Background</button></a>
            <a href="flower.php"><button class="btn btn-default filter-button">Flower</button></a>
			<a href="food.php"><button class="btn btn-default filter-button" >Food</button></a>
			<a href="dessert.php"><button class="btn btn-default filter-button" >Dessert</button></a>
			</div>
        </div>
    </div>

	<!-- loop show image && download -->

	<?php
        while($row=mysqli_fetch_array($result)){
	?>
	    
        <div class="col-md-4" style="width:280px; ">
		<form>
		<div style="border:5px solid #333;background-color:#85929E;border-radius:30px;padding:10px;margin:10px">
		<img src="<?php echo $row['image_image'];?> " style="width:600px; height: 200px;" class="img-responsive" /><br>
		<center><button onclick="myFunction()"><a href="download.php?pic=<?php echo $row['image_id'];?>.jpg">DOWNLOAD</a></button></center>
		</div>
		</form>
		</div>

		<script>
		
		function myFunction() {
			alert('URL:'+ ' <?php echo $row['image_image'];?>');
		}
		</script>

    <?php
        }
	?>


</body>
</html>