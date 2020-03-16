<!DOCTYPE html>
<html lang="en">
<head>
	<title>NAI</title>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<style>
body {
	background-color: #444 ;
}

</style>
<body>

<?php 
session_start();  
include('condb.php');
$sql="select * from image where image_type = 'food' ";
$result=mysqli_query($con,$sql);

?>
<header> 

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

	<?php
        while($row=mysqli_fetch_array($result)){
	?>
	    
        <div class="col-md-4" style="width:280px; ">
		<form>
		<div style="border:5px solid #333;background-color:#85929E;border-radius:30px;padding:10px;margin:10px">
		<img src="<?php echo $row['image_image'];?>" style="width:600px; height: 200px;" class="img-responsive" /><br>
		<center><button><a href="download.php?pic=<?php echo $row['image_id'];?>.jpg">DOWNLOAD</a></button></center>
		</div>
		</form>
		</div>

    <?php
        }
	?>


</body>
</html>