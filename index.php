<?php
$gdrive ="https://drive.google.com/uc?id=";
$gdriveid = $_GET['url'];
header ("Location: $gdrive.$gdriveid");
exit;
?>
