<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>songs</title>
</head>
<body>

    <?php
        foreach($cars as $car){
            echo "<li>";
            echo "<a href='cars/" . ($car->id) . "'>" . $car->merk . " " . $car->bouwjaar . "</a>"; 
            echo "</li>";
        }


    ?>
</body>
</html>
