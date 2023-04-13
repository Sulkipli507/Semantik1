<?php
$xmldoc = new DOMDocument();
$xmldoc->load('sample.xml');
$node = $_POST['elemen'];
$isi = $_POST['isi'];

$root = $xmldoc->firstChild;
$newElement = $xmldoc->createElement($node);

$root->appendChild($newElement);
$newText = $xmldoc->createTextNode($isi);

$newElement->appendChild($newText);
$xmldoc->save('sample.xml');
header('location:sample.xml');
?>