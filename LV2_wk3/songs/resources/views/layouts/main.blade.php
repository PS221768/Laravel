<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--tailwind isn't really working for me within laravel, so ill just call on a website to give it-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body class="bg-red-300">
    <ul class="grid grid-cols-3 bg-red-400">
  <li class="mr-6">
    <a class="bg-cyan-700 text-blue-500 hover:text-blue-800" href="/songs">songs</a>
  </li>
  <li class="mr-6">
    <a class="bg-cyan-700 text-blue-500 hover:text-blue-800" href="/bands">bands</a>
  </li>
  <li class="mr-6">
    <a class="bg-cyan-700 text-blue-500 hover:text-blue-800" href="/albums">albums</a>
  </li>
</ul>

@yield('content')
</body>
</html>