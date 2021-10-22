<?php
$file = "menu.csv";
$fp = fopen($file, "r");
if ($fp === false) {
    die("error");
}
$menu_list = [];
$menu = fgetcsv($fp);
while ($menu !== false) {
    $menu_list[] = $menu;
    $menu = fgetcsv($fp);
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBurger</title>
</head>
<body>
    <h3>Menu</h3>
    <hr>
    <ul>
        <li></li>
    </ul>
    
</body>
</html>