<?php
$id = (string)filter_input(INPUT_POST, "id");
$pass = (string)filter_input(INPUT_POST, "pass");
$login = "failure";
if ($id === "admin" && $pass === "secret1234") {
    $login = "success";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Login</h3>
    <p><?= $login ?></p>
</body>
</html>
