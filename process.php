<?php session_start(); 
include('condb.php');

# insert image for admin form add.php in mysql

$image_type = $_POST['image_type'];
$image_image = $_POST['image_image'];
$ins="INSERT INTO image(image_id, image_type, image_image) VALUES ('','$image_type','$image_image')";
$result=mysqli_query($con,$ins);

if($result){
    echo 'เพิ่มสำเร็จ';
    header('location: admin.php');
}else {
    echo 'ผิดพลาด';
}
?>