<?php
$name = (string)filter_input(INPUT_GET, "name");
$color_names = [];
if ($name !== "") {
    $lines = file("color_names.txt", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        if (stripos($line, $name) !== false) {
            $color_names[] = $line;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Search</title>
</head>
<body>
    <h3>Color Search</h3>
    <ul>
        <?php foreach ($color_names as $color_name) { ?>
        <li style="color: <?= $color_name ?>"><?= $color_name ?></li>
        <?php } ?>
    </ul>
</body>
</html>