<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>songs</title>
</head>

<body>
    <div class="container mx-auto px-4">
        <?php
        foreach ($voetballers as $voetballer) {
            echo "<li>";
            echo "<a href='/voetballers/" . ($voetballer->id) . "'>" . $voetballer->FirstName . " " . $voetballer->PrefixName . " " . $voetballer->LastName . "</a>";
            echo "</li>";
        }
        ?>
        <button onclick="create()">
            Create new voetballer
        </button>
        <script>
            function create() {
                location.href = 'create';
            }
        </script>
    </div>
</body>

</html>