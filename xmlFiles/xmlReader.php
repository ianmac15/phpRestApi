<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods, Authorization, X-Reqquested-With');

// $data = file_get_contents("php://input");
// $xmlstr1 = new SimpleXMLElement($data);
$xmlstr2 = simplexml_load_file('employees.xml');

if (isset($xmlstr2)) {
    // echo $xmlstr->movies->movie[0]->characters->character[0]->name;
    echo $xmlstr2->record[0]->name;
    // print_r($xmlstr);
    
} else {
    echo 'Error: Cannot find file.';
}


if (isset($xmlstr1)) {
   
    echo $xmlstr1->movie[0]->character->name;
    
    
} else {
    echo 'Error: Cannot find file.';
}
