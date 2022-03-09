<!DOCTYPE html>
<body lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<div class="login-page">
    <div class="form">
        <form id="log-in" action="" method="post" accept-charset="UTF-8">
            <label>Username
                <input type="text" name="username"/>
            </label>
            <label>Password
                <input type="password" name="password"/>
            </label>
            <input type="submit" name="submit">
            <p class="message">Nog geen account?<a href="register1.php">Registreer</a></p>
        </form>
    </div>
</div>
</body>
<?php


include "connect.php";

session_start();

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $result = sqlMetResult("SELECT * FROM users WHERE username = :username AND password = :password",
        [
            "username" => $username,
            "password" => $password
        ]
    );
    if (count($result) == 1) {
        echo "correcte gegevens";
        $_SESSION["rol"] = $result[0]["rol"];
        echo $_SESSION["rol"];

        if ($_SESSION["rol"] == 1) {
            header("Location: menu/mainmenu.php");
        }
        if ($_SESSION["rol"] == 2) {
            header("Location: menu/mainmenu.php");
        }


    } else {
        echo "verkeerde gegevens";
    }
}

?>
</body>
</html>
