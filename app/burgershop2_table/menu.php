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
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
        </tr>
        <?php foreach ($menu_list as $menu) { ?>
        <tr>
            <td><?= htmlspecialchars($menu[0]) ?></td>
            <td><?= htmlspecialchars($menu[1]) ?></td>
            <td><?= htmlspecialchars($menu[2]) ?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>