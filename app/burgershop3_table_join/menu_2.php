<?php
function read_csv($file) {
    $fp = fopen($file, "r");
    if ($fp === false) {
        return false;
    }
    $list = [];
    $items = fgetcsv($fp);
    while ($items !== false) {
        $list[] = $items;
        $items = fgetcsv($fp);
    }
    fclose($fp);
    return $list;
}

$menu_list = read_csv("menu.csv");
if ($menu_list === false) {
    die("error");
}

$category_list = read_csv("category.csv");
if ($category_list === false) {
    die("error");
}
foreach ($menu_list as &$menu) {
    $category_id = $menu[3];
    $category_name = "";
    foreach($category_list as $category) {
        if ($category_id === $category[0]) {
            $category_name = $category[1];
            break;
        }
    }
    $menu[4] = $category_name;
}

echo "<pre>";
var_dump($menu_list);
echo "</pre>";
#die("test");
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
            <th>CATEGORY</th>
        </tr>
        <?php foreach ($menu_list as $menu) { ?>
        <tr>
            <td><?= htmlspecialchars($menu[0]) ?></td>
            <td><?= htmlspecialchars($menu[1]) ?></td>
            <td><?= htmlspecialchars($menu[2]) ?></td>
            <td><?= htmlspecialchars($menu[4]) ?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>