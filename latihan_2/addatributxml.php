<?php
$dom = new DomDocument('1.0');
$dom->load("coba.xml");

$pilihnode = $dom->getElementsByTagName("anak")->item(0);
$pilihnode->setAttribute("nama","Joko");

$pilihnode = $dom->getElementsByTagName("anak")->item(1);
$pilihnode->setAttribute("nama","Toyib");

$pilihnode = $dom->getElementsByTagName("anak")->item(2);
$pilihnode->setAttribute("nama","Lasmini");

$dom->save("coba.xml");
header('location:coba.xml');
?>
