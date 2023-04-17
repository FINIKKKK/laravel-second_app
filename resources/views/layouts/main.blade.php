<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                </li>
            </ul>
        </nav>

        @yield('main')
    </div>
</body>

</html>
