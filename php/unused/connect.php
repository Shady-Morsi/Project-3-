<?php

$servername = "localhost";
$dbname = "ijsberen";
$username= "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connectie gelukt <br />";
}
catch(PDOException $e){
    echo "Connectie mislukt: " . $e->getMessage();
}

function sqlMetResult($commando, $data = []){
    global $conn;
    $query = $conn->prepare($commando);
    $query ->execute($data);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>
