<?php

$dob = $_GET["dob"];
$year = date("Y");
$age = $year - $dob;


function isPrime($number){
    $response = [
        "isPrime" => "Its a Prime number",
    ];
    if ($number < 2) {
        $response["isPrime"]= "Not a prime number";
    }else if ($number == 2) {
        $response["isPrime"]= "Prime and even";
    }else{
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                $response["isPrime"] = "Not a prime";
                break;
            }
        }
    }
    echo json_encode($response);
    
}

isPrime($age);

?>