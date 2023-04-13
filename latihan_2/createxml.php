<?php
$dom = new DomDocument('1.0');
$induk = $dom->appendChild($dom->createElement("induk"));
$anak = $induk->appendChild($dom->createElement("anak"));
$anak->appendChild($dom->createTextNode("anak pertama"));
$anak = $induk->appendChild($dom->createElement("anak"));
$anak->appendChild($dom->createTextNode("anak kedua"));
$dom->save("coba.xml");
header('location:coba.xml');
?>