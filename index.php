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
    <table style="width:50%">
        <tr>
            <th>name</th>
            <th>description</th>
            <th>parking</th>
            <th>vote</th>
            <th>distance to center</th>
        </tr>
        
            <?php foreach ($hotels as $hotel) {
                echo "<tr>" . "<td>" . $hotel["name"] . "</td>" . "<td>" . $hotel["description"] . "</td>" . "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>" . "<td>" . $hotel["vote"] . "</td>" . "<td>" . $hotel["distance_to_center"] . "</td>" . "</tr>";
            }
            ?>
    </table>
</body>

</html>