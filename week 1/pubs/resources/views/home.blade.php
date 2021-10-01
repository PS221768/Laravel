<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body{
                background-color: #A1F4FF;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                background-color: #A1F4FF;
                width: 100%;
            }
            li {
                float: left;
                min-width: calc(25vw - 4px);
            }
            li a {
                text-align: center;
                text-decoration: none;
                display: block;
                font-size: 2vw;
                padding: 8px;
                background-color: #B4B3FF;
            }
            a:hover{
                background-color: #BFBFFF;
            }
            .navbar{
                position: absolute;
                margin-top: 0px;
            }
            .main{
                margin: auto;
                margin-top: 25vh;
                width: 50%;
                border: 3px solid black;
                padding: 10px;
            }
        </style>
        <title>home</title>

    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="http://127.0.0.1:8000/home">Home</a></li>
                <li><a href="http://127.0.0.1:8000/over_ons">over ons</a></li>
                <li><a href="http://127.0.0.1:8000/rooster">agenda</a></li>
                <li><a href="http://127.0.0.1:8000/vakken">vakken</a></li>
            </ul>
        <div>
        <div class="main">
            <p>Welcome User</br>
            </br>
            momenteel is er niet veel te lezen hier, maar ik hoop dat je het niet erg vindt :) 
        </p>
        </div>

    </body>
</html>
