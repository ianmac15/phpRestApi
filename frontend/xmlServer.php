<?php

$cities = array("Athens", "London", "Paris", "Madrid", "Milan", "Aberdin", "Pizza", "Limasol");

$qvalue = $_REQUEST["q"];
$hint = "";

if ($qvalue !== "") {
    $qvalue = strtolower($qvalue);
    $length = strlen($qvalue);

    foreach($cities as $city) {
        if (stristr($qvalue, substr($city, 0, $length))) {
            if ($hint === "") {
                $hint = $city;
            } else {
                $hint .= ", $city"; 
            }
        }
    }

    echo $hint === "" ? "No such city" : $hint;
}
