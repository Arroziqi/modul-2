<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/template.css">
    <script src="https://kit.fontawesome.com/72192a27df.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="frame">
        <header>
            @include('layout.topbar')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('layout.footer')
        </footer>

    </div>
</body>

</html>
