้<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAI</title>
</head>
<body>

<img src="https://www.sarakadee.com/blog/oneton/wp-content/uploads/2017/12/cat-cute-e1533862828469.jpg" alt="">
<form action="page.php" method="POST">
    Name: <input type="text" name="name"/> <br>
    url: <input type="text" name="url" size="50"/> <br>
    <select name="ext" >
        <option value="">.jpg</option>
        <option value="">.png</option>
    </select><br>
    <input type="submit" name="submit" value="Save Image">

</form>
<?php 
$condb = mysqli_connect('localhost','root','','test')or die('ไม่');
if(isset($_POST['submit'])){

    if(!empty($_POST['name']) && !empty($_POST['name'])){
        $postImageName = mysql_real_escape_string($_POST['name']);
        $postImageUrl = mysql_real_escape_string($_POST['url']);
        $postImageExt = mysql_real_escape_string($_POST['ext']);

        $postImageName = str_replace(" ","",$postImageName);
        @$rawImage = file_get_contents($postImageUrl);
        if($rawImage){
            file_put_contents("images/".$postImageName.$postImageExt,$rawImage);
            echo "Image Saved!";
        }else{
            echo "Error Getting Image From URL";
        }
    }
}
?>
    
</body>
</html>
