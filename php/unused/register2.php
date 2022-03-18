<!doctype HTML>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Account aanmaken</title>
</head>
<body>
<h1>Account aanmaken</h1>
<?php
$userID = NULL;
$username=$_POST["usernamevak"];
$password=$_POST["passwordvak"];
$rol="1";


require_once "connect.php";


$sql = $conn->prepare("insert into users values(:userID, :username, :password, :rol)");

$sql->bindParam("userID", $userID);
$sql->bindParam("username", $username);
$sql->bindParam("password", $password);
$sql->bindParam("rol", $rol);


$sql->execute([
    "userID"         => $userID,
    "username"       => $username,
    "password"      => $password,
    "rol"      => $rol

]);

echo "Account aangemaakt <br/>";
echo "<a href='index.php'> terug naar het menu </a>"

?>
</body>
</html>
