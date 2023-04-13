<?php
$dom = new DomDocument('1.0');
$dom->load("coba.xml");
$doe = $dom->documentElement;
$targethapus = $doe->getElementsByTagName("anak")->item(2);
$targethapus->parentNode->removeChild($targethapus);
$dom->save("coba.xml");
header('location:coba.xml');
?>
