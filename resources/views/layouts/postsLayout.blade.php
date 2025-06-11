<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary m-5">
        <div class="container-fluid">
            <a href="/posts" class="navbar-brand mb-0 h1">All posts</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>