<?php
$file = "menu.txt";
$menu_list = file($file);
if ($menu_list === false) {
    die("error");
}
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
        <?php foreach ($menu_list as $menu) { ?>
        <li><?= htmlspecialchars($menu); ?></li>
        <?php } ?>
    </ul>
</body>
</html>
