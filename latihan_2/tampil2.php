<?php
$dom = new DomDocument("1.0");
$dom->load("coba.xml");
$tampildata = $dom->getElementsByTagName("anak");
for ($i=0 ; $i<$tampildata->length ; $i++)
 {
    echo $tampildata->item($i)->nodeValue."<br />";
 }
?>