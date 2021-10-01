<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .main{
                margin: auto;
                margin-top: 25vh;
                width: 50%;
                border: 3px solid black;
                padding: 10px;
            }
        </style>
        <title>loggin</title>

    </head>
    <body>
        <div class="main">
            <span><h2 contenteditable="false">gebruikers naam:</h2><input type="text"/>
            <span><h2 contenteditable="false">wachtwoord :</h2><input type="password"></span>
            <button onclick="goToHome()">loggin</button>
        <div>
    </body>
    <script>
        function goToHome(){
            window.location.replace("http://127.0.0.1:8000/home");
        }
    </script>
</html>
