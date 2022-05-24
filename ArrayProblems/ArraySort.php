<?php

$inputArray = array (
            "Deven" => array("firstName" => "Deven", "lastName" => "Mali", "city" => "Dhule"),
            "Nilesh" => array("firstName" => "Nilesh", "lastName" => "Patil", "city" => "Nashik"),
            "Ajay" => array("firstName" => "Ajay", "lastName" => "Bhamre", "city" => "Pune")
);

ksort($inputArray);

//print_r($inputArray);

foreach($inputArray as $name => $details){
    echo "$name => ( \n";
    foreach($details as $key => $value){
        echo $key ." => ".$value ."\n";
    }
    echo " ) \n";
}

?>