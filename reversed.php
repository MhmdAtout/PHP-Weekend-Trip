<?php

$word=$_GET['word'];

function reverse($input){
    $separate=str_split($input);
    $letters=[];
    for ($i=0; $i <count($separate); $i++) { 
        if(!is_numeric($separate[$i])){
            array_push($letters,$separate[$i] );
            $separate[$i]="*";
        }
    }
    $reversed_letters=array_reverse($letters);
    for ($i=0; $i < count($separate) ; $i++) { 
        for ($j=0; $j < count($reversed_letters) ; $j++) { 
            if ($separate[$i]=="*") {
               $separate[$i]=$reversed_letters[$j];
               array_shift($reversed_letters);
            }
        }
    }
    $to_str=implode($separate);
    echo $to_str;
}

echo reverse($word);
?>