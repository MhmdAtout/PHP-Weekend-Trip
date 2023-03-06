<?php

function selectionsort(&$Array, $n) {
    for($i=0; $i<$n; $i++) {
      $min_idx = $i;
  
      for($j=$i+1; $j<$n; $j++) {
        if($Array[$j] < $Array[$min_idx])
        {$min_idx = $j;}
      }
  
      $temp = $Array[$min_idx];
      $Array[$min_idx] = $Array[$i];
      $Array[$i] = $temp;
    }
  }
  
  function PrintArray($Array, $n) { 
    for ($i = 0; $i < $n; $i++) 
      echo $Array[$i]." ";
    echo "\n"; 
  } 

$numbers = $_GET["numbers"];
$MyArray = [];

for($i=0 ; $i < strlen($numbers) ; $i++){
    if($numbers[$i] !== ","){
        array_push($MyArray, $numbers[$i]);
    }
}

$n = sizeof($MyArray); 
echo "Original Array\n";
PrintArray($MyArray, $n);

selectionsort($MyArray, $n);
echo "\nSorted Array\n";
PrintArray($MyArray, $n);

?>