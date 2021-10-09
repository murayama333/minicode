<?php
$x = (int)filter_input(INPUT_GET, "x");
$y = (int)filter_input(INPUT_GET, "y");
$answer = $x + $y;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
   <h3>Anaswer</h3> 
   <p><?= $answer?></p>
</body>
</html>