<!DOCTYPE html>
<?php 
    $con = mysqli_connect("localhost","root","","project");
    $sql = "select * from image";
    $result=mysql_query($con,$sql);
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>
<body>
    <h1> Image </h1>
    <div class="container" style= "width:700px">
    <h1>555</h1>
    <?php 
    while($row=mysqli_fetch_array($result)){
    ?>
    <div class="col-md-4">
        <form method="post"action="pageimage.php?action=add&id=<?php echo $row['image_id'];?>">
        <img src="<?php echo $row['image_image'];?>" /> 
    </form>
    </div>

    <?php } ?>
    </div>
    


</body>
</html>