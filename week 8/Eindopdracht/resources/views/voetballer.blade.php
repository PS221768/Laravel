<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>car</title>
</head>
<body>
@isset($voetballer)
    <p> {{ $voetballer->FirstName }}  {{ $voetballer->PrefixName }}   {{ $voetballer->LastName }} </p>
    <button onclick="edit()">
        Edit this voetballer
    </button>
    <script>
        function edit(){
            location.href = 'edit/' + {{ $voetballer->id }};
        }
    </script>
@endisset

@empty($voetballer)
    <p>no voetballer found with this id</p>
@endempty
    
</body>
</html>