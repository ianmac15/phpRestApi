<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("database.xml");

$xmlProducts = $xmlDoc->getElementsByTagName('name');


$dataArray = array();

for ($i = 0; $i < $xmlProducts->length; $i++) {
    // array_push($dataArray, $xmlProducts->item($i)->childNodes->item(0)->nodeValue);
    echo $xmlProducts->item($i)->childNodes->item(0)->nodeValue;
}



// return $dataArray;
// echo $xmlProducts->item(1)->childNodes->item(0)->nodeValue;


