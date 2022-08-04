<?php

$data = trim(file_get_contents("php://input"));
// $xmlstr = new SimpleXMLElement($data);
$xmlstr = simplexml_load_file($data);

echo $xmlstr->movies->movie[0]->characters->character[0]->name;