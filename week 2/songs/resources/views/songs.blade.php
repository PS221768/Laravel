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
        $i = 1;
        foreach($songs as $song){
            echo "<li>";
            echo "<a href='songs/" . ($i) . "'>" . $song->title . "</a>"; 
            echo "</li>";
            $i += 1;
        }


    ?>




</body>
</html>