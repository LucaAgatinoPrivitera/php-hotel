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

    <h1>Bonus 1</h1>
    <form action="parking.php" method="GET">
        <input type="radio" name="Park" value="yes" id="yes">
        <label for="yes">Parking</label><br>

        <input type="radio" name="Park" value="no" id="no">
        <label for="no">No Parking</label><br>

        <button type="submit">Invia</button>
    </form>
    <table style="width:50%">
        <tr>
            <th>name</th>
            <th>description</th>
            <th>parking</th>
            <th>vote</th>
            <th>distance to center</th>
        </tr>

        <?php foreach ($hotels as $hotel)

                echo "<tr>" . "<td>" . $hotel["name"] . "</td>" . "<td>" . $hotel["description"] . "</td>" . "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>" . "<td>" . $hotel["vote"] . "/5" . "</td>" . "<td>" . $hotel["distance_to_center"] . " Km" . "</td>" . "</tr>";
        ?>
    </table>


</body>

</html>