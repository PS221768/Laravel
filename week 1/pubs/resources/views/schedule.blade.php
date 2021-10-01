<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body{
                display: grid;
                grid-template-columns: [first] 40px  [main] auto  [five] 40px [end];
                grid-template-rows: [head] 10vh [main_start] auto [main_end] 10vh [footer];
                background-color: #A1F4FF;
            }
            .navbar{
                grid-column: 2;
                grid-row: 0;
            }
            .agenda{
                grid-column: 2;
                grid-row: main_start;

                display: grid;
                grid-template-columns: 25% 25% 25% 25%;
            }
            .agenda_item{
                width: 100%;
                font-size: 2vw;
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
                width:25%;
            }
            li a {
                text-align: center;
                text-decoration: none;
                display: block;
                font-size: 2.5vw;
                padding: 8px;
                background-color: #B4B3FF;
            }
            a:hover{
                background-color: #BFBFFF;
            }
            @media only screen and (max-width: 450px) {
                li a{
                    font-size: 3.5vw;
                }
                .agenda{
                    grid-template-columns: auto;
                    grid-template-rows: 25% 25% 25% 25%;
                }
                .agenda{
                    width: 100%;
                    font-size: 10px;
                }
                .agenda_item{
                    width: 40vw;
                    font-size: 12px;
                }  
            }
        </style>
        <title>agenda</title>

    </head>
    <body>
        <div class='navbar'>
            <ul>
                <li><a href="http://127.0.0.1:8000/home">Home</a></li>
                <li><a href="http://127.0.0.1:8000/over_ons">over ons</a></li>
                <li><a href="http://127.0.0.1:8000/rooster">agenda</a></li>
                <li><a href="http://127.0.0.1:8000/vakken">vakken</a></li>
            </ul>
        </div>
        <div class='agenda'>
            @foreach ($opdrachten as $key => $vak)
            <div class="agenda_item">
                {{ $key }} <br/>
                @foreach($vak as $huiswerk)
                    @foreach ($huiswerk as $opdracht)
                        {{ $opdracht }} 
                        @if ($opdracht[0] != "o")
                            <br/>
                        @endif
                    @endforeach
                @endforeach
                    <br/>
                </div>
            @endforeach
        </div>
    </body>
</html>
