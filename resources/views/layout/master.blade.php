<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Blogger') | Blogger</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body class="text-justify">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 style="text-align: center" class="masthead-brand">Blogger</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="/">All</a>
                    <a class="nav-link"href="/home/Technology">Technology</a>
                    <a class="nav-link"href="/home/Gaming">Gaming</a>
                    <a class="nav-link"href="/home/Life">Life</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
        @yield('content')
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p style="text-align: center">
                    © <a href="/home">Blogger</a>{{ date("Y") }}
                </p>
                <p style="text-align: center">
                    <a href="#">Back to top</a>
                </p>
            </div>
        </footer>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
