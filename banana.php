<?php

$word=$_POST["word"];

function banana($letters) {
    $str = "";
    $new_str ="";
    for ($i = 0; $i < strlen($letters); $i++) {
      if (
        $letters[$i] != "a" &&
        $letters[$i] != "o" &&
        $letters[$i] != "e" &&
        $letters[$i] != "i" &&
        $letters[$i] != "u"
      ) {
        $str.=$letters[$i];
      } else {
        break;
      }
      $new_str = substr($letters,$i + 1);
    }
     $response=$new_str.$str."ay";
     echo $response;
  }
  banana($word);
  
?>
