<?php
$sales = [];

$file = "sales.csv";
$fp = fopen($file, "r");
$items = fgetcsv($fp);
while ($items !== false) {
    $sales[] = $items;
    $items = fgetcsv($fp); 
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Sales - CSV</h3>
    <hr>
    <table border="1">
        <tr>
            <th>DATE</th>
            <th>COMAPNY</th>
            <th>AMOUNT</th>
        </tr>
        <?php for ($i=0; $i < count($sales); $i++) { ?>
        <tr>
            <td><?= $sales[$i][0] ?></td>
            <td><?= $sales[$i][1] ?></td>
            <td><?= $sales[$i][2] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>