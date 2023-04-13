<?php
if(class_exists('SimpleXMLElement'))
{
    $countentxml = file_get_contents('buku.xml');
    $xml = new SimpleXMLElement($countentxml);

    echo '<u>Judul</u> Buku ke-1: <b>'.$xml->buku[0]->judul.'</b><br/>';
    echo '<u>Penulis</u> Buku ke-2: <b>'.$xml->buku[1]->penulis.'</b><br/>';

    $rating = $xml->buku[1]->rating;

    echo '<u>Rating</u> Buku ke-2: <b>'.$rating.'('.$rating['level'].')</b><hr />';
    foreach($xml->buku as $record_buku)
    {
        foreach($record_buku as $buku)
        {
            echo ucfirst($buku->getName()).': '.$buku;
            if($buku->getName()=='rating') echo ' ('.$buku['level'].')';
            echo '<br/>';
        }
        echo '<hr/>';
    }
} 
else echo 'SimpleXMLElement class is not exists';
?>