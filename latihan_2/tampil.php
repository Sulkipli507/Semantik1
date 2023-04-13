<?php
$dom = new DomDocument("1.0");
$dom->load("coba.xml");
$tampildata = $dom->getElementsByTagName("anak");
echo "<select>";
for ($i=0 ; $i<$tampildata->length ; $i++)
{
    echo "<option>";
    echo $tampildata->item($i)->getAttribute("nama");
    echo "</option>";
}
echo "</select>";
?>