<?php
$gdrive ="https://drive.google.com/uc?id=";
$gdriveid = $_GET['id'];
header ("Location: $gdrive.$gdriveid");
exit;
?>
