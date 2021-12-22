<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>song</title>
</head>
<body>
@isset($band)
    <p> {{ $band->name }} - {{ $band->singer }} </p>
@endisset

@empty($band)
    <p>no band found with this id</p>
@endempty
    
</body>
</html>