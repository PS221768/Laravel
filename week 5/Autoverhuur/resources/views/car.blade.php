<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car</title>
</head>
<body>
@isset($car)
    <p> {{ $car->merk }} - {{ $car->type }} - {{ $car->bouwjaar }} </p>
@endisset

@empty($car)
    <p>no car found with this id</p>
@endempty
    
</body>
</html>