<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bands</title>
</head>
<body>

    <?php
        foreach($bands as $band){
            echo "<li>";
            echo "<a href='bands/" . ($band->id) . "'>" . $band->name . " " . "</a>";
            echo "</li>";
        }


    ?>




</body>
</html>