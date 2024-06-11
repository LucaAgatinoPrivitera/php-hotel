<?php
include 'data.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        text-align: center;
    }
</style>

<body>

    <h1><?php echo $prova; ?></h1>
    <table style="width:100%">
        <tr>
            <th>name</th>
            <th>description</th>
            <th>parking</th>
            <th>vote</th>
            <th>distance to center</th>
        </tr>
        <tr>
            <?php foreach ($hotels as $hotel) {
                echo "<td>" . $hotel["name"] . "</td>";
            }
            ?>
        </tr>
</body>

</html>