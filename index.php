<?php
$gdriveid = $_GET['url'];
header ("Location: 'https://drive.google.com/uc?id='.'$gdriveid'");
exit;
?>
