<?php
$file = "menu.txt";
$menu_list = file($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>Menu</h3> 
   <hr>
   <ul>
        <?php 
        for ($i=0; $i < count($menu_list); $i++) { 
            echo "<li>" . $menu_list[$i] . "</li>";
        }
        ?>
   </ul>
</body>
</html>