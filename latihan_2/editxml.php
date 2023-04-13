<?php
$dom = new DomDocument('1.0');
$dom->load("coba.xml");
$dom->getElementsByTagName("anak")->item(2)->nodeValue ="anak pungut";
$dom->save("coba.xml");
header('location:coba.xml');
?>