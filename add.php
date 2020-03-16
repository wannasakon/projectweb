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

label {
    display: inline-block;
    width:40px;
    margin: 10pxs;
    
}

</style>
<body>

<header> 

<div class="nav">
	<ul>
		<li class="home" id="home"><a href="#">HOME</a></li>
		<li class="about"><a class="active" href="#">ABOUT</a></li>
		<li class="contact" id="contact"><a href="#">CONTACT</a></li>
		<li class="member"><a href="#">Admin</a>
			<ul>
			    <li><a href="#">เพิ่มรูปภาพ</a></li>
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
			<ul class="menu" style="font-size: 20px; padding: 5px; text-align: center;">
			    <li>
				    <a href="all.php">All</a>
				</li>
                <li>
                    <a href="animal.php">Animal</a>
				</li>
				<li>
					<a href="background.php">Background</a>
				</li>
				<li>
					<a href="flower.php">Flower</a>
				</li>
				<li>
					<a href="food.php">Food</a>
				</li>
				<li>
					<a href="dessert.php">Dessert</a>
				</li>
            </ul>
        </div>
    </div>

<!-- form for insert data in mysql -->
   <div class="add" style="border:5px solid #333;background-color:#85929E;border-radius:30px;padding:10px;margin:10px">
    <form action="process.php" method="post" enctype="multipart/form-data">
        <h2 style="text-align:center;">Add IMAGE</h2>
        <label>Type:</label>
        <select name="image_type">
            <option value="animal">Animal</option>
            <option value="background">Background</option>
            <option value="flower">Flower</option>
            <option value="food">Food</option>
            <option value="dessert">Dessert</option>
        </select><br>

        <h5><b>เลือกไฟล์รูปภาพ</b></h5>

        <label>Url:</label>
        <input type="text" name="image_image" style="width:50%; ">
        <input type="submit" neme="save" value="save" />
    </form>
    </div>


</body>
</html>