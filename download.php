<?php
header("Content-type:image/jpg");
header("Content-Disposition: attachment; filename=".$_GET["pic"]."");
readfile($_GET["pic"]);
?>

