<?php
//check the database connection
include '../connections/database.php';
include_once '../functions/items.php';
//read data
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        load_items();
        ?>
    </div>
</body>

</html>