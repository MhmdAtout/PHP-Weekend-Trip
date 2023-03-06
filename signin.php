<?php 

$email = $_POST["email"];
$password = $_POST["password"];

$reponse = [
    "email" => "",
    "password" => "",
];


$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);


if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $reponse["password"] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
    $response["password"] = " Strong password :)";
}

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response = [
        "status" => "Access denied :( Check your email or/and password"
    ];
}else{
    $response = [
        "status" => "Access approved :)"
    ];
}

echo json_encode($response);


?>