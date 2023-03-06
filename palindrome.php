<?php

$word = $_GET["word"];

function check($words) {
    for ($i = 0; $i < strlen($words) ; $i++) {
      if ($words[$i] == $words[strlen($words) - 1 - $i]) {
            $response = [
                "status" => "Its a Palindrome"
            ];
      } else {
          $response = [
            "status" => "OOPS it's not a Palindrome :("
          ];
        break;
      }
    }
    echo json_encode($response);
}

check($word);


?>