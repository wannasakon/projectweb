<!DOCTYPE html>
<html lang="en">
<head>
	<title>NAI</title>
	<link rel="stylesheet" href="css/header.css">
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<body>

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
        <div class="container">
            <div class="logo">
                <h1>NAI</h1>
            </div>
            <ul class="menu">
                <li>
                    <a href="#">Animal</a>
				</li>
				<li>
					<a href="#">Background</a>
				</li>
				<li>
					<a href="#">Flower</a>
				</li>
				<li>
					<a href="#">View</a>
				</li>
            </ul>
        </div>
    </div>

 <?php
        $i = 0;
        while($row=mysqli_fetch_array($result)){
    ?>

    <?php 

       $imageid = $row['image_id'];


       if($imageid %2 == 0){
         $imageimage = $row['image_image'];
       }
       else{
        $imageimage = $row['image_image'];
       }
    ?>

    <div class="row"> 
  <div class="column">
    <img src="<?php echo $imageimage;?>" style="width:100%">
  </div>
  <div class="column">
    <img src="<?php echo $imageimage;?>" style="width:100%">
  </div>  

</div>

<?php
        }
    ?>

</body>
</html>