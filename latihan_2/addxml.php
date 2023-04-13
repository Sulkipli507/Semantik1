<?php
$dom = new DomDocument('1.0');
$dom->load("coba.xml");
$induk = $dom->getElementsByTagName("induk")->item(0);
$anak = $induk->appendChild($dom->createElement("anak"));
$anak->appendChild($dom->createTextNode("anak ketiga"));
$dom->save("coba.xml");
header('location:coba.xml');
?>