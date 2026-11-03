<?php
session_start();
if (isset($_POST["login"])) {
$login = $_POST["login"];
$password = $_POST["password"];

if ($login == "admin" && $password == "TajneHaslo321") {
    $_SESSION["login"] = $login;
    header("location: wyniki.php");
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

    <label for="login">login:</label>
    <input type="text" id="login" name="login">

    <label for="password">haslo:</label>
    <input type="text" id="password" name="password">

    <input type="submit">

    </form>
</body>
</html>